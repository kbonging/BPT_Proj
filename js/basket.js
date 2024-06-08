$(document).ready(function(){

    /////////////////////////////////////////////////////////
    /////////// 제품 수량 변동 시 가격 변동 시작///////////////
    /////////////////////////////////////////////////////////
    // $(".price").text("₩ " + pricePerItem.toLocaleString() + "원");

    // + 클릭 시 실행
    $(".plus").click(function(){
        // (+) 클릭하면 현재 수량 확인하고 +1 해서 다시 input값에 넣어주는거임
        var $input = $(this).prev(".qty");
        var newValue = parseInt($input.val()) + 1;
        $input.val(newValue);
        
        // hidden에 숨겨둔 제품 가격을 가져와서 숫자로만 만들어주는거
        var $price = $(this).closest('.items_count_body').next('.items_price_body').find('.price_input_hidden');
        var $price = $price.val().replace(",", "").replace("원","");
        
        // console.log($price); //테스트용 콘솔로그

        // 수량이랑 가격 넣어서 함수 호출 계산해서 반환값 리턴함
        var $price = updatePrice(newValue, $price);
        // 숫자를 "," 넣어서 200,000 식으로 포맷
        var $price = new Intl.NumberFormat().format($price);
        console.log($price);

        $(this).closest('.items_count_body').next('.items_price_body').find('.price_input').val("₩ " +$price+"원");
    });
        
    // - 클릭 시 실행
    $(".minus").click(function(){
        var $input = $(this).next(".qty");
        var newValue = parseInt($input.val()) - 1;
        if(newValue >= 1) {
            $input.val(newValue);

            // hidden에 숨겨둔 제품 가격을 가져와서 숫자로만 만들어주는거
            var $price = $(this).closest('.items_count_body').next('.items_price_body').find('.price_input_hidden');
            var $price = $price.val().replace(",", "").replace("원","");
            
            // console.log($price); //테스트용 콘솔로그
    
            // 수량이랑 가격 넣어서 함수 호출 계산해서 반환값 리턴함
            var $price = updatePrice(newValue, $price);
            // 숫자를 "," 넣어서 200,000 식으로 포맷
            var $price = new Intl.NumberFormat().format($price);
            console.log($price);
            $(this).closest('.items_count_body').next('.items_price_body').find('.price_input').val("₩ " +$price+"원");
        }
    });

    function updatePrice(quantity, price) {
        //테스트용
        // console.log(quantity);
        // console.log(price);

        return quantity * price;
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