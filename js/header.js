$(function () {
    /////////// 헤더 시작 //////////////

    $('.Signin-button').hover(function(){
        $(this).css('color', 'white'); 
    }, function(){
        $(this).css('color', '');
    });

    $('.Signup-button').hover(function(){
        $(this).css('background-color', '#003942'); 
        $(this).css('color', '#e9e2d8'); 
    }, function(){
        $(this).css('background-color', ''); 
        $(this).css('color', ''); 
    });


    /////////// 헤더 끝 //////////////

    //////////// nav 시작 ///////////////
    $('.menuList').hover(function(){
        $(this).css('color', '#e9e2d8b4'); // 호버 시에 글자 색상을 파란색으로 변경합니다.
    }, function(){
        $(this).css('color', ''); // 호버가 해제되면 원래의 색상으로 되돌립니다.
    });

    //////////// nav 끝 ///////////////

    // 공지사항 클릭 시 이동
    $('.notice').click(function(){
        location.href="notice.html";
    });

    //FAQ 클릭 시 이동
    $('.FAQ').click(function(){
        location.href="FAQ.html";
    });

});