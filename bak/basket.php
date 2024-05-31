<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/basket.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/header.js"></script>
    <script src="js/basket.js"></script>
    <script>
        
    </script>
    <style>
        body{
            margin: 0;
        }

        .clear {
            clear: both;
        }

        




       
       
    </style>
</head>

<body>
    <!-- 헤더와 네비 시작 -->
    <?php
        include 'login_herder.php';
    ?>
    <!-- 헤더와 네비 시작 -->

    <main id="mainContent">
        <section class="section">
            <div class="contents_div">
                <div class="section_div_title"><h1>장바구니</h1></div>
                <div calss="alarm_div">
                    <div class="upsell">
                        <img src="./img/upsell_chk.png" alt="">
                        <span class="red">*주문전필독사항*</span>
                        <p></p>
                        자동화 시스템으로 한번 주문시 취소가 어렵습니다. 결제 전 사이즈, 맛 선택을 다시한번 확인해주세요.
                        <br>
                        할인 후 5만원 이하 구매시 배송료가 추가됩니다.
                    </div>
                    <div class="discount">
                        <img src="./img/discount_chk.png" alt="">
                        <div class="discount_text">무료증정품 혜택을 받으실 수 있습니다[굿바이골등슈퍼세인] 오늘 자정까지! 한정판 골든 스쿱 증정</div>
                    </div>
                </div>

                <div class="basket_div">
                    <div class="basket_head">
                        <div class="checkbox_ALL">
                            <input type="checkbox" id="check-all">
                        </div>
                        <div class="items_title">
                            상품
                        </div>
                        <div class="items_count">
                            수량
                        </div>
                        <div class="items_price">
                            가격
                        </div>
                    </div>

                    <!-- 상품 한개 시작 -->
                    <div class="basket_body">
                        <div class="checkbox_ALL_body">
                            <input type="checkbox" class="select-checkbox">
                        </div>
                        <div class="items_title_body">
                            <div class="item_img_div">
                                <img src="img/basket1.png" alt="" class="item_img">
                            </div>
                            <div class="item_explanation">
                                <br>
                                <span>임팩트 EAA - 250g</span>
                                <br>
                                <br>
                                <span>옵션 : 무맛</span>
                                
                            </div>
                        </div>
                        <div class="items_count_body">
                            <div class="quantity">
                                <button class="minus">-</button>
                                <input type="text" class="qty" value="1">
                                <button class="plus">+</button>
                            </div>
                        </div>
                        <div class="items_price_body">
                            <div class="price">
                                
                            </div>
                        </div>
                    </div>
                    <!-- 상품 한개 끝 -->
                    <!-- 상품 한개 시작 -->
                    <div class="basket_body">
                        <div class="checkbox_ALL_body">
                            <input type="checkbox" class="select-checkbox">
                        </div>
                        <div class="items_title_body">
                            <div class="item_img_div">
                                <img src="img/basket1.png" alt="" class="item_img">
                            </div>
                            <div class="item_explanation">
                                <br>
                                <span>임팩트 EAA - 250g</span>
                                <br>
                                <br>
                                <span>옵션 : 무맛</span>
                                
                            </div>
                        </div>
                        <div class="items_count_body">
                            <div class="quantity">
                                <button class="minus">-</button>
                                <input type="text" class="qty" value="1">
                                <button class="plus">+</button>
                            </div>
                        </div>
                        <div class="items_price_body">
                            <div class="price">
                                
                            </div>
                        </div>
                    </div>
                    <!-- 상품 한개 끝 -->
                    <!-- 상품 한개 시작 -->
                    <div class="basket_body">
                        <div class="checkbox_ALL_body">
                            <input type="checkbox" class="select-checkbox">
                        </div>
                        <div class="items_title_body">
                            <div class="item_img_div">
                                <img src="img/basket1.png" alt="" class="item_img">
                            </div>
                            <div class="item_explanation">
                                <br>
                                <span>임팩트 EAA - 250g</span>
                                <br>
                                <br>
                                <span>옵션 : 무맛</span>
                                
                            </div>
                        </div>
                        <div class="items_count_body">
                            <div class="quantity">
                                <button class="minus">-</button>
                                <input type="text" class="qty" value="1">
                                <button class="plus">+</button>
                            </div>
                        </div>
                        <div class="items_price_body">
                            <div class="price">
                                
                            </div>
                        </div>
                    </div>
                    <!-- 상품 한개 끝 -->
                    <!-- 상품 한개 시작 -->
                    <div class="basket_body">
                        <div class="checkbox_ALL_body">
                            <input type="checkbox" class="select-checkbox">
                        </div>
                        <div class="items_title_body">
                            <div class="item_img_div">
                                <img src="img/basket1.png" alt="" class="item_img">
                            </div>
                            <div class="item_explanation">
                                <br>
                                <span>임팩트 EAA - 250g</span>
                                <br>
                                <br>
                                <span>옵션 : 무맛</span>
                                
                            </div>
                        </div>
                        <div class="items_count_body">
                            <div class="quantity">
                                <button class="minus">-</button>
                                <input type="text" class="qty" value="1">
                                <button class="plus">+</button>
                            </div>
                        </div>
                        <div class="items_price_body">
                            <div class="price">
                                
                            </div>
                        </div>
                    </div>
                    <!-- 상품 한개 끝 -->

                    <!-- 선택삭제버튼, 장바구니 비우기 버튼, 총 금액 설명 div -->
                    <div class="basket_body_tot">
                        <div class="Amount_div1">
                            <a href="#"><img src="./img/chkDelBtn.png" alt=""></a>
                        </div>
                        <div class="Amount_div2">
                            <a href="#"><img src="./img/basketEmpty.png" alt=""></a>
                        </div>
                        <div class="Amount_div3">
                            <span class="Amount_Description_span">[ 상품 구매금액 : ₩120,000원 ] + [ 배송비 ₩5,000원 ] = 총금액 : <span class="red">125,000원</span></span>
                        </div>
                    </div>
                    <!-- 선택삭제버튼, 장바구니 비우기 버튼, 총 금액 설명 div 끝 -->

                </div>

                <div class="brDiv"></div>
                
                <div class="Btn_Div">
                    <a href="#"><div class="contunue_shopping_Btn">쇼핑계속하기</div></a>
                    <a href="#"><div class="order_Btn">주문하기</div></a>
                </div>
                <div class="brDiv"></div>


            </div>  <!-- contents_div 끝  -->
            
        </section>
    </main>
    <div class='clear'></div> <!-- float 속성 해제-->
 
    <!-- footer 시작 -->
    <?php
        include 'footer.php';
    ?>
    <!-- footer 끝 -->
    
    <!-- <div class="footer_main_div2">
        
    </div> -->

</body>

</html>