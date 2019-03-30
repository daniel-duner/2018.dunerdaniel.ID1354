$(document).ready(function(){

    $.getJSON("/classes/getRecipes.php", function(data){
       $(".recipe_title").html("<h2>"+data['name'][0]+"</h2>");
       $(".recipe_img").html("<img id='img'>");
       $("#img").prop("src",data['img'][0]);
       $("#img").prop("alt",data['alt'][0]);
       for(var i=0; i < Object.keys(data['meas']).length; i++){
            $(".meas").append("<li>"+data['meas'][i]+"</li>");
       }
       for(var i=0; i < Object.keys(data['ing']).length; i++){
        $(".ing").append("<li>"+data['ing'][i]+"</li>");
       }
       for(var i=0; i < Object.keys(data['dir']).length; i++){
        $(".directions").children().append("<li>"+data['dir'][i]+"</li><br>");
        }

    });

    $.getJSON("/classes/getComments.php",function(data){
        $.getJSON("/classes/getUser.php",{thisUser: "true"},function(user){
            for(var i = 0; i <data.length; i++){
                var del = "";
                if(user == data[i]['c_user']){
                    del = "<button class='delete' id='"+data[i]['c_id']+"'>X</button>";
                    }
                $(".display").append(
                    "<div>"
                    +"<h4>"+data[i]['c_user']+":</h4>"
                    +del
                    +"<p>"+data[i]['c_message']+"</p>"
                    +"<br><br>"
                    +"<p class='date'>"+data[i]['c_date']+"</p>"
                    +"</div>"               
               );
            }
        });
     });

    $("body").on( "click","#send", function() {
        $.get("/classes/loginStatus.php", function(data){ 
             if(data == true){
                $("#error_message").html("You need to be logged in to comment");
             } else if(data == 0){
                var text = $("#text").val();
                if(text == ""){
                    $("#error_message").html("Empty messages are not allowed");
                } else {
                    $.getJSON("/classes/addComment.php",{text: text} ,function(comment){
                        $(".display").append(
                            "<div>"+
                            "<h4>"+comment[0]+":</h4>"
                            +"<button class='delete' id='"+comment[2]+"'>X</button>"
                            +"<p>"+comment[1]+"</p>"
                            +"<br><br>"
                            +"<p class='date'>"+comment[3]+"</p>"
                            +"</div>"               
                            );
                        $("#text").val('');
                        $("#error_message").html('');
                    });
                }

             }
        });
    }); 

    $("body").on( "click",".delete", function() {
       var id = $(this).attr("id");
       var self = $(this);
       $.post("/classes/removeComment.php",{c_id: id},function(data){
            self.parent().remove();
       });
    }); 
        
});

