$(function () {
    // alert('test');

    // 장바구니 버튼 클릭 시
    $('.Register_shopping_cart').click(function(){
        alert('장바구니에 추가되었습니다.');
    });

    // 구매하기 클릭 시
    $('.purchase_btn').click(function(){
        // alert('결제창으로 이동');
        location.href="basket_order.html";
    });

}); // $(function () 끝