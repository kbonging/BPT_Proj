<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>proteinList</title>
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/basket_order.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/header.js"></script>
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

        <section>
            
            <!-- 주문하기 메인 div 시작 -->
            <div class="order_Main_div">

                <!-- 서브타이틀1 시작 -->
                <h2>
                    <span class="bar"></span>
                    주문하기
                    <span class="bar2">&nbsp;ORDER</span>
                </h2>
                <!-- 서브타이틀1 끝 -->

                <div class="product_div">
                    <div class="product_inner_div">
                        <div class="order_img_div">
                            <img src="img/basket1.png" alt="">
                        </div>

                        <div class="item_explanation">
                            <span>[락토프리 고단백 프로틴 파우더]</span>
                            <br>
                            <br>
                            <span>옵션 : 초코맛</span>
                        </div>

                        <div class="item_count">
                            <span>1개</span>
                        </div>

                        <div class="item_price">
                            <span>₩ 58,000원</span>
                        </div>

                        <div class="delivery_price">
                            <span>배송비</span>
                            <br>
                            <span>5,000원</span>
                        </div>

                    </div>
                </div> <!-- product_div 끝 -->

                <p class="order_text">&nbsp;-&nbsp;수량 및 주문금액이 틀리지 않는지 반드시 확인하시기 바랍니다.
                    <br>
                    &nbsp;-&nbsp;이벤트 제품의 경우 [할인/쿠폰]을 적용해야 할인 및 혜택을 받으실 수 있습니다.
                </p>


                <!-- /////////////////////통 복사 시작/////////////// -->
                <!-- 서브타이틀2 시작 -->
                <h2>
                    <span class="bar"></span>
                    주문자 정보입력
                </h2>
                <!-- 서브타이틀2 끝 -->

                <p class="text">
                회원정보를 변경하시려면 마이페이지 > 회원정보수정 후 주문하시거나 주문후 변경하시기 바랍니다.
                </p>

                <!-- 테이블 시작 -->
                <table class="Orderer_info_teble"> 
                    <tr>
                        <th>주문자명</th>
                        <td><input type="text" id="user_id"></td>
                    </tr>
                    <tr>
                        <th>휴대폰 번호</th>
                        <td>
                            <select>
                                <option value="010">010</option>
                                <option value="011">011</option>
                                <option value="016">016</option>
                                <option value="018">018</option>
                                <option value="019">019</option>
                            </select>&nbsp;-
                            <input type="text" id="phone_number1" style="width:140px">&nbsp;-
                            <input type="text" id="phone_number2" style="width:140px">
                        </td>
                    </tr>
                    <tr>
                        <th>이메일</th>
                        <td><input type="text" id="email"></td>
                    </tr>
                    <tr>
                        <th>현금영수증</th>
                        <td>
                            <input type="radio" name="Cashreceipts">&nbsp;미발급
                            <input type="radio" name="Cashreceipts">&nbsp;발급
                        </td>
                    </tr>
                    <tr>
                        <th>발행용도</th>
                        <td>
                            <input type="radio" name="Cashreceipts">&nbsp;소득공제용(일반개인용)
                            <input type="radio" name="Cashreceipts">&nbsp;지출증빙용(사업자용)
                            
                        </td>
                    </tr>
                    <tr>
                        <th>발행정보</th>
                        <td>
                            <select>
                                <option value="1">휴대폰번호</option>
                                <option value="2">카드번호</option>
                            </select>
                            <input type="text" style="width:140px">&nbsp;-
                            <input type="text" style="width:140px">&nbsp;-
                            <input type="text" style="width:140px">
                        </td>
                    </tr>
                </table>
                <!-- 테이블 끝 -->
                <!-- /////////////////////통 복사 끝/////////////// -->

                <!-- /////////////////////통 복사 시작/////////////// -->
                <!-- 서브타이틀3 시작 -->
                <h2>
                    <span class="bar"></span>
                    상품 배송지 정보입력
                </h2>
                <p class="text">
                    <input type="checkbox">주문회원의 정보와 같다면 체크하세요.
                </p>
                <!-- 서브타이틀3 끝 -->


                <!-- 테이블 시작 -->
                <table class="Orderer_info_teble"> 
                    <tr>
                        <th>수령인</th>
                        <td><input type="text"></td>
                    </tr>
                    <tr>
                        <th>휴대폰 번호</th>
                        <td>
                            <select>
                                <option value="010">010</option>
                                <option value="011">011</option>
                                <option value="016">016</option>
                                <option value="018">018</option>
                                <option value="019">019</option>
                            </select>&nbsp;-
                            <input type="text" id="phone_number1" style="width:140px">&nbsp;-
                            <input type="text" id="phone_number2" style="width:140px">
                        </td>
                    </tr>
                    <tr>
                        <th>주소</th>
                        <td>
                            <input type="text" id="sample6_postcode" placeholder="우편번호" style="width:140px">
                            <input type="button" onclick="sample6_execDaumPostcode()" value="우편번호 찾기" class="zip_code_Btn"><br>
                            <input type="text" id="sample6_address" placeholder="주소"><br>
                            <input type="text" id="sample6_detailAddress" placeholder="상세주소">
                            <input type="hidden" id="sample6_extraAddress" placeholder="참고항목">
                        </td>
                    </tr>
                    
                    <tr>
                        <th>배송시 요청사항</th>
                        <td><select style="width:200px">
                                <option value="1">배송시 요청사항 선택</option>
                                <option value="2">부재시 경비실에 맡겨주세요.</option>
                                <option value="3">부재시 휴대폰번호로 연락바랍니다.</option>
                                <option value="4">집 앞에 놓아주세요</option>
                                <option value="5">택배함에 넣어주세요.</option>
                                <option value="6">직접입력</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <!-- 테이블 끝 -->
                <!-- /////////////////////통 복사 끝/////////////// -->

                <!-- /////////////////////통 복사 시작/////////////// -->
                <!-- 서브타이틀4 시작 -->
                <h2>
                    <span class="bar"></span>
                    배송비 정보
                </h2>
                <!-- 서브타이틀4 끝 -->


                <!-- 테이블 시작 -->
                <table class="Orderer_info_teble"> 
                    <tr>
                        <th>배송비</th>
                        <td>5,000원</td>
                    </tr>
                    
                    
                </table>
                <!-- 테이블 끝 -->
                <!-- /////////////////////통 복사 끝/////////////// -->

                <!-- /////////////////////통 복사 시작/////////////// -->
                <!-- 서브타이틀4 시작 -->
                <h2>
                    <span class="bar"></span>
                    할인 및 최종 결제 금액
                </h2>
                <!-- 서브타이틀4 끝 -->


                <!-- 테이블 시작 -->
                <table class="Orderer_info_teble"> 
                    <tr>
                        <th>총 결제 금액</th>
                        <td style="text-align: right; font-size: 16px; padding-right: 20px;">[ 상품 구매금액 : 120,000원 ] + [ 배송비 5,000원 ] = 총금액 :<span class="red">125,000원</span></td>
                    </tr>
                    
                    
                </table>
                <!-- 테이블 끝 -->
                <!-- /////////////////////통 복사 끝/////////////// -->

                <div class="order_Btn_div">
                    <div class="order_Btn_img_div"><img src="img/Credit_card_Btn.png" alt="" class="Credit_card_Btn"></div>
                    <div class="order_Btn_img_div"><img src="img/phon_Btn.png" alt="" class="phon_Btn"></div>
                    <div class="order_Btn_img_div"><img src="img/Bank_transfer_Btn.png" alt="" class="Bank_transfer_Btn"></div>
                    <div class="order_Btn_img_div"><img src="img/kakakopay_Btn.png" alt="" class="kakakopay_Btn"></div>
                </div>
                
            </div>
            <!-- 주문하기 메인 div 끝 -->

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
<script src="//t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
<script>
    function sample6_execDaumPostcode() {
        new daum.Postcode({
            oncomplete: function(data) {
                // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

                // 각 주소의 노출 규칙에 따라 주소를 조합한다.
                // 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
                var addr = ''; // 주소 변수
                var extraAddr = ''; // 참고항목 변수

                //사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
                if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
                    addr = data.roadAddress;
                } else { // 사용자가 지번 주소를 선택했을 경우(J)
                    addr = data.jibunAddress;
                }

                // 사용자가 선택한 주소가 도로명 타입일때 참고항목을 조합한다.
                if(data.userSelectedType === 'R'){
                    // 법정동명이 있을 경우 추가한다. (법정리는 제외)
                    // 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
                    if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
                        extraAddr += data.bname;
                    }
                    // 건물명이 있고, 공동주택일 경우 추가한다.
                    if(data.buildingName !== '' && data.apartment === 'Y'){
                        extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                    }
                    // 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
                    if(extraAddr !== ''){
                        extraAddr = ' (' + extraAddr + ')';
                    }
                    // 조합된 참고항목을 해당 필드에 넣는다.
                    document.getElementById("sample6_extraAddress").value = extraAddr;
                
                } else {
                    document.getElementById("sample6_extraAddress").value = '';
                }

                // 우편번호와 주소 정보를 해당 필드에 넣는다.
                document.getElementById('sample6_postcode').value = data.zonecode;
                document.getElementById("sample6_address").value = addr;
                // 커서를 상세주소 필드로 이동한다.
                document.getElementById("sample6_detailAddress").focus();
            }
        }).open();
    }

    // 버튼 기능 용
    $(function () {

        //신용카드 결제버튼
        $('.Credit_card_Btn').click(function () {
            alert('신용카드 결제');
        })
        //휴대폰 결제버튼
        $('.phon_Btn').click(function () {
            alert('휴대폰 결제');
        })
        //무통장 결제버튼
        $('.Bank_transfer_Btn').click(function () {
            alert('무통장 결제');
        })
        //kakaoPay 결제버튼
        $('.kakakopay_Btn').click(function () {
            alert('kakaoPay 결제');
        })

    });

</script>