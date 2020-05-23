<!DOCTYPE html>
<html lang="en">
<head>
	<title>Vota sondaggio</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
            <?php
			    
				$myfile=file_get_contents("scelteSondaggio.txt");
				$testo=file_get_contents("testoSondaggio.txt");
				$scelte=explode(";",$myfile);
				if($testo!="")
				{
					$voto=array();
    				$mylife=file_get_contents("votiSondaggio.txt");
					$voto=explode(";",$mylife);
					$somma=$voto[0]+$voto[1]+$voto[2];
				
					if($somma!=0)
					{
						$perce1=round(($voto[0]*100)/$somma,2);
				    	$perce2=round(($voto[1]*100)/$somma,2);
				    	$perce3=round(($voto[2]*100)/$somma,2);
					}
					else
					{
						$perce1=0;
						$perce2=0;
						$perce3=0;
					}
				

					echo'<p style="word-break: break-all color:red font-size:50px"><b>'. $testo . '</b></p>


					<form method="post" action="elaboraSondaggio.php">
					%'.$perce1.' <input type="radio" name="scelta" value="scelta1">
					'
					.$scelte[0].
					'
					<br>
					%'.$perce2.' <input type="radio" name="scelta" value="scelta2">
				
					'
					.$scelte[1].
					'
					<br>
					%'.$perce3.' <input type="radio" name="scelta" value="scelta3">
					'
					.$scelte[2].
					'
					<br>
					<button class="login100-form-btn">
						VOTA
					</button>  
					</form>
					<form action="index.html">
						<div class="container-login100-form-btn m-t-17">
							<button class="login100-form-btn">
								TORNA NELLA HOME
							</button>
						</div>
					</form>';
				}
				else
				{
					echo'<meta http-equiv="refresh" content="0;URL=index.html">
        			<script>
          				alert("Nessun sondaggio da votare!!");
          			</script>';
				}
				
            ?>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>