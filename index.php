<?php
  //Allow config
  define('__CONFIG__',true);
  //Require config
  require_once "inc/config.php"; 
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/css/uikit.min.css" />

</head>
<body>

<div class="uk-section uk-container">
    <?php

       echo "Hello World. Today's date is: ";
       echo date("Y m d");

       ?>

       <p>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
    </p>


    </div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit-icons.min.js"></script>

</body>
</html>