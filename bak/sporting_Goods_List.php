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
    <!-- //////////////////헤더 네비 시작////////////// -->
    <header>
        <div id="headerDiv">
            <div id="logoDiv"><a href="index.html" class="logo">BPT</a></div>

            <div id="serchBox">
                <input type="text" class="search-box" placeholder="검색어를 입력하세요...">
            </div>

            <div id="signDiv">
                <a href="basket.html"><img src="img/shoppingBasket.png" alt="" width="100px"></a>
                <button class="Signin-button" onclick="location.href='signin.html'">Sign in</button>
                <button class="Signup-button" onclick="location.href='signup.html'">Sign up</button>
            </div>
        </div>

    </header>
    

    <nav id="headNav">
        <div id="menu">
            <ul>
                <li><a href="proteinList.html">프로틴</a>
                    <ul>
                        <li><a href="#" >프로틴 분말</a></li>
                        <li><a href="#" >프로틴 음료</a></li>
                        <li><a href="#" >시니어 단백질</a></li>
                    </ul>
                </li>
                <li><a href="Supplements_List.html">보조식품</a>
                    <ul>
                        <li><a href="#">닭가슴살</a></li>
                        <li><a href="#">스페셜패키지</a></li>
                        <li><a href="#">단백질 간식</a></li>
                    </ul>
                </li>
                <li><a href="sporting_Goods_List.html">스포츠용품</a></li>
                <li><a href="#">커뮤니티</a>
                    <ul>
                        <li><a href="#">자유게시글</a></li>
                    </ul>
                </li>
                <li><a href="#">고객센터</a>
                    <ul>
                        <li><a href="#">공지사항</a></li>
                        <li><a href="#">QNA</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- //////////////////헤더 네비 끝////////////// -->

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
                            <img src="./img/sport_goods1.png" alt="">
                        </div>
                        <div class="item_explanation">
                            <ul>
                                <li><img src="img/express_delivery.png" alt=""></li>
                                <li>[균형있는 바디의 비결]</li>
                                <li>[타임특가] BPT 요가링</li>
                                <li><span class="item_price">3,900원</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="pro_item_div">
                        <div class="pro_img">
                            <img src="./img/sport_goods2.png" alt="">
                        </div>
                        <div class="item_explanation">
                            <ul>
                                <li><img src="img/express_delivery.png" alt=""></li>
                                <li>[집에서도 쉽고 편한 홈트]</li>
                                <li>[타임특가] BPT 네오프렌 덤벨</li>
                                <li><span class="item_price">6,700원</span></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="pro_item_div">
                        <div class="pro_img">
                            <img src="./img/sport_goods3.png" alt="">
                        </div>
                        <div class="item_explanation">
                            <ul>
                                <li><img src="img/express_delivery.png" alt=""></li>
                                <li>[탄력 저항 스쿼트 밴드]</li>
                                <li>[타임특가] BPT 루프밴드</li>
                                <li><span class="item_price">7,000원</span></li>
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
                            <img src="./img/sport_goods4.png" alt="">
                        </div>
                        <div class="item_explanation">
                            <ul>
                                <li><img src="img/express_delivery.png" alt=""></li>
                                <li>[전신 근력 운동]</li>
                                <li>[타임특가] BPT 라텍스 밴드</li>
                                <li><span class="item_price">4,800원</span></li>
                            </ul>
                        </div>
                    </div>

                    <div class="pro_item_div">
                        <div class="pro_img">
                            <img src="./img/sport_goods5.png" alt="">
                        </div>
                        <div class="item_explanation">
                            <ul>
                                <li><img src="img/express_delivery.png" alt=""></li>
                                <li>[홈트 만능템]</li>
                                <li>[타임특가] BPT 폼룰러</li>
                                <li><span class="item_price">17,900원</span></li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="pro_item_div">
                        <div class="pro_img">
                            <img src="./img/sport_goods6.png" alt="">
                        </div>
                        <div class="item_explanation">
                            <ul>
                                <li><img src="img/express_delivery.png" alt=""></li>
                                <li>[마사지부터 스트레칭까지!]</li>
                                <li>[타임특가] BPT 마사지볼</li>
                                <li><span class="item_price">4,900원</span></li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
                <!-- 상품 한줄 끝 -->

                <div class="brDiv"></div>

                
            </div>
        </section>
    </main>

    <div class='clear'></div> <!-- float 속성 해제-->

    <!-- ////////////////푸터 시작/////////////// -->
    <footer class="footer_main">
        <div class="footer_main_div">
            <div class="footer_contents">
                <span><a href="#">오시는길</a></span>
                <span>|</span>
                <span><a href="#">이용약관</a></span>
                <span>|</span>
                <span><a href="#">개인정보취급방침</a></span>
            </div>
            <br>
            <div class="footer_contents">
                <span><a href="#">BPT 경기 김포시 풍무로 000</a></span>
                <span>|</span>
                <span><a href="#">T.031-000-0000</a></span>
                <span>|</span>
                <span><a href="#">F.031-000-0100</a></span>
            </div>
        </div>

    </footer>
    <!-- ////////////////푸터 끝/////////////// -->
    

</body>

</html>