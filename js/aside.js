$(function () {
   
    // alert('test');

    //FAQ 클릭 시 이동
    $('.FAQ').click(function(){
        location.href="FAQ.html";
    });

    //로그아웃(signOUt) 클릭 시 로그아웃
    $('.signOUt').click(function(){
        alert('로그아웃');
        location.href="index.html";
    });

    //로그아웃 hover 시
    $('.signOUt').hover(function(){
        $(this).css({
            'cursor': 'pointer',
            'text-decoration': 'underline'
        });
    }, function(){
        $(this).css({
            'text-decoration': 'none'
        });
    });
});