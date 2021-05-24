<?php
		include("includes/connect.php");

		$cat = $_POST['cat'];
		$cat_get = $_GET['cat'];
		$act = $_POST['act'];
		$act_get = $_GET['act'];
		$id = $_POST['id'];
		$id_get = $_GET['id'];

		
				if($cat == "address" || $cat_get == "address") {
					$ID = addslashes(htmlentities($_POST["ID"], ENT_QUOTES));
$IP = addslashes(htmlentities($_POST["IP"], ENT_QUOTES));
$PORT = addslashes(htmlentities($_POST["PORT"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `address` (  `ID` , `IP` , `PORT` ) VALUES ( '".$ID."' , '".$IP."' , '".$PORT."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `address` SET  `ID` =  '".$ID."' , `IP` =  '".$IP."' , `PORT` =  '".$PORT."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `address` WHERE id = '".$id_get."' ");
					}
					header("location:"."address.php");
				}
				
				if($cat == "addressmanagement" || $cat_get == "addressmanagement") {
					$ID = addslashes(htmlentities($_POST["ID"], ENT_QUOTES));
$Currency = addslashes(htmlentities($_POST["Currency"], ENT_QUOTES));
$Withdrawal address = addslashes(htmlentities($_POST["Withdrawal address"], ENT_QUOTES));
$Remarks = addslashes(htmlentities($_POST["Remarks"], ENT_QUOTES));
$operating = addslashes(htmlentities($_POST["operating"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `addressmanagement` (  `ID` , `Currency` , `Withdrawal address` , `Remarks` , `operating` ) VALUES ( '".$ID."' , '".$Currency."' , '".$Withdrawal address."' , '".$Remarks."' , '".$operating."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `addressmanagement` SET  `ID` =  '".$ID."' , `Currency` =  '".$Currency."' , `Withdrawal address` =  '".$Withdrawal address."' , `Remarks` =  '".$Remarks."' , `operating` =  '".$operating."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `addressmanagement` WHERE id = '".$id_get."' ");
					}
					header("location:"."addressmanagement.php");
				}
				
				if($cat == "assets" || $cat_get == "assets") {
					$ID = addslashes(htmlentities($_POST["ID"], ENT_QUOTES));
$Currency = addslashes(htmlentities($_POST["Currency"], ENT_QUOTES));
$Total assets = addslashes(htmlentities($_POST["Total assets"], ENT_QUOTES));
$Available balance = addslashes(htmlentities($_POST["Available balance"], ENT_QUOTES));
$Mortgage amount = addslashes(htmlentities($_POST["Mortgage amount"], ENT_QUOTES));
$Cooperation amount = addslashes(htmlentities($_POST["Cooperation amount"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `assets` (  `ID` , `Currency` , `Total assets` , `Available balance` , `Mortgage amount` , `Cooperation amount` ) VALUES ( '".$ID."' , '".$Currency."' , '".$Total assets."' , '".$Available balance."' , '".$Mortgage amount."' , '".$Cooperation amount."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `assets` SET  `ID` =  '".$ID."' , `Currency` =  '".$Currency."' , `Total assets` =  '".$Total assets."' , `Available balance` =  '".$Available balance."' , `Mortgage amount` =  '".$Mortgage amount."' , `Cooperation amount` =  '".$Cooperation amount."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `assets` WHERE id = '".$id_get."' ");
					}
					header("location:"."assets.php");
				}
				
				if($cat == "investmentincome" || $cat_get == "investmentincome") {
					$ID = addslashes(htmlentities($_POST["ID"], ENT_QUOTES));
$Currency = addslashes(htmlentities($_POST["Currency"], ENT_QUOTES));
$product name = addslashes(htmlentities($_POST["product name"], ENT_QUOTES));
$Number of cooperation = addslashes(htmlentities($_POST["Number of cooperation"], ENT_QUOTES));
$Cooperation cycle = addslashes(htmlentities($_POST["Cooperation cycle"], ENT_QUOTES));
$Annualized interest rate = addslashes(htmlentities($_POST["Annualized interest rate"], ENT_QUOTES));
$Cumulative income = addslashes(htmlentities($_POST["Cumulative income"], ENT_QUOTES));
$status = addslashes(htmlentities($_POST["status"], ENT_QUOTES));
$operating = addslashes(htmlentities($_POST["operating"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `investmentincome` (  `ID` , `Currency` , `product name` , `Number of cooperation` , `Cooperation cycle` , `Annualized interest rate` , `Cumulative income` , `status` , `operating` ) VALUES ( '".$ID."' , '".$Currency."' , '".$product name."' , '".$Number of cooperation."' , '".$Cooperation cycle."' , '".$Annualized interest rate."' , '".$Cumulative income."' , '".$status."' , '".$operating."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `investmentincome` SET  `ID` =  '".$ID."' , `Currency` =  '".$Currency."' , `product name` =  '".$product name."' , `Number of cooperation` =  '".$Number of cooperation."' , `Cooperation cycle` =  '".$Cooperation cycle."' , `Annualized interest rate` =  '".$Annualized interest rate."' , `Cumulative income` =  '".$Cumulative income."' , `status` =  '".$status."' , `operating` =  '".$operating."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `investmentincome` WHERE id = '".$id_get."' ");
					}
					header("location:"."investmentincome.php");
				}
				
				if($cat == "loginhistory" || $cat_get == "loginhistory") {
					$ID = addslashes(htmlentities($_POST["ID"], ENT_QUOTES));
$time = addslashes(htmlentities($_POST["time"], ENT_QUOTES));
$IP = addslashes(htmlentities($_POST["IP"], ENT_QUOTES));
$equipment = addslashes(htmlentities($_POST["equipment"], ENT_QUOTES));
$Area = addslashes(htmlentities($_POST["Area"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `loginhistory` (  `ID` , `time` , `IP` , `equipment` , `Area` ) VALUES ( '".$ID."' , '".$time."' , '".$IP."' , '".$equipment."' , '".$Area."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `loginhistory` SET  `ID` =  '".$ID."' , `time` =  '".$time."' , `IP` =  '".$IP."' , `equipment` =  '".$equipment."' , `Area` =  '".$Area."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `loginhistory` WHERE id = '".$id_get."' ");
					}
					header("location:"."loginhistory.php");
				}
				
				if($cat == "miners" || $cat_get == "miners") {
					$minerid = addslashes(htmlentities($_POST["minerid"], ENT_QUOTES));
$username = addslashes(htmlentities($_POST["username"], ENT_QUOTES));
$password = addslashes(htmlentities($_POST["password"], ENT_QUOTES));
$status = addslashes(htmlentities($_POST["status"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `miners` (  `minerid` , `username` , `password` , `status` ) VALUES ( '".$minerid."' , '".$username."' , '".md5($password)."', '".$status."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `miners` SET  `minerid` =  '".$minerid."' , `username` =  '".$username."' , `status` =  '".$status."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `miners` WHERE id = '".$id_get."' ");
					}
					header("location:"."miners.php");
				}
				
				if($cat == "onlinecomputingpower" || $cat_get == "onlinecomputingpower") {
					$ID = addslashes(htmlentities($_POST["ID"], ENT_QUOTES));
$Mining pool = addslashes(htmlentities($_POST["Mining pool"], ENT_QUOTES));
$status = addslashes(htmlentities($_POST["status"], ENT_QUOTES));
$File name prefix = addslashes(htmlentities($_POST["File name prefix"], ENT_QUOTES));
$Mining pool public key = addslashes(htmlentities($_POST["Mining pool public key"], ENT_QUOTES));
$Last update time = addslashes(htmlentities($_POST["Last update time"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `onlinecomputingpower` (  `ID` , `Mining pool` , `status` , `File name prefix` , `Mining pool public key` , `Last update time` ) VALUES ( '".$ID."' , '".$Mining pool."' , '".$status."' , '".$File name prefix."' , '".$Mining pool public key."' , '".$Last update time."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `onlinecomputingpower` SET  `ID` =  '".$ID."' , `Mining pool` =  '".$Mining pool."' , `status` =  '".$status."' , `File name prefix` =  '".$File name prefix."' , `Mining pool public key` =  '".$Mining pool public key."' , `Last update time` =  '".$Last update time."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `onlinecomputingpower` WHERE id = '".$id_get."' ");
					}
					header("location:"."onlinecomputingpower.php");
				}
				
				if($cat == "onlineminer" || $cat_get == "onlineminer") {
					$ID = addslashes(htmlentities($_POST["ID"], ENT_QUOTES));
$Mining machine name = addslashes(htmlentities($_POST["Mining machine name"], ENT_QUOTES));
$Mining power = addslashes(htmlentities($_POST["Mining power"], ENT_QUOTES));
$Last update time = addslashes(htmlentities($_POST["Last update time"], ENT_QUOTES));
$status = addslashes(htmlentities($_POST["status"], ENT_QUOTES));
$operating = addslashes(htmlentities($_POST["operating"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `onlineminer` (  `ID` , `Mining machine name` , `Mining power` , `Last update time` , `status` , `operating` ) VALUES ( '".$ID."' , '".$Mining machine name."' , '".$Mining power."' , '".$Last update time."' , '".$status."' , '".$operating."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `onlineminer` SET  `ID` =  '".$ID."' , `Mining machine name` =  '".$Mining machine name."' , `Mining power` =  '".$Mining power."' , `Last update time` =  '".$Last update time."' , `status` =  '".$status."' , `operating` =  '".$operating."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `onlineminer` WHERE id = '".$id_get."' ");
					}
					header("location:"."onlineminer.php");
				}
				
				if($cat == "servers" || $cat_get == "servers") {
					$ip = addslashes(htmlentities($_POST["ip"], ENT_QUOTES));
$port = addslashes(htmlentities($_POST["port"], ENT_QUOTES));
$performance = addslashes(htmlentities($_POST["performance"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `servers` (  `ip` , `port` , `performance` ) VALUES ( '".$ip."' , '".$port."' , '".$performance."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `servers` SET  `ip` =  '".$ip."' , `port` =  '".$port."' , `performance` =  '".$performance."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `servers` WHERE id = '".$id_get."' ");
					}
					header("location:"."servers.php");
				}
				
				if($cat == "users" || $cat_get == "users") {
					$name = addslashes(htmlentities($_POST["name"], ENT_QUOTES));
$email = addslashes(htmlentities($_POST["email"], ENT_QUOTES));
$password = addslashes(htmlentities($_POST["password"], ENT_QUOTES));
$role = addslashes(htmlentities($_POST["role"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `users` (  `name` , `email` , `password` , `role` ) VALUES ( '".$name."' , '".$email."' , '".md5($password)."', '".$role."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `users` SET  `name` =  '".$name."' , `email` =  '".$email."' , `role` =  '".$role."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `users` WHERE id = '".$id_get."' ");
					}
					header("location:"."users.php");
				}
				?>