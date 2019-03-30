$(document).ready(function(){
    $.get("/classes/loginStatus.php", function(data){ 
              //  alert(data);
               if(data == 0){
                   $("#navbar").html(
                   '<a class="recipePage" id="meatballs" href="/recipe.php">Meatballs</a>'+
                   '<a class="recipePage" id="pancakes" href="/recipe.php">Pancakes</a>'+
                   '<a id="calebdarPage" href="/calendar.php">Calendar</a>'+
                   '<a id="logoutPage">Logout</a>');
               } else{
                   $("#navbar").html(
                   '<a class="recipePage" id="meatballs" href="/recipe.php">Meatballs</a>'+
                   '<a class="recipePage" id="pancakes" href="/recipe.php">Pancakes</a>'+
                   '<a id="calebdarPage" href="/calendar.php">Calendar</a>'+
                   '<a id="loginPage" href="/login.php">Login</a>'+
                   '<a id="signupPage" href="/signup.php">signup</a>');
               }
    });
    $("body").on( "click","#logoutPage", function() {
        $.post("/classes/logout.php", 
            {
                logout:true
            }, function(data){
                $("#navbar").children().eq(3).remove();
                $("#navbar").append(
                '<a id="loginPage" href="/login.php">Login</a>'+
                '<a id="signupPage" href="/signup.php">signup</a>');
                window.location.replace("index.php");
            });
      });

      $("body").on( "click",".recipePage", function() {
      var recipe = $(this).attr("id");
      $.post("/classes/setRecipe.php",{recipe: recipe});
      }); 


    



});