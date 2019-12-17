

console.log("反応");


$(function(){
    $(".parsonality").on("click",function(){
        console.log("clicked");
        $(".parsonality")
        .siblings(".toggle")
        .slideToggle();
    })

    $(".parsonality").on("click",function(){
        $(".parsonality")
        .siblings(".separate")
        .slideToggle();
    })

    $(".arrow-php").on("click",function(){
        let namePhp=$(".name-php").offset().top;
        $("html,body").animate({scrollTop:namePhp},1000);
    })


    $(".btn").on("click",function(){
        console.log("touched");
        $(".btn")
        .siblings(".res-li-php")
        .slideToggle();
    })
})