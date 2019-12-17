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
    // arrows: falseで横の余白をなくす余白にarrowsのボタンがあるため空白が開く
    arrows: false
    })

    //  押したらtopへ戻る
    $(".fa-arrow-circle-up").click(function(){
        console.log("clicked");
        let name = $(".name").offset().top;
        $("html,body").animate({scrollTop:name},1000);
    })


    $(".btn").on("click",function(){
        console.log("clicked");
        $(".btn")
        .siblings(".res-li")
        .slideToggle();
    })

});


