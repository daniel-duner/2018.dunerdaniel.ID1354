$(document).ready(function(){
    $("form").submit(function(event){
    event.preventDefault();
    var usr = $("#username").val();
    var pwd = $("#password").val();
    var re = $("#retype").val();
  //  alert(re+" "+pwd);
    if(usr == "" || pwd =="" || re == ""){$("#error_message").html("Fill in all fields");} 
    else if(re !== pwd){$("#error_message").html("Passwords do not match");}
    else{
        $.post("/classes/signup.php",{usr: usr, pwd: pwd, userCheck: true},function(reVal){
            alert(reVal);
                switch(reVal){
                case "usr":
                $("#error_message").html("User already exists");
                break;
                case "format":
                $("#error_message").html("Only letters and numbers are allowed");
                break;
                case "success":
                window.location.replace("index.php");
                break;
            }
        });
    }
    
    });
});
