$(function () {

    // 버튼 hover 시 색 변화
    $(".button").hover(function(){
        $(this).css("background-color", "#385e64");
      }, function(){
        $(this).css("background-color", "");
        
        });

    // 인증번호 버튼
    $(".certificationBtn").hover(function(){
        $(this).css("background-color", "#385e64");
      }, function(){
        $(this).css("background-color", "");
        
        });


}); // $(function () 끝