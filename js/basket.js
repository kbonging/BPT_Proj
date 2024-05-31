$(document).ready(function(){

    /////////////////////////////////////////////////////////
    /////////// 제품 수량 변동 시 가격 변동 시작///////////////
    /////////////////////////////////////////////////////////

    ///////// 제품 수량 변동 시작 ///////
    // $(".plus").click(function(){
    //     var $input = $(this).prev(".qty");
    //     var newValue = parseInt($input.val()) + 1;
    //     $input.val(newValue);
    // });
    
    // $(".minus").click(function(){
    //     var $input = $(this).next(".qty");
    //     var newValue = parseInt($input.val()) - 1;
    //     if(newValue >= 1) {
    //         $input.val(newValue);
    //     }
    // });
    ///////// 제품 수량 변동 끝 ///////

    // 초기 가격 설정
    var pricePerItem = 60000;
    $(".price").text("₩ " + pricePerItem.toLocaleString() + "원");

    $(".plus").click(function(){
        var $input = $(this).prev(".qty");
        var newValue = parseInt($input.val()) + 1;
        $input.val(newValue);

        updatePrice(newValue);
    });

    $(".minus").click(function(){
        var $input = $(this).next(".qty");
        var newValue = parseInt($input.val()) - 1;
        if(newValue >= 1) {
            $input.val(newValue);
            updatePrice(newValue);
        }
    });

    function updatePrice(quantity) {
        var totalPrice = pricePerItem * quantity;
        $(".price").text("₩ " + totalPrice.toLocaleString() + "원");
    }

    // + - 버튼 hover 시작 //
    $(".minus").hover(function(){
        $(this).css("background-color", "#ccc");
    }, function(){
        $(this).css("background-color", "");
    });
    
    $(".plus").hover(function(){
        $(this).css("background-color", "#ccc");
    }, function(){
        $(this).css("background-color", "");
    });
    // + - 버튼 hover 끝 //
    
    /////////////////////////////////////////////////////////
    /////////// 제품 수량 변동 시 가격 변동 끝///////////////
    /////////////////////////////////////////////////////////


    // 전체 선택체크 박스
    $("#check-all").change(function() {
        var isChecked = $(this).prop("checked");
        $(".select-checkbox").prop("checked", isChecked);
    });

    // 쇼핑 계속하기 버튼
    $('.contunue_shopping_Btn').click(function(){
        location.href="proteinList.html";
    });

    // 주문하기 버튼
    $('.order_Btn').click(function(){
        location.href="basket_order.html";
    });

    

});