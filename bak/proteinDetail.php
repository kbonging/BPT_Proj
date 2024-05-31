<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>proteinList</title>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/Detail.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/header.js"></script>
    <script src="js/Detail.js"></script>
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

    <main class="main_contents">
        
        <section>
            <div class="pro_Detail_div">
                <div class="sell_left">
                    <div class="Detail_img_div">
                        <img src="./img/protenin1.png" alt="">
                    </div>
                    <ul class="sell_guide">
                        <li><a href="#">적립 마일리지 안내</a></li>
                        <li><a href="#">카드 무이자 안내</a></li>
                    </ul>
                </div>
                <div class="sell_right">
                    <div class="Detail_title">
                        <span class="main_title">[국내 최초 프로틴 스파클링 음료]</span>
                        <br>
                        <span class="sub_title">[타임특가] 프로틴 스파클링</span>
                    </div>

                    <div class="Detail_coupon_img">
                        <img src="img/sale_coupon_img.png" alt="" class="sale_coupon_img">
                    </div>

                    <table class="Detail_option_table">
                        <tr>
                            <td>
                                <span>옵션선택</span>
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <select name="search_category1" id="">
                                    <option value="default">---맛 선택---</option>
                                    <option value="1">무맛</option>
                                    <option value="2">초코맛</option>
                                    <option value="3">바나나맛</option>
                                    <option value="4">딸기맛</option>
                                    <option value="5">바닐라</option>
                                    <option value="6">쿠앤크</option>
                                    <option value="7">초코바나나</option>
                                    <option value="8">딸기크림</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <select name="search_category2" id="">
                                    <option value="1">---추가상품선택---</option>
                                    <option value="2">01.정품쉐이커(7,000원)</option>
                                    <option value="3">02.프로틴 스파클링 24개입(20,000)</option>
                                    <option value="4">03.프로틴 스파클링 12개입(10,000원)</option>
                                </select>
                            </td>
                        </tr>
                    </table>

                    <div class="delivery_amount">
                        <div>배송비</div>
                        <div>5,000원 (50,000원 이상 구매시 무료)</div>
                    </div>

                    <div class="total_prodcut_price_div">
                        <div>최종 금액</div>
                        <div><span class="total_prodcut_price red">12,900원</span></div>
                    </div>
                    <div class="Btn_Div">
                        <div class="purchase_btn">바로구매</div>
                        <div class="Register_shopping_cart">장바구니</div>
                    </div>
                </div>  <!-- sell_right 끝 -->
            </div>
        </section>
    </main>

    <div class='clear'></div> <!-- float 속성 해제-->

    <!-- footer 시작 -->
    <?php
        include 'footer.php';
    ?>
    <!-- footer 끝 -->
    

</body>

</html>