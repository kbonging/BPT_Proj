<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/header.js"></script>
    <script src="js/index.js"></script>

    

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
        <div class="mainContent_DIV">
            <button id="prevBtn">&lt;</button>
            <section id='main_img'>

                <div class="main_img"><img src="img/mainImg1.png" alt=""></div>
                <div class="main_img"><img src="img/mainImg2.png" alt=""></div>
                <div class="main_img"><img src="img/mainImg3.png" alt=""></div>

            </section>
            <button id="nextBtn">&gt;</button>
        </div>

        <div class="brDiv"></div>
        
        <section class='contentsList'>
            
            <div class="individual_Div">
                <a href="#">
                    <div class="individual_imgDiv"><img src="img/product1.png" alt="" class="individual_img"></div>
                    <div class="individual_prodName">프리-워크아웃</div>
                    <div class="individual_proEx">레몬 맛</div>
                </a>
            </div>
            <div class="individual_Div">
                <a href="#">
                    <div class="individual_imgDiv"><img src="img/product1.png" alt="" class="individual_img"></div>
                    <div class="individual_prodName">프리-워크아웃</div>
                    <div class="individual_proEx">레몬 맛</div>
                </a>
            </div>
            <div class="individual_Div">
                <a href="#">
                    <div class="individual_imgDiv"><img src="img/product1.png" alt="" class="individual_img"></div>
                    <div class="individual_prodName">프리-워크아웃</div>
                    <div class="individual_proEx">레몬 맛</div>
                </a>
            </div>
            
            
        </section>

        <div class="brDiv"></div>
        
        <section class='contentsList'>
            
            <div class="individual_Div">
                <a href="#">
                    <div class="individual_imgDiv"><img src="img/product1.png" alt="" class="individual_img"></div>
                    <div class="individual_prodName">프리-워크아웃</div>
                    <div class="individual_proEx">레몬 맛</div>
                </a>
            </div>
            <div class="individual_Div">
                <a href="#">
                    <div class="individual_imgDiv"><img src="img/product1.png" alt="" class="individual_img"></div>
                    <div class="individual_prodName">프리-워크아웃</div>
                    <div class="individual_proEx">레몬 맛</div>
                </a>
            </div>
            <div class="individual_Div">
                <a href="#">
                    <div class="individual_imgDiv"><img src="img/product1.png" alt="" class="individual_img"></div>
                    <div class="individual_prodName">프리-워크아웃</div>
                    <div class="individual_proEx">레몬 맛</div>
                </a>
            </div>
            
            
        </section>
        
        <div class="brDiv"></div>
    </main>
    <div class='clear'></div> <!-- float 속성 해제-->

    <!-- footer 시작 -->
        <?php
            include 'footer.php';
        ?>
    <!-- footer 끝 -->
    
</body>

</html>