<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>proteinList</title>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/ProductList.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/header.js"></script>
    <script src="js/ProductList.js"></script>
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
        <aside class="sidebar_left">
            <img src="img/left_banner1.png" alt="">
        </aside>
        <section>
            <div class="pro_total_list_div">
                <div class="brDiv"></div>
                <!-- 상품 한줄 시작 -->
                <div class="pro_list_row">
                    <div class="pro_item_div">
                        <div class="pro_img">
                            <img src="./img/Supplements1.png" alt="">
                        </div>
                        <div class="item_explanation">
                            <ul>
                                <li><img src="img/express_delivery.png" alt=""></li>
                                <li>[하루 한번으로 간편하게]</li>
                                <li>[타임특가] BPT 녹차 카테킨+프로바이오틱스</li>
                                <li><span class="item_price">16,500원</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="pro_item_div">
                        <div class="pro_img">
                            <img src="./img/Supplements2.png" alt="">
                        </div>
                        <div class="item_explanation">
                            <ul>
                                <li><img src="img/express_delivery.png" alt=""></li>
                                <li>[내 몸에 맞는 체지방 이중 기능성]</li>
                                <li>[타임특가] 녹차 카테킨+가르시니아 더블 컷</li>
                                <li><span class="item_price">11,200원</span></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="pro_item_div">
                        <div class="pro_img">
                            <img src="./img/Supplements3.png" alt="">
                        </div>
                        <div class="item_explanation">
                            <ul>
                                <li><img src="img/express_delivery.png" alt=""></li>
                                <li>[마시면서 하는 다이어트]</li>
                                <li>[타임특가] 카페 키-스프레소</li>
                                <li><span class="item_price">19,900원</span></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
                <!-- 상품 한줄 끝 -->
                
                <div class="brDiv"></div>

                <!-- 상품 한줄 시작 -->
                <div class="pro_list_row">
                    <div class="pro_item_div">
                        <div class="pro_img">
                            <img src="./img/Supplements4.png" alt="">
                        </div>
                        <div class="item_explanation">
                            <ul>
                                <li><img src="img/express_delivery.png" alt=""></li>
                                <li>[간편하게 즐기는 프리미엄 프로틴바]</li>
                                <li>[타임특가] 퍼펙트 파워 프로틴바</li>
                                <li><span class="item_price">9,900원</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="pro_item_div">
                        <div class="pro_img">
                            <img src="./img/Supplements5.png" alt="">
                        </div>
                        <div class="item_explanation">
                            <ul>
                                <li><img src="img/express_delivery.png" alt=""></li>
                                <li>[섬유질이 풍부한]</li>
                                <li>[이강바이오] 스위트드림 현미 식이섬유쌀4kg</li>
                                <li><span class="item_price">23,900원</span></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="pro_item_div">
                        <div class="pro_img">
                            <img src="./img/Supplements6.png" alt="">
                        </div>
                        <div class="item_explanation">
                            <ul>
                                <li><img src="img/express_delivery.png" alt=""></li>
                                <li>[오직 타임특가 한정판매]</li>
                                <li>[타임특가] 바디나인 닭가슴살 간식 타임특가 5팩 골라담기</li>
                                <li><span class="item_price">7,900원</span></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
                <!-- 상품 한줄 끝 -->

                <div class="brDiv"></div>

                <!-- 상품 한줄 시작 -->
                <div class="pro_list_row">
                    <div class="pro_item_div">
                        <div class="pro_img">
                            <img src="./img/Supplements2.png" alt="">
                        </div>
                        <div class="item_explanation">
                            <ul>
                                <li><img src="img/express_delivery.png" alt=""></li>
                                <li>[RTD타입으로 간편한 고단백 음료]</li>
                                <li>[타임특가 퍼펙트 파워쉐이크 20g 초코맛 24개입]</li>
                                <li><span class="item_price">32,900원</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="pro_item_div">
                        <div class="pro_img">
                            <img src="./img/Supplements1.png" alt="">
                        </div>
                        <div class="item_explanation">
                            <ul>
                                <li><img src="img/express_delivery.png" alt=""></li>
                                <li>[임팩트 웨이 아이솔레이트]</li>
                                <li>[BPT 파워쉐이크 대용량 5kg]</li>
                                <li><span class="item_price">130,200원</span></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="pro_item_div">
                        <div class="pro_img">
                            <img src="./img/Supplements5.png" alt="">
                        </div>
                        <div class="item_explanation">
                            <ul>
                                <li><img src="img/express_delivery.png" alt=""></li>
                                <li>[황금비율 프리미엄 프로틴 파우더]</li>
                                <li>[BPT 퍼펙트 파워쉐이크 대용량 2kg]</li>
                                <li><span class="item_price">78,900원</span></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
                <!-- 상품 한줄 끝 -->
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