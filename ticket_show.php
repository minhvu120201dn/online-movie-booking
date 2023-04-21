<?php
session_start();
if (!isset($_SESSION['uname'])) {
  header("location:index.php");
}
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Booking Summary</title>

<link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>


<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
 
</head>
<body>

 <div class="container py-5">
    <!-- For demo purpose -->
    <div class="row mb-4">
        <div class="col-lg-8 mx-auto text-center">

            <h1 class="display-6">BOOKING SUMMARY</h1>
        </div>
    </div> <!-- End -->
    <div class="row">
        <div class="col-lg-6 mx-auto">
<div class="card ">
                <div class="card-header">
                    <center><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxITEhUSExMWFhUVFxgXGRYXGBoYGhcXGBodGhcaGhcZHSggGB0lHxodITEhJSktLi4uGB8zODMtNygtLisBCgoKDg0OGxAQGi0mHyYtLS0rKy0tLS0tLS0tKy0tLS0tLS0rLS0tLS0rLSstLS0tLS0tLS0tLS0tLS0tLS0tLf/AABEIAIkBcQMBIgACEQEDEQH/xAAcAAACAwEBAQEAAAAAAAAAAAAABwQFBgMCAQj/xABTEAACAQMBAwcFCQwHBwQDAAABAgMABBESBSExBgcTIkFRcTJhgZGhFBdCUlNUcrGyIzNigpKTosHC0dLTFRYkQ0RFY3ODhJTD4/BVo8ThNEbz/8QAGwEBAAIDAQEAAAAAAAAAAAAAAAEEAgMFBgf/xAA6EQABAwIDAwkGBQQDAAAAAAABAAIDBBEFITESQVETImFxgZGhscEGMlLR4fAUI5Ky0kJigsIWQ3L/2gAMAwEAAhEDEQA/AHjRRRREUUUURFFFFERRRRREUUUURFFFFERRRRREUUUURFFFFERRRRREUUUURFFFeGkA4kDxNEXuioUu1LdfKmiXxdR9ZqHLyqsF8q9th4zR/wAVEVzRWbk5d7MH+NgPg+r7OaiS85eyl/xWfCOU/UlEWvorCyc6+yxwlkbwhk/aAqJPzxbPXhHcv9FEH2pBRExaKV7c9Np2Wtx6eiH1Oaiy89cfwbNz9KUD6lNETaopMyc9kvwbFB4zk/8ATFRpOei7+DbQDxLt9RFETvopCy88O0TwS2X/AHbn65KiS8621DwkjX6MS/tZoi/QtFI7khyh2ztK46FLwoijVJIIouovAY6m9idwHieympNsiYJhLmUvjynbifR1VPn0sPwTRFe0UuL6bakC9JDdST6SdUc1ujEEeUre50DA+cbjkEZBGdNyR5SLexFtBiljOmWJgQUbsxqAJU8QSB28CCKItDRRRREUUUURFFFFERRRRREUUUURFFec769URFFRry8iiXVLIka/Gdgo9bHFVJ5a7M+f2v56P99EV/RWf/rtsz59bfnk/fUuw5SWc7aYbqCRvipKjN+SDmiK1oqC21rcEgzxAg4ILqCCOIIzur5/TFt8vF+cT99EU+ioH9MW3y8X5xP31xm2pAeF3GvhJF+sGiK1orOzyIwJXabIO9WtCP0oTUGS2B/zqf0NYj6rcURbCisLNsnO7+nbgebXaj6oxUSTk+T/AJ/cfnYv2cURMWvhFK+bkiT/APsE/wCe/dKKhvyCZuG3nPi7N/8AIoiaM1o54TyL9ERftRmoU2xnPG9uR4GEfVDStl5uWPHbcbfSz/PNRZOa/P8AmlsfH/8AoaImVdcmAfK2nfL4Tov1Riqi45GWx8rbN/6b1fqK1g35qu6/sj4tj99cjzXyDhe2B/3pH7NQi1dzyJ2Z8PbM3493AfrWqyfkHsP4W1gfGa3P7NUbc2lwOF1YH/iCP+nX2Dmvv3z0b2smOOifVjPDPU3UUqzbkZsIf5sPQ0R+pajScl9hj/Nm9CBvsrUafms2kgLFYcAZJ6UAAd5JAxVc/Ia8HyB8LmD9biiKfLsTYg/zWX0Wsp+pKjPsrY/ZtOY/8HJ+vFQ25F3o+BEfC5tv5tdTyLusJgIWY4K9LD1fPkSb/RRF8k2dsvsv5j/wZ/XIKizWlgPJu5z/AMIv67gVMueR0yqcEFh2ak3nuB11Ak5OXQUMYjgnG4qT7DRFHkituyac+NvGP/kmo8ix/BZz4oF+pzXZ9lzjjDJ+Q37q4PbuOKMPFSP1URcqKCak7TtehbGrPV1Zxjv/AHURT+TnJm6vnK26ZC41OdyLngC3ee4VZ7U5vb+FtPRiQ4JOht4Axk4fGobxvXUBuzjIp1ckNmR2FnDAQdenXJpVmZpCAZDhQTgEhfMAo7qsJJo7mHpIWDFSSjDdiRcgqe1e1WG44JqVCyPNLYC12cZXUiSaVsr8IlWMSJ61J/GJrSnlCqzRxSIAszGNJUfWnSrxjfcCjbsDI4jG44z55PENBEy506pyO/JlbvzvwW41leWYP3c4AbXsx+r87MrKcefSsQ8MURaDlaY4w7ydEI3TLGVQ0YdCqjKtJGCWDgb2/uwKW/IPa6w7WjWMxiO4DRMsUcMaZwWjOIpZMnUMDLfDNMDnYA/o+TPn+y2PbikPydldLu3eNdbrNEVTIXWwcYXUdwzwye+iL9V0Vltl8trd5BBOslpcHhFcro1f7OTyJPQc+atTREUV5Y18z/5xoi90V51V6oiKKKKIuR3V9x4Uah20ah30RHp7fXurGc4/LRdnxBYwGuZQdCngiji7DuHYO0+YGtlle+k3Ao2hte4mkCtHbNpQEcdJ0x5716rOB3+mtFTUNp4nSu0Av99ZWTGF7g0LL/1a2nfH3RKCxbeHnfBIPxV4qPMAB3V097m+/wBD84f4Kb1U99yiijuobQqzSSjORjCjfjVk536Tw7q8g3Hq6Z5ETW6E2tewAucydw6l0DSxNHOJS4PNzff6H50/w1Q7Z2NPbOEnj0k71O4hsdqsN271in7WO51I1NmCfKWVNJ85BB9mfVW/DseqJahkUoBDiBkLEX36rGalY1hc3cl1srkxdXSmWKPWuogsWUZbcT5RBPHjU3+oN/8AID85H/FTJ5BWnR2EA7WUyH8clh7CK0FYVXtHPHK9sbWloJAuDu/yCmOkaWgm6QD7GlFx7l0DptQTSCp6xGcas44Hvq8s+Qd8JEJgXAYZ68ff9KpPIj+07VafiAZp/Qx0r9seqm1mrmJYzPSysiDW32QXXBNnHUCxC1w07XtJN9UoNr7FurUSySwL0BYZ6yHecKNwJ7fN2UbJ5PTSqs9pECjMFYOVGnGCdOojv8/ZW85wbplspGXedSbiN2NQzu8K6ciQ3uKJn8pwXIG4YYkru+jisjjMoojPsja2y0Cx0tf4r6ZXugpxymzfKyx13yQvZJdDQJ0eQSdSajgZxnV37qqTBJ7r9xNCmdWjQMEjIypyDgbiD5s05i5OPr/88aWfJfaMlztRmJGkGWUbt5TOmPf+MtZ0WLyzNle9osxu1kCONhqeB61jJA1paAdVHTkVdxITHbqzlyMs6blycfC8w9derDknfGbW1ui9QglXTecjf5VNJXxwqv2zygittJlZutkDSpbhgHcBu4iqUWPVcjg1rATwDXfy9FtdTMAuT4/RLi85FXioI4oF0kZL648se7jurN7a2BPa6enjCa9WnrK2dOM+STjiKav9fLIDBdwD3xtjv7vbWI5W7Tj2heW8cJJj6keSCpy79fcfNiuhR11dJKOXi2WWJcdki1hxJN+5aZI4w3muufvoUGLkJfMAwgGCAR14xuO8btW6vX9Qb/5AfnI/4qdNFcT/AJLVH+lnc7+Ss/g2cSvz7tPZclvIYpUCuACRkHcRkbxupqcwB3Xg88J9Yk/dWL5zh/b288cf1EfqrWcwkwDX2TgBbdiTwABmya9hRzGaBkp1cAT2rnyNDXEBXPPTtsrBHYx75LlhqA49GCMD8d8DzhWpZ/1Bv/kB+cj/AIq1GwZDtLas1+33qIgRA+bIiHqy5HYWFMGuJi2NyUswihANhne+p0GRG7Pt77MFMHt2nJLf1Bv/AJBfzkf8VRrqF4kiAUdIjupAAO9chhu49vCnZd3AjR5DwRWY+CjP6qRPuychW7tTZHHeTqz6c1YwbEZ63bMgaALWsCMzfiTuHisKiJsdrK72VyekvUaaKABlY9bUoVmXBOQSCeP/AN7qsn5M7Q6JSII9eo5GqPAG/h1vCt9yehaK1ijfytAL4GOs3Wb2nHoqxEmK503tDKJC1jRs52JB45ZbQ7fotzaVuyCTmlX/AFQvYkTo7dCzDLszJx7h1v8AzFV93sgJOokjCvoLNGCCNQ044bj5VORZCNwpI8qLmV72eUE9WV1U9wQlfV1TXQwnE5ayRzXgCwvkCM+sk+i1TwtjAUC62izoymNd3aAcp/8AfZWhWFemV9IdgYxpONylt7Y7dxPqqiuLyd10kYB44GM94PrHrpn823I4uPd14MMyFYY8Y0oc/dGHaTnqjsGDxIx3FWTCvrZX1ggjV1OkBIMYCFwwI8khjnO7iO4VneQd0z3NwSunprexunXGNM80biT0kIv5NaaGETRYkB6y6JFyQCRucbuzOR5wa5bO2etsJpWbXJI2t2xjOkaURFycKAMAZ4k99SoUHkvcxlrq1B61vOxA7QshMinw1Fx6KmXWwY3ljkY9WOTphGB5c2MCSRs5fSMYHZpXuGMPyVvHMsk0YUtNLJIGLY1RL0dtGukAlllMMsmRvXQGAbyW2e1OUaQW5mkjkXBK6CAx1AE8VbSRhSc6sYFEWP57NphbZYAd8hAx4FXJ9AQA/wC1FL/mt2YZ9pwburETM3mCDq/plajcob+a/ueld4UB3KHniCouc72ZhkniTjuAAAADW5rtlWVpGVS7t57mbBcxSK25ckIgByVG85xvOTu3AQit+cERvbiB4xIJGUsDjKxh1DsCfJYllQEbwZMjhSETlJc51oyR534jijUDzDq5x5ySe8mnXO/TyyTnydMiLx3xxNbyJx4HKyn8bzUgGiKkoeKnSfEbqlFsticsrw9JmVjpQkdeQexXA9Qqw2NzjbQZ0i0s7PjQEDMxH0X1Fh3kEbqp+S/JyVyzSOIo8YfIBcKceVqISHIPGQg9oVqcXJOwjiQLBGcYGZDnreMrqHl7xpVUqEV3se7eRMyJolXqyJuOltIbcR2EMD6anY+qoNiQJZxniyP64wn/AE6mq476lF6wPNRXzd3+yiiL60YPfQYRXSiiKt2vciC3lmY56KN5PyVLfqpXc1kLe5pJn3tLId/eEUL9rVWu5377otlzAHBlKRDwZgXH5CtVbyPtOisrdMYPRhj4v1z7Wrz3tJNs0oZ8Th3DPzsrdG2778ArisBs37vtyZ+K26EA9xAEePWz+qt7I4UFjwAJPgN5pVch+U1vA9xNcFg87BgApbAyzHePO3srz+GQSPhqHRtJOyGgAXPOcL+A8VbncA5gPG/d9U16X3OzMW9zW68Xdm9O5E+2atffDsPjSfm2rNyXyX+17do8mNAh3jH3rVITg8OtgVuwyjnp5+XljIDGudmLC4abeKxnka9my06kBMy3hCIqDgqhR4KMCq/lPd9FaTyDisbY+kRpX2kVaVjedO702YT5WRR6Fy59oHrrmUERmqY2He4X8z5FbpXbLCehVfNDabriXzpGPQCzfWtMasvzb2fR2MZ7ZGeQ+k4X9FRWordi8xlrZHdNv05eixp27MYCyvOUhNiyrxaSJR4lxgeutHZWwjjSMcERU9CgD9VQtv2nSiBDw6eFz4Rkyfs1aVqfUuNOyMHQuPfsj0PesgwbZPUq7b110NtNKOKRuR9LHV9uKxHNNbanuJyPioPSSzDw3JV1zoXeiyKZ3yyInoHXP2fbXvmztNFirY3yu7+3QPYoroxOMeFSPvm94b2N53oVpdzpwOAWp00rec7aR91LGv8AdxjJ7i5LEekaaalIflTd9LeXD9hkZR4J1B7FFbfZxhfVFx0a3xJAHhdY1hAYBxKgSXDMMHvz+qtDzc2vSX8Z7I1eT1DSPawrM0xOaK033Ex7kjHtZv2a9Li0vJUUjhwt+o7PqqcDbyAJkUUUV84XYSg50h/bvGKP62qs2Ltw29teRJnXdLFHkdiAuZPSQ2n8Y91W3OoP7avnhT7UlRebzY/ui7VmGUhxI3nbP3MesZ/FNfQqGobDhrJX6Nb5busnIda5MjS6YtHFMzkfsf3LapGR1z15PptxHo3L+LV1RRXgZZHSvdI/Ukk9q6rWhosFnecC76Owm73AjH47AH9HNLDkname6giwNOoM24eQh6QgnuJGPTWx53rrEcEPxnaQ+CDSPt+yovNJs/LTXBHDES+Jwz/s+uvU0D/wmEvm3uJt1+6O7M9ioSjlJw374pkkVFgn1SSgHdHoU/SK6z+i61KJqh5FzdLA8/y880o+jq0J+iij0V5lm0I3OGgIHabnyaVddbaA6/vxV8BSAur4tI7jHWdm4DtZm/aPrp8bRm0RSP8AFR29Sk1+eUG4V6f2YaTyrz/aP3fRU60+6OtbHm32Ib67COoMMY6SXcN+8aVPeWYD0Bq/Q/QCsDzNbMWDZxuG3NOzSEnsjTKp6MAt+PUl+c6yCq2JAJAWQtoAZQcZPW1KM9hGfN2V6tUFq7q4ig67yKgcgYY41NjA0jiWxgYHHAqs2rBJeRmJRJFE3F2+5sVPHSvl57OsEIzkHOCMhyt5QLPYHaFvNoeMsiSKSpQFlDp1gGAYqg3gZ1qewVachNqvc2MU15qfqkEncrKJZF1uowGGlRkkHySe+iK6g9zQaY1KuyqsaogVVCruVOIUAdgdiay/ONevc2F7EItMltc20YVW1a+l6Er2DBPTacbxu41pNtQr0eCuVeSJHQ4KtHPIINBXGF0hgwx2p5znLci7kOtyJTno/crszHOoW1zLCHJPE4tQSfNRFmbjkXFE6Wi6XuOj6SaVySqKWCYjjG4nVqUZ3/c23jUun1s7YNxYXoKxoGhVZCyyMEYP9zRHDMdetm0jGCG39YDfL5bRzx7XDxto1QSsTjIKwmSdlAyOsAI2BGCGZTndVttjZ8sMBlllQxSMsbS6PuqSRPrhmKqQjoJI1AjAXCEdY1CK7gj6S2BQjrxFsrwPSwTndnfjevqFYTnQ2Paw+57y1Xo+leVZNOT11O8gE7mBDg4IBplcjZI5bKF4hhCAAvxVVgqjfv8AI4ZG8EHtrDc5tiE2NZsPl1kbPYZkldv0mxUosts/lhDbhejtemdfJkuZMqh/07aNRHF4g57ya9bQ5ztpSeTKsXf0SKM+lwxHrrG0VClOXmX2xNcveCeRpGUQMCxJOCZQRv7Nw3eeml0QpJ8w82LydPjQBvyHA/bp4VKhFFFFERRRRREqOe6XpXsbMf3spY+beI1P6beqtOigDA4DcPCsdygk90colX4NrGM+IQv9qVfVWyrxntPLeZkfAE9pNv8AULo0TeaSqTlrd9FY3DZwShQeMhCD7VI6mnzs3em3iizvkkyfOqDf7WWlZXT9nIdmkL/ice4Zed1pqzd9uhFbnmltNVxLL8nGFHi7fuQ+usNTX5qLTTavJ2ySnH0UAUe3VVjHJeToX9Nh3nPwBWFM28gW1pX87l3maGIfAjZ8edzgenqe2mhSl2r/AGnbQTionRPxYgC49atXmMBaBUmY6Ma53p6lXas8zZ4myaGyrQRQxRD+7RU/JAFSqKK4pcXZnVWQLL4RX2iiiJZc79514Is+SryEfSIVfst66YGxbPobeGL4kaKfEAZ9tLPlF/adsrFxAkij/FTDP+1TZruYl+VSU0H9pef8jceqrQ86R7um3cvhpf8AvXp23Tk9+gfxVqOVu2zaW5mChm1KqqTgEk7+HmBPorEe+fP83j/KeowyDEdgyUhsCbH3d3WDxSZ8N7SKNyq5Ex2luZhOznUqhSoGSx3789gBPorXc2dposVbG+V3f26B7FHrrAcqeV8t5GsbRqgRtfVJOTggcfE03djWnQ28UXxI0X0gDPtq5iz6llCyOqN3ueTu0A6BbUhaoAwyksGQHmptFRNrXYhgllPCON3/ACVJqRF5I+iK8zs5XV2+aVPOwMXcZ/0F9jyVteQGx/c9ouoYkl+6P3jI6q+hcbu8mqzlPsf3TtO2UjKLDrfu0o5OPSSB4E1t67VZWWoIKZp3Xd3mw8z2AqvFHeVzz1IoqHsm66WPpR5LsxX6AJVCPMQNX41TK4z2lhIO5WWm4uEoedC713ujO6KNV9LZc+wimDyH2d0FlChGGZekbxfrY9AIHopYPH7t2mV4iW4Yf7tCf2Fp1ivRYw/kaSClHwhxHTb5l3cqdMNqRz/v70VLy0vuhsp3BwSmhfpP1QfRnPorpyQt9FlbLw+5Rk+LDUfaaynO3eErBbLxdi5Hh1U9ZY+qt9BEFVVHBQF9QxXOmi5OhiPxucextmjzPetrTtSu6AAqrllJpsbk/wCk6/lDT+ukWxwCe6nLzlS6bCQfGaNf0wf1UmZvJPga9H7NMtTPdxd5AepKqVh54HQv1RsPZ6x2cNuRlVgSMjvAQA+usZsbmmt4pMzSmeFSTHCy6dJOAdbg5cbhuwBkZxxyw4DlVI7h9Vda9GqapZtlQR+5444Y1jEp6iooX71Jv0gYzkCue3tpw2iq0hVIyNG8HSMuiqMKM4y2PNnJ3VZX5wFbedLqdwyd/V4D6VZvbW2rSaRrZ4ZZpIipa3EJZsHDpIA3VZQyDrZwCVzxFEUmFzPEwGEaJwY8g6FLRhkcoG36Ax6pbGpCfi4z8uzY16e2jziTZUkXWxqLwySK5bG4trmJON2ScVY2D34VhDs8LrYHVdTomAqhFGiHpScKozk7yWPbipGyeT937oWe5lgwsM0SxwxuPvzo7M0juSxynxR5RoiXmzOWEF5BCt1L0F5b4MVwylkkwCOuBuGVJV1OFYHiDjTnOUfKGRh0TyRSRoDhYC+kjTpA1yEnyerqALaTjViqvY00cReOWGKQkBVM3SBUZT29G6kBuBJO7ceAOZe3DD0Cg2aW87sSNLzHES5UlkkkYdZ9w80bHtFQpT82Vydjit0SJ2RwM9MmASTv3qcqy78BGBCjAHDNcrGSa3QwXUbTIC2mWGMurISSEeFdTIRnHAqQAc5yBZcmbjpLO2k+PBE35SA1aVKhLnbPJPZVxk+5LmFz8OC3mj9Ojo9BPitYPb/N28StJbvLIigsVltpY2AG89bSVP6NfoKoO22AtpieAik+yaIlRzL8mblJzeyIUhaAqhJGZOkKMCoBzpwucnjkY7actZ3m9z/Rdjn5tD9gYrRURFFFFERRRVPyt2h0FlczDikLlfpacL7SKIldyFb3Re394d4eQqp/BZ2YD0KqVuqyHNbZ6LENj747t6AejH2PbWvr5xjMvKVsh4G36cvMFdembaMJdctbf3XtO3tMkKIyWI4jVqZuPmRfXUr3sbf5eb1J/DXPkx932veT8RECg8ciMexG9db+rdXW1FII4IXkWY0nT3nc47uBCwjibJdzhe5PySl5Z8kILKBZFlkZmcIA2nHAsTuHcPbTD5IWfRWVumMHowxH4T9dvaxrI85xMtxaWo+Eckf7RggPoAamIoA3DgKjEKqWSihErrlxc43toOa31SFjRK6w0sPmvMsgVSx4KCT4DeaVXNnGZr6Sdvgq7n6cjY+otW75c3XR2Nw3xk0DxkIT9qs9zR2uIZ5ceW6oPBFz9b+yoo/ysOnl3uLWDzI7iknOmY3hmt9XAXA6To+0JrPgTgfUa71mdk3Wvad4OyOGCP1FmPtf2Vy4Yi8PPwtue8DzKsPda3SfQlaavjMAMngOPhX2qflhddFZXD5wejKg/hP1F9rCtccZkeGDUkDvNlLjYEpf83o90bSecjgJZvAyHAHqY+qmxS95orXEc8vxmWMfiDUftj1Uwq6uPSB1a5rdGgNHYL+ZIWikFoweOaXfO7d9W3h7y8h/FAVftN6qW9arnNu9d8y9kSInpI1n7XsrK167B4uTooxxF/1G/kQufUO2pCrDk7adLdQR/GlTP0QdTewGn5Sh5r7TXe68boo2b0thB7GPqpvV5v2ll2qlrPhb4n6AK7RCzCeJ8ll+cq76OwkHbIVjHpOW/RU1po+A8BS853rrq28PeXkPoAVftN6qYi1zqiPYooD8RkP7R6Lax15HDhb1XkRDUWx1iAufMCSB7TVFy52obezkKn7pJ9yjxx1PuyPOBk+itBS85UXPunatrag9SF1ZvO33x/Uigek1GGxCWcF4u1gLndTc7dpsO1J3bLMtTl3rdbMtBFDHEOEaLH+SAP1Vz2zd9DBLL8SN29IBx7am1lOcy70WLL2yuiD16z7FPrqvSxGeoYw/1OF+05+qzkOwwngFmOaXZ2qWWc8I1CKfwn3k+IA/SppVm+bzZ/Q2MeR1pcyn8fyf0QtX15cLHG8jeSisx8FGT9VW8XqPxFY9wzF7Dsy8Tn23WunbsRgdqi3uxLaWQSyQq7rgBiMkBTkY8CSfTVhSq5C7Yuri+QSTyFMSOyFjp8k4GOGASPVTVrDEqWWkkbDI/asLjM2AuRYX00vlkphe14LgLLD87cmLWJfjTA+hUf8AWRSrIpi8783/AOMn+1Y+jQB9ZpdV6/AGbNC08S4+JHkAqFUbylfqLkde9PY20va0MefpBQG/SBq5pYcxu2Q9tJaE9aBy6j/TkJJ9T6s/SFM+u0qy4XCZx5mBPhvH66xNjs+VttdKEYRQWhiaQqQru7lljQkdcKDxHxRW9qBc7Khk++KXB7Gdyv5JbHsoiNobXt4BmaeKIf6jqn2jVRtzlvZ2qo8rSaZN6FYpCr7s9V9Ok7t/Hhvqq23sXZ8bCKGyti7LJr0RxK6KF8rOnUetpXA35kXzAr9buS5sLxZ5Ok6EzKsmFGsQGJo2OkAEqWKZ+LPjuoio2sba7uitu0+qVmKxiCLJJLN5Ul0ozjs81bCy5o3fBlkkXcB1zGDgDAGEMg3DdjNLGxlZZY2j++K6MmOOsMCntxX61qEUHY9iIII4V4RqEHgNwHo4VOooqURWZ5yL3odmXj5wTC6D6Uo6NcefLCtNWE5dP7pvLHZq79UgupvNDCcqD5mYY8RRFrNhWfQ20EPycUafkqB+qp9FFERRRRREVhueSQjZcoHwniB8OkDfqrc1n+XWxTeWM1uvlsoZOzroQ6jPZkjHpoEWc5LRhbO1UfIxH0lQT7TVpSv5OcvTbRi2uYXPRdQFcB1CnGhkbG9eHHs9NXXvl2nyc/5Mf8dfParCK0Su/LLgScxmD9+C6zKiPZGdlZciOTclokhldHlmfJ05wAucbyBneWPprTMnn9FZGbnCtUSOQRzHVnGFTPp69Vl9y990RutqjROBkl8Hd26QpwM8M53Z4dtW5MNrKuUvkj5xtcnIDIDw4dFlrE0bG2B9VziQ3O2hKBmKHKhsggmJSp9UjH1Uw6U2weU4tIhMIEcuSmnOkKMkkjceOkVeXXOOY0jPuVWLjVvkOBuG7yPPVnEsHqJZGNiHNYwNBuBpqbX3krCGoa0Eu1JuvfO1d6beKLO+STUfooP3sKueQdr0VhAO1lMh/HJYewisXyk2gL2WKRk0qsTER51byQTvwPNu81Souc3SgRbNQFAUYlxgAY+JWc2FVP4COnjHO2i52Y6QN6hs7OVLzwsEzHXBwaXPNtd9LeXsuc9J1x4GRiPYRVltblwRHIRb5Okjy86cjGojTvA41heSvKY2ckj9EH6RQuA2gDBzuwprGDBp2U87dnnOADRcaB1zne24dyl1Q0vab6ap21iede702qR/KSDP0UBY+3TVZ76DfNR+dP8ALrN8ruUzXxjJj6MRhgBq1ZLYyeA7hWjDMGqo6pkkzbNBvq07jbQ31sspqljmENOfamTzeWnR2EPe+qQ/jE4/RxWkpYWfOR0caRrajCKqD7r2KMD+781dvfRb5qPzv/bqtU4PiE0r5OT94k+83ef/AEs2VETWgX8D8lJ2pzdSTTSzG6UdI7NjoicAncM69+Bgeiq695tjHG8jXS4RWc/cjwUEn4fmqT76LfNR+d/7dQttc4TTwSQi3CdIunV0mrAPHdoHEZHHtrpwsxsFrTYNyH/XkPoFpcaexI17Vac0Ft9znm+NIsf5A1H7Y9VMIDj5hmlDya5ce5IBALcPgsxbpNOSxzw0HgMDj2Vf2HOKZA5NqBpXP3zP7G7hVevwqsqKx8vJ3aTlzm6AWG++gCzinjZGG3zVVziW/S3mWlVAqIig9vwj2/heymnjs40kbza6XMhadCCzEqVPkhjuHnAGBnzcK3UPL9hM0Rtl3KWDdJvPDd5Hn9lW8QwmWSGCKMe4CDmBubxO8g9S1xTta5xO/wCq1W071YYpJm8mNSx8+BuHieHppac2qNNfS3D7yEdyfw5Gx9Wqu+0uWZvLeRWgVFXSxUPqDYyQCNIwMgH0Vx5I8pVhSZlt11HTkhtAIGcDyT3msabCZ4aKZoH5j8hmPd672zzOvBS+drpGncE1KxHOLZtcPa26nc0nWHb1iF1egazXG/5yOifR7kDbhkmTec93UqLs/lT00wumiAx1FTXnG7GdWnees3Z21Xw/B6unl5UtFw11sx7xBA39PUspqhj27I4juTFRAoAAwAAAO4DhWX5y7/o7JlBwZmWMeHlN+ipHpqkuucxlYr7jAwcb5cH09Sszyt5Ute9HmPo1j1bg2rJbG/yRwx7TWuhwOqZVMdK3mg3JuDpnpe+ZWUtSwsIac+1W3NPBm5lf4sWPymH8Jpq0k+SPKf3D0pEIkMmkeXpwF1fgnPleytH76LfNR+d/7dbcYwurqat0kbLtytm0bhxPG6xp542MsT4H5KFzsTZuo0+LCD+U7fw1iateU22jdzmYpo6qrpzqwF8+B3nsqqr0eHQOgpY4n6gZ9evqqkrg55IVvyT289jdR3K5IU6XUfDjby18eBHnUV+m7C8SaNJY2DI6hlYcCDwr8m1vubLl37ib3POSbZzkHj0LHiwHxD2gcDvHbm4taeN/tCKEapHVR2ZOM9/oHaeysNNt+/2hI0FioghTAkupDkgkZ0qq/Cwc4B7skdsKbm9lu717m4uxLZu3SRhWJZ1J1LHw0qg4ZBORwwTmmPZ2kcSCOJFRFGFRQFAA7gOFSoVLyb5J29pqYAyzOuJJ5es7DtXuRPwF3eNV3OHsOL+jpyg0CKPXpQABhGdYVhjycgMQMZIGc4q15Xbc9yQhwjyM7dGqoNTAlSdRUbyBjsBO8VgdvvK4PTQXJi6oZpGmxvIGMOqLvO7A45xRFUc0axT3bG50v0CLJCGOlI2DAEqgwoPA8NxAPGnjFMjeSytjuIP1V+br5rbpmhEOBqxpMYGM7+OskAZ7s1cbGt5dkhr1CjgSJFNGjglEY5CypwDHeAext27fUIn6TQDVdsbaMdzDFcRZ0SKGXIwRuO4jsIO70V3ubhI0LyOqoq6mdjgBRxOTuFSi87W2jHbwvPK2mONSzHzDsA7STuA7SRWR5ubSSZptq3C4luyOjU/3dsv3sDu1YB8+Ae2qcNJt25G5l2Xbvk5yDdSDsx8Xzdg/CPVaCIAAAMAbgBwAoi90UUURFFFFERRUT+kYflF9dH9JQ/KL66IqLlPyGsr465YysmMdLGdL+ncVf8YHFZR+Za3+DdTAedUJ9YApkf0lD8ovrry20IvlQPDH6xRFgk5q4gEAu3HR5x1F3545yfqqSvNjbYIaaTDcejCIW79+k/vraS2TH++ceAj/AFoajNshz/i7j0dCPqioioYubjZqpo0MVznDOzb/AE16i5utnBQuhiq8Azs2PXVnJycJ/wAbdjweMfVHUSXkbq439/xzuuMZ8xwnCiKP73ezy4kxJqAx99bGO7GcV6l5udnMrL0bANxw5GfTXmTm/jbje358bg/hfg/hH1DuqPLzZ27cbm7PW1daUHfkH4vm4cKIpLc3uzw/SEOGxj76wBHnGcVXS82+x8ktkb/l2UerVur6eaezPGWc8OLR78bhn7nvqH7ylh8tc+uL+VRF9m5Dcn18qZF8bvH1vUN+TXJkf4uH0XgP1PUv3lrL5e59cX8ug8y9n84ufXF/LqFKrn2HyYH+JB8J5G+omosljyWX++c+DXDfUtXXvL2nzm5/9r+XXw8ytp85uP8A2/4KIs468lhwa4PgLj9YFcJJeTI4R3beBcfaYVqfeWtfnVx6o/4a8+8rbfOp/VH/AA0RY+W95Ojha3rfjgfXLRb7W2MuoRWN2dQwczDOOHxz39la/wB5S3+dTfkp+6vUfM1AM/2qU5GN6r3g9mO6pULGvyj2d1dOzZWxgKWnwfNjCGob7dtA5kXZzaiOPux2GOHBY8Y3UwH5oIiQfdcmQSfITfk9vowPAV6HNHGNwumH+7B4cDnVntoiXDbZiViybOCkjGOmlIO/tUYBNRLva+tNK2kKod+FMx4Ht0yDHDu7KZx5oE+dtwI+9jtxv8riMZrzFzOqoAF2d2OMXc2rsk76Ilh/TD43wRkrwbDkr45Y1EkupNDKVxltZOCCDu9QpsrzPgYxecBgfcfMB8r5hQeaHsW8AHngJ35Y5z0v4RoiUt5cvIBrUZXdq4MR5x2+qoVN645l2Y593Af8Of52+uR5kX/9QX/lj/PqESmoprnmQk/9QX/lj/Po95KT5+n/AC5/nURKiimv7ycvz5P+XP8ANrz7ycvz5PzB/m0UpVUU1PeUm+ep+Zb+ZR7yk3z2P8y38dEWV5Gcu7mwOgfdYCd8LnGM8TG3wD5uB7snNOvk7yys7zckmiQ8YZRofPcATh/FSRS9HMrP88j/ADTfx13fmhuCGHuqHfn+7fcWO872PZkemihb7avJtLi6jmkkbQkZTo13DWWyHz4EjHh3UtOcflKXaayijZoI2RRKGORPGQ7Y46gNQXG49tMgbOntNndDbgz3EcWlCzAapDxYl24AknGeAApUbT5J7TNpBH7kcuJLhpACpK6uiCHIcgk6WOcnhUornm92BHtGOSefUhRxCpQAEhY13kspyd44YHGt9c8mIFErQxITM/STRuSyTEA7jqJCbzq3DGrBIpd8nbblBbo0NvaKiM5cmTo8hiqqd5k7lHwauF5HbYut17eqiHikepsjfkFU0KOOOJ4Dj2wi+pygfZeW0NPs86lj0D7pazDjBKCcYJ4Hw453llYX+1iXvlFvY7itvvEj44E8CPpEDh1QPKrXcneSUFmGEeptYXUXYnOk5Xq+SME8cZ89XyQ4OalFzsbSOKNY4lCIgAVVGAB5hUmiiiIooooiKKKKIqFdhsOEg7RwPaMd9Sf6Ok+Ovqb+KrWiiKpfZkh+Gv5J83n81cpNjMRp1jG74J7PT56u6KIiiiiiIooooiKKKKIiiiiiIooooiKKKKIiiiiiIooooiKKKKIiiiiiIooooiKKKKIiiiiiIooooiKKKKIiiiiiIooooiKKKKIiiiiiIooooiKKKKIiiiiiL//Z" width="40%">
                    <h6> Near Upansna Circle, Surendranagar</h6></center>
                    <?php 
                  include "Database.php";
                  $result = mysqli_query($conn,"SELECT c.movie,c.booking_date,c.show_time,c.seat,c.totalseat,c.price,c.payment_date,c.custemer_id,u.username,u.email,u.mobile,u.city,t.theater FROM customers c INNER JOIN user u on c.uid=u.id INNER JOIN theater_show t on c.show_time=t.show WHERE custemer_id = '".$_SESSION['custemer_id']."'");
                  
                  $row = mysqli_fetch_array($result);
                 
                ?>
                    <table>
                        <tr>
                        <td>+91 846050 2720</td>
                        <td style="padding: 12px 2px 12px 155px;">Custemer Id: <?php echo $row['custemer_id'];?></td>
                    </tr>
                    <tr>
                        <td></td><td style="padding: 1px 2px 1px 155px;">Date: <?php echo $row['payment_date'];?></td>
                    </tr>
                    </table>
                    <hr>
                    
                    <center><h3>Movie Name: <?php echo $row['movie'];?></h3></center>

                   <table>
                   	<tr>
                   	<th>Name</th><th style="padding: 1px 105px;">City</th>
                   </tr>
                   <tr>
                   	<td><?php echo $row['username'];?></td><td style="padding: 12px 105px;"><?php echo $row['city'];?></td>
                   </tr>
                   <tr>
                   	<th>Email</th><th style="padding: 1px 105px;">Phone</th>
                   </tr>
                   <tr>
                   	<td><?php echo $row['email'];?></td><td style="padding: 12px 105px;"><?php echo $row['mobile'];?></td>
                   </tr>
                   <tr>
                   	<th>Payment Date</th><th style="padding: 1px 105px;">Payment Amount</th>
               	  </tr>
               	  <tr>
               	  	<td><?php echo $row['payment_date'];?></td><td style="padding: 12px 105px;">RS. <?php echo $row['price'];?>/-</td>
               	  </tr>
                   </table>

                   <hr>

                   <h4>BOOKING DETAILS:</h4>
                   <table>
                   	<tr>
                   	<th>Theater</th><th style="padding: 0px 2px 0px 60px">Date</th><th style="padding-left: 30px;">Time</th>
                   </tr>
                   <tr>
                   	<td>No. <?php echo $row['theater'];?></td><td style="padding: 12px 2px 12px 60px"><?php echo $row['booking_date'];?> </td><td style="padding-left: 30px;"> <?php echo $row['show_time'];?></td>
                   </tr>
                   <tr>
                   	<th>Seats</th><th style="padding: 0px 2px 0px 60px;">Total Seats</th>
                   </tr>
                   <tr>
                   	<td style="padding-right: 150px;"><?php echo $row['seat'];?></td><td style="padding: 12px 2px 12px 60px"><?php echo $row['totalseat'];?></td>
                   </tr>
                   
                   </table>
                   
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>