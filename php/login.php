<!DOCTYPE html>
<html>
    <head>
    </head>
<body>
<?php 
session_start(); 
    
if (isset($_POST['uname']) && isset($_POST['password'])) {
	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
    $scrivi = fopen("registazione.txt", "a");
    fwrite($scrivi, $_POST["uname"]);
    fwrite($scrivi, $_POST["password"]);
    fclose($scrivi);
    echo "funziona";
    
	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}

}
?>
</body>
</html>

