$(document).ready(function(){
    $("form").submit(function(event ){
        event.preventDefault();
        var name = $("#username").val();
        var pwd = $("#password").val();
        var submit = $("#submit").val();
        $.post("/classes/login.php", 
            {
                name: name,
                pwd: pwd,
                submit: submit
            }, function(data){  
                switch(data){
                    case "usr":
                    $("#error_message").text("User does not exist");
                    break;
                    case "pwd":
                    $("#error_message").text("Wrong password");
                    break;
                    case "empty":
                    $("#error_message").text("Fill in all fields");
                    break;
                    case "success":
                    window.location.replace("index.php");
                    break;
                }
            });
    });

});

$.post("/classes/signup.php",{usr: usr, pwd: pwd, userCheck: true},function(reVal){
    switch(reVal){
        case "usr":
        $("#error_message").html("User already exists");
        break;
        case "format":
        $("#error_message").html("Only letters and numbers are allowed");
        break;
        case "success":
        window.location.replace("index.php");
        $("#press").html("Signup was successful! <br> You are now logged in")
        break;
    }
});