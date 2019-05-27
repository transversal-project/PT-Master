<?php
if(!($_SESSION['PROFILE']['role']=="visiteur")){ header("location:$_SERVER[HTTP_REFERER]"); }
?>