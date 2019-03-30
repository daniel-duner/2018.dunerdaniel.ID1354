<?php include 'classes/Session.php'; 
restart();
?>

<!DOCTYPE html>
<html>  
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tasty Recipes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="resources/css/reset.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="resources/css/standard.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="resources/css/signup.css"/>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="resources/js/main.js"></script>
    <script src="resources/js/signup.js"></script>
</head>
<body>
<?php include 'resources/layout/background.php'; ?>
<div class="grid">
<?php include 'resources/layout/navbar.php'; ?>

<form>
<input id="username" type="text" name="username" autocomplete="new-password" placeholder="Username">
<input id="password" type="password" name="password" autocomplete="new-password" placeholder="Password">
<input id="retype" type="password" name="retype" autocomplete="new-password" placeholder="Retype password">
<button id="sign_submit">Signup</button>
<p id="error_message" type="submit" name="submit" value="signup"></p>
</form>

</div>
</body>
</html>