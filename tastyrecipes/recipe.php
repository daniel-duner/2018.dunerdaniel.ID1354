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
    <link rel="stylesheet" type="text/css" media="screen" href="resources/css/recipe.css"/>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="resources/js/main.js"></script>
    <script src="resources/js/recipe.js"></script>
</head>
<body>
<?php include 'resources/layout/background.php'; ?>
<div class="grid">
<?php include 'resources/layout/navbar.php'; ?>

<div class="recipe">
    <div class="recipe_title"></div>
    <div class="left_sidebar">
        <div class="recipe_img"></div>
        <div class="ingredients">
            <div class="meas"></div>
            <div class="ing"></div>
        </div>
    </div>
    <div class="right_sidebar">
        <div class="directions">
            <ul></ul>
        </div>
        <div class="comments">
            <div class="display"></div>
            <button id="send">Send</button>
            <p id="error_message"></p>
            <textarea id="text" name="text" cols="30" rows="10"></textarea>
        </div>
    </div>

</div>


</div>
</body>
</html>