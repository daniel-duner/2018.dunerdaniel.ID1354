$(document).ready(function(){
    $.get("/classes/index.php", function(data){ 
            if(data == "new"){
                $("#press").html("Signup was successful! <br> You are now logged in");
            } else if(data == "JLI"){
                $("#press").html("Welcome back! <br> You are now logged in");
            } else{
                $("#press").html("Tired of decisions? <br> Wanna stop wasting time?  <br><br> Our <a href='/calendar.php'>calendar</a> is filled with recipes!");
            }
    });




});