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
    <link rel="stylesheet" type="text/css" media="screen" href="resources/css/standard.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="resources/css/calendar.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="resources/js/main.js"></script>
    <script src="resources/js/calendar.js"></script>
</head>
<body>
<?php include 'resources/layout/background.php'; ?>
<div class="grid">
<?php include 'resources/layout/navbar.php'; ?>
<div id="weekdays">
</div>
<div class="calendar">
</div>
</div>
</body>
</html>