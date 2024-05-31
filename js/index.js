$(function () {
    ///////////// 메인 이미지 버튼 클릭시 변경 시작///////////////
    var currentIndex = 0;
    var slides = $('.main_img');

    function showSlide(index) {
        slides.hide();
        slides.eq(index).show();
    }

    showSlide(currentIndex);

    $('#prevBtn').click(function () {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        showSlide(currentIndex);
    });

    $('#nextBtn').click(function () {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    });
    ///////////// 메인 이미지 버튼 클릭시 변경 끝///////////////
    
}); // $(function () 끝