<header> 
        <div id="headerDiv">
            <div id="logoDiv"><a href="indexLogin.php" class="logo">BPT</a></div>

            <div id="serchBox">
                <input type="text" class="search-box" placeholder="검색어를 입력하세요...">
            </div>
           
            <div id="signDiv">
                <a href="basket.php"><img src="img/shoppingBasket.png" alt="" width="100px"></a>
                <button class="Signin-button" onclick="location.href='MyPage.php'" >MyPage</button>
                <button class="Signup-button" onclick="location.href='index.html'">Sign out</button>
            </div>
        </div>
    
    </header>

    <nav id="headNav">
        <div id="menu">
            <ul>
                <li><a href="proteinList.php">프로틴</a>
                    <ul>
                        <li><a href="#" >프로틴 분말</a></li>
                        <li><a href="#" >프로틴 음료</a></li>
                        <li><a href="#" >시니어 단백질</a></li>
                    </ul>
                </li>
                <li><a href="Supplements_List.php">보조식품</a>
                    <ul>
                        <li><a href="#">닭가슴살</a></li>
                        <li><a href="#">스페셜패키지</a></li>
                        <li><a href="#">단백질 간식</a></li>
                    </ul>
                </li>
                <li><a href="sporting_Goods_List.php">스포츠용품</a></li>
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
    <style type="text/css">
    /* 글자크기를 16px 맑은 고딕 굵게하고 width넓이 700, 높이 50만큼 배경색은 #ccc, 글자색은 검정색, 라인높이50px
    menu박스 가운데정렬, 글자가운데 정렬 */
	#menu {
		font:bold 16px "malgun gothic";
		width:700px;
		height:40px;
		background: #003942;
		color: red;
		line-height: 40px; 
		margin:0 auto;
		text-align: center;
	}

    /* menu태그 자식의 ul의 자식 li를 왼쪽정렬과 넓이 140설정 */
	#menu > ul > li {
		float:left;
		width:140px;
		position:relative;
	}

    #menu > ul > li > ul {
		width:130px;
		display:none;
		position: absolute;
		font-size:14px;
		background: #003942;
	}

    #menu > ul > li:hover > ul {
		display:block;
	}

    #menu > ul > li > ul > li {
    padding: 5px 20px; /* 상하 5px, 좌우 0 */
    }

	</style>







 