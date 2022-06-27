$("#btn").click(function(){
    $("p").animate({
        opacity:"1", 
        width:"500px", 
        height:"50px"
    },1000);
})

$("p").click(function(){
    $("p").animate({
        opacity:"1", 
        width:"200px", 
        height:"100px"
    },1000);
})