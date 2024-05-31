$(function () {

    

    $('.pro_item_div').hover(function(){
        $(this).css('border', '1px solid black'); 
    }, function(){
        $(this).css('border', '');
    });

    // 해당 상품 입력시 상품상세페이지로 이동
    $('.pro_item_div').click(function(){
        // alert('test');

        location.href="proteinDetail.html";
    });

}); // $(function () 끝