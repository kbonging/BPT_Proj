$(function () {
    // alert('test');

    $('.board td:nth-child(2)').click(function(){
        // alert('업데이트중입니다.');
        location.href="boardDetail.html";
    });

    // 글쓰기버튼 호버
    $(".boardWriteBtn").hover(function(){
        $(this).css("background-color", "#ccc");
    }, function(){
        $(this).css("background-color", "");
    });

    // 글쓰기버튼 클릭 시
    $(".boardWriteBtn").click(function(){
        // alert('test');
        location.href="boardWrite.html";
    });

}); // $(function () 끝