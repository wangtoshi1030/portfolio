console.log("反応");

$(function(){
    // 画像が自動で切り替わる
    $(".slick").slick({
        infinite: true,
    speed: 500,
    fade: true,
    autoplay: true,
    autoplaySpeed: 4000,
    // dots: false,
    // cssEase: 'linear',
    pauseOnHover: false,
    })

    //  押したらtopへ戻る
    $(".fa-arrow-circle-up").click(function(){
        console.log("clicked");
        let name = $(".name").offset().top;
        $("html,body").animate({scrollTop:name},1000);
    })

});


