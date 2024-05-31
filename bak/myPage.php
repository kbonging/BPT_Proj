<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/header.js"></script>

    <style>
        body{
            margin: 0;
        }

        .clear {
            clear: both;
        }

        

        /* ------------------mainContent 시작------------------*/

        #mainContent{
            display: flex;
            justify-content: center; /* 수평 가운데 정렬 */
            background-color: #f2f4f7;
            /* height: 100vh; 화면 전체 높이를 기준으로 섹션을 가운데로 정렬 */
        }

        #mainSection{
            display: flex;
            flex-direction: column; /* 세로 방향으로 아이템들을 배치 */
            
            /* 수직 가운데 정렬 */
            align-items: center; 
            background-color: white;
            border: solid 1px #dce1eb;
            width: 700px;
            height: 700px;
            margin: 30px 10px 10px 10px;
        }

        /* 왼쪽 사이드바 스타일 */
        #sidebar_left {
            width: 200px;
            height: 700px;
            /* background-color: #f1f1f1; */
            /* border: solid 1px green; */
            margin: 30px 10px 10px 10px;
        }
        .subMenuList_main{
            height: 100px;
        }
        
        /* 오른쪽 사이드바 스타일 */
        #sidebar_right {
            width: 200px;
            height: 700px;
            background-color: #f2f4f7;
            /* border: solid 1px green; */
            font-size: 100px;
            text-align: center;
        }
       
        
        .subMenuList{
            padding: 5px 0px 5px 7px;
            /* border: solid 1px green; */
            background-color: white;
            border: solid 1px #dce1eb;
            border-top: white;
        }
        .subMenuList_first{
            border-top: solid 1px #dce1eb;
        }
        
        .subMenuList_ul{
            list-style-type: none;
            margin-left: -30px;
        }

        
        .subMenuList_ul li a{
            /* ul 내부의 li에 적용될 스타일 */
            color: #8491a7;
            font-size: 15px;
        }

        .subMenuList_title{
            font-size: 23px;
            padding-bottom: 5px;
        }

        .main_title{
            font-size: 30px;
        }

        /* ------------section 시작----------------*/
        

        .section_div_title{
            margin-left: -500px;
        }

        .person_field_table th{
            width: 135px;
            color: #8491a7;
            text-align: left;
        }

        .person_field_table th, 
        .person_field_table td{
            padding: 8px 0;
            border-bottom: 1px solid #eaedf4;
        }

        .person_field_body{
            width: 350px;
        }

        .person_field_btn{
            background-color: white;
        }

        /* ------------section 끝----------------*/


        /* ------------------mainContent 끝------------------*/




        footer {
            width: 100%;
            height: 150px;
            border: solid 1px red;
        }

       
    </style>
</head>

<body>
    <!-- 헤더와 네비 시작 -->
    <?php
        include 'login_herder.php';
    ?>
    <!-- 헤더와 네비 시작 -->

    
    <div class="main_title">
        <!-- <span>MyPage</span> -->
    </div>
    <main id="mainContent">
        <aside id="sidebar_left">
            

            <div class="subMenuList , subMenuList_first">
                <ul class="subMenuList_ul">
                    <li class="subMenuList_title">MY 쇼핑</li>
                    <li><a href="#">주문목록</a></li>
                </ul>
            </div>

            <div class="subMenuList">
                <ul class="subMenuList_ul">
                    <li class="subMenuList_title">MY 정보</li>
                    <li><a href="myPage.php">개인정보수정</a></li>
                    <li><a href="#">비밀번호수정</a></li>
                </ul>
            </div>

            <div class="subMenuList">
                <ul class="subMenuList_ul">
                    <li class="subMenuList_title">고객센터</li>
                    <li><a href="#">공지사항</a></li>
                    <li><a href="#">Q&A</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>

            <div class="subMenuList">
                <ul class="subMenuList_ul">
                    <li class="subMenuList_title">로그아웃</li>
                </ul>
            </div>

            <div class="subMenuList">
                <ul class="subMenuList_ul">
                    <li class="subMenuList_title">계정탈퇴</li>
                </ul>
            </div>

        </aside>

        <section id="mainSection">
            <div class="section_div_title"><h2>개인정보 수정</h2></div>
            <div class="section_div">
                <div class="section_div_wrap">
                    <h4>기본정보</h4>
                    <table class="person_field_table">
                        <tr>
                            <th class="person_field">이름</th>
                            <td><div class="person_field_body">최진형</div></td>
                            <td><div><button class="person_field_btn">수정</button></div></td>
                        </tr>
                        <tr>
                            <th class="person_field">아이디</th>
                            <td><div class="person_field_body">apple75391@gmail.com</div></td>
                            <td><div><button class="person_field_btn">수정</button></div></td>
                        </tr>
                    </table>
                </div>

                <div class="section_div_wrap">
                    <h4>연락처 정보</h4>
                    <table class="person_field_table">
                        <tr>
                            <th class="person_field">휴대폰</th>
                            <td><div class="person_field_body">010-****-7602</div></td>
                            <td><div><button class="person_field_btn">수정</button></div></td>
                        </tr>
                        
                    </table>
                </div>

                <div class="section_div_wrap">
                    <h4>배송지 정보</h4>
                    <table class="person_field_table">
                        <tr>
                            <th class="person_field">주소</th>
                            <td><div class="person_field_body">경기도 김포시</div></td>
                            <td><div><button class="person_field_btn">수정</button></div></td>
                        </tr>
                        <tr>
                            <th class="person_field">상세주소</th>
                            <td><div class="person_field_body">풍무로</div></td>
                            <td><div><button class="person_field_btn">수정</button></div></td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>
        <aside id="sidebar_right">
            
        </aside>
    </main>
    <div class='clear'></div> <!-- float 속성 해제-->
    
    <!-- footer 시작 -->
    <?php
        include 'footer.php';
    ?>
    <!-- footer 끝 -->

</body>

</html>