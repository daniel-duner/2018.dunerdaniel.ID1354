$(document).ready(function(){
    let weekdays = ["Monday", "Tuseday","Wednesday","Thursday","Friday","Saturday","Sunday"];
    for(let i = 0; i < 7;i++){
        $("#weekdays").append("<p>"+weekdays[i]+"</p>");
    }
    for(let i = 0; i < 31;i++){
    $(".calendar").append('<div class="day" id="day'+(i+1)+'"><div class="date">'+(i+1)+'</div></div>')
    }

    $("#day2").append("<img src='resources/images/pancakes.jpg' alt='pancakes.img'>")
    $("#day19").append("<img src='resources/images/meatballs.jpg' alt='pancakes.img'>")
});

//<a><img class="cal_img" id="cal_img'+(i+1)+'" ></a>