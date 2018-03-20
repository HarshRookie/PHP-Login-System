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
    <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" ukgrid="">
	<form class="uk-form-stacked js-register">

    <h1> Register </h1>
    <div class="uk-margin">
        <label class="uk-form-label">Email</label>
        <div class="uk-form-controls">
        <input class="uk-input uk-form-width-medium uk-form-large" type="text" required ='required' placeholder="someemail@example.com">
    </div>
</div>

    <div class="uk-margin">
        <label class="uk-form-label">Password</label>
        <div class="uk-form-controls">
        <input class="uk-input uk-form-width-medium" type="password" placeholder="Password">
    </div>
</div>

    <div class="uk-margin">
         <button class="uk-button uk-button-default" type="submit">Register</button>
    </div>


</form>
</div>
</div>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit-icons.min.js"></script>

</body>
</html>