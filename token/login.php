<?php
date_default_timezone_set("Asia/Makassar");
include "tools.php";
	$Zeins = file_get_contents("../Zeins.txt");
if(isset($_POST['Zeins']))
{
    
        if($Zeins == $_POST['Zeins'])
        {
            $hasil = TRUE;
            $Zeins = $_POST['Zeins'];
        }else{
        	$hasil = FALSE;
        	}
    
    
    if($hasil){ 	
    redirect('./createLink.php?Zeins='.$Zeins.'');
    	}
    	}
?>

<!DOCTYPE html>

<html lang="en">



<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <link rel="stylesheet" href="../assets/log.css">


  <title>Login User</title>

</head>



<body>

  <div class="container cont1">

    <div class="row row1">

      <div class="head">

          <h3>WHYNESIA</h3>

      </div>

      <form method="POST" action="">

        <div class="mb-3">

	<input class="form-control" type="password" autofocus name="Zeins" placeholder="Password" required="required" />
        </div>

        <div class="button">

          <button class="btn btn-danger btn1" name="login" type="submit">Login</button>

          <a href="../index.php" class="btn btn-outline-success btn2">Kembali</a>

        </div>

      </form>

    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>



</html>