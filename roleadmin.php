<?php
if(!($_SESSION['PROFILE']['role']=="admin")){ 
	echo "<script type=\"text/javascript\">
            alert('Veillez vous conencter en tant que Admin');
            document.location.href='index.php';
            </script>";}
	//header("location:index.php"); }
?>