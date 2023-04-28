<?php
session_start();
if (!isset($_SESSION['uname'])) {
    header("Location: index.php");
}

require 'vendor/autoload.php';
require 'paypal.php';
require 'Database.php';

use PayPal\Api\Payer;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Details;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payment;

function getCurrentUrl() {
    $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https://' : 'http://';
    $host = $_SERVER['SERVER_NAME'];
    $port = $_SERVER['SERVER_PORT'];
    $uri = $_SERVER['REQUEST_URI'];
    
    $url = $scheme . $host;
    
    // Include the port number if it's different from the default ports (80 for HTTP, 443 for HTTPS)
    if (($scheme === 'http://' && $port != 80) || ($scheme === 'https://' && $port != 443)) {
        $url .= ':' . $port;
    }
    
    $url .= $uri;
    
    return $url;
}
$currentUrl = getCurrentUrl();

// Replace these values with the actual ticket price and currency
$CticketPrice = 100;
$VIPticketPrice = 150;
$currency = 'USD';

// Get the number of tickets from the user (you can replace this with a POST request)
// $numberOfTickets = 2;
$Ctickets = 1;
$VIPtickets = 1;

$payer = new Payer();
$payer->setPaymentMethod('paypal');

if (isset($_POST['submit'])) {
    $show = $_POST['show'];
    $seats1 = implode(",", $_POST['seat']);
    $seats = explode(",", $seats1);
    foreach ($seats as $seat) {
        switch ($seat[0]) {
            case 'I':
            case 'H':
            case 'G':
                $Ctickets++;
                break;
            default:
                $VIPtickets++;
        }
    }

    $username = $_SESSION['uname'];
    $result = mysqli_query($conn,"SELECT u.uid, u.username,u.email,u.mobile,u.city,t.theater FROM user u INNER JOIN theater_show t on u.username = '".$username."' WHERE t.show = '".$show."'");
    $row = mysqli_fetch_array($result);
    $movie_name = $_POST['movie'];
    $theater = $row['theater'];
    $booking_date = date("D-m-y ",strtotime('tomorrow'));
    $transactionDescription = "Movie name: $movie_name; Theater: $theater; Booking Date: $booking_date";
}

$Citem = new Item();
$Citem->setName('Common Movie Ticket')
    ->setCurrency($currency)
    ->setQuantity($Ctickets)
    ->setPrice($CticketPrice);
$VIPitem = new Item();
$VIPitem->setName('VIP Movie Ticket')
    ->setCurrency($currency)
    ->setQuantity($VIPtickets)
    ->setPrice($VIPticketPrice);

$itemList = new ItemList();
$itemList->setItems([$Citem, $VIPitem]);

$details = new Details();
$details->setTax(0)
    ->setSubtotal($Ctickets * $CticketPrice + $VIPtickets * $VIPticketPrice);

$amount = new Amount();
$amount->setCurrency($currency)
    ->setTotal($Ctickets * $CticketPrice + $VIPtickets * $VIPticketPrice)
    ->setDetails($details);

$transaction = new Transaction();
$transaction->setAmount($amount)
    ->setItemList($itemList)
    ->setDescription($transactionDescription)
    ->setInvoiceNumber(uniqid());

$redirectUrls = new RedirectUrls();
$redirectUrls->setReturnUrl('https://localhost/online-movie-booking/ticket_show.php')
    ->setCancelUrl('https://localhost/online-movie-booking/seatbooking.php');

$payment = new Payment();
$payment->setIntent('sale')
    ->setPayer($payer)
    ->setRedirectUrls($redirectUrls)
    ->setTransactions([$transaction]);

try {
    $payment->create($apiContext);
} catch (PayPal\Exception\PayPalConnectionException $ex) {
    echo "<b>Error Message:</b> " . $ex->getMessage() . '<br/><br/>';
    echo "<b>Detailed Error Message:</b> " . $ex->getData() . '<br/><br/>';
    die($ex);
} catch (Exception $ex) {
    die($ex);
}

$_SESSION['ticket_info'] = array();
$_SESSION['ticket_info']['customer_id'] = $row['uid'];
$_SESSION['ticket_info']['theater'] = $row['theater'];
$_SESSION['ticket_info']['movie'] = $movie_name;
$_SESSION['ticket_info']['seats'] = $seats1;
$_SESSION['ticket_info']['total_seat'] = $_POST['totalseat'];
$_SESSION['ticket_info']['time'] = $_POST['show'];
$_SESSION['ticket_info']['city'] = $row['city'];
$_SESSION['ticket_info']['email'] = $row['email'];
$_SESSION['ticket_info']['mobile'] = $row['mobile'];
$_SESSION['ticket_info']['price'] = $Ctickets*$CticketPrice+$VIPtickets*$VIPticketPrice;

$approvalUrl = $payment->getApprovalLink();
header("Location: {$approvalUrl}");
?>
