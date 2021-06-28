<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>





<!-------------------------- 슬라이드 -------------------------->
<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="5000">
    	<?php echo latest('theme/mainSliderBn', 'sliderBanner', 3, 100);?>
  </div>
</header>
<!-------------------------- ./슬라이드 -------------------------->





<section class="consultingBox">
  <div class="container p-0">
    <div class="expediency">
      <div class="d-flex flex-lg-row flex-column w-100">
        <ul class="d-flex flex-lg-row w-lg-50 w-100">
          <li class="certificate w-50"><a href="//clinic.mycerti.com/?hospitalCode=HOS00014" target="_blank" class="link1">증명서 발급</a></li>
          <li class="mobileApp w-50"><a href="//bucheonsjh.co.kr/medical/operation" target="_blank"  class="link2">모바일 앱</a></li>
        </ul>
        <ul class="d-flex flex-lg-row w-lg-50 w-100">
          <li class="hipass w-50"><a href="//bucheonsjh.co.kr/medical/hipass" target="_blank"  class="link3">진료비 하이패스</a></li>
          <li class="insurance w-50"><a href="//xn--2e0bl2upwcvvbs6gj9bev4anjr.com/hosp?name=%EB%B6%80%EC%B2%9C%EC%84%B8%EC%A2%85%EB%B3%91%EC%9B%90" target="_blank"  class="link4">보험 청구 서비스</a></li>
        </ul>
      </div>
    </div>
  </div>

</section>


<!-------------------------- 상담박스 -------------------------->
<section class="submitData">
  <div class="container">
    <div class="d-flex flex-column flex-lg-row align-items-center align-items-lg-start">
      <div class="userTell text-center mr-lg-5 mr-0">
        <form class="" action="#" method="get">
          <div class="con_reservation">
            <h2>간편 상담 예약</h2>
            <p class="text-center">
              전문상담사가 빠른 예약을 도와드립니다.<br>
              상담시간 : 평일 09:00-17:00
              (토요일, 공휴일 제외)
            </p>
            <div class="d-flex justify-content-around">
              <div class="write">
                <input class="mb-2" type="text" placeholder="이름" name="userName" value="" maxlength="10"><br>
                <input class="mb-2" type="text" placeholder="전화번호" name="tell" value="" maxlength="11"><br>
                <select class="time" name="time">
                  <option value="">통화가능시간</option>
                  <option value="13:30 - 14:30">13:30 - 14:30</option>
                  <option value="14:30 - 15:30">14:30 - 15:30</option>
                  <option value="15:30 - 16:30">15:30 - 16:30</option>
                  <option value="16:30 - 17:00">16:30 - 17:00</option>
                </select>
              </div>
              <button type="submit" name="button">예약하기</button>
            </div>
          </div>
        </form>
      </div>

      <div class="reservation text-center mt-4 mt-lg-0 mr-lg-5 mr-0">
        <h2>온라인 진료예약/확인</h2>
        <p class="text-center">
          온라인으로 쉽고 빠르게<br>
          진료예약 및 조회를 하실 수 있습니다.
        </p>
        <button type="button" name="button">회원예약</button>
        <button type="button" name="button">비회원예약</button>
      </div>

      <div class="doctor text-center mt-4 mt-lg-0">
        <h2>진료과/의료진 검색</h2>
        <p>
          진료과/의료진을 검색하시면 더욱 쉽고<br>
           빠르게 서비스를 이용하실 수 있습니다.
         </p>
        <form class="searchBox" action="index.html" method="get">
          <fieldset>
            <legend>진료과/의료진 검색</legend>
            <input type="text" placeholder="의료진 성명을 검색해주세요" name="" value="">
            <i class="xi-search xi-2x"></i>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</section>


<section class="sejongH_infoBox">
  <div class="container">
    <div class="d-flex flex-column flex-lg-row align-items-center align-items-lg-start">
      <div class="centerInfo mt-4 text-center mr-lg-5 mr-0">
        <h2>전문센터 안내</h2>
        <ul class="d-flex flex-row justify-content-lg-between">
          <li class="heart">
            <a href="#">
               <span>심혈관센터</span>
            </a>
          </li>
          <li class="brain">
            <a href="#">
              뇌혈관센터
            </a>
          </li>
          <li class="healthIncrease">
            <a href="#">
              건강증진센터
            </a>
          </li>
        </ul>
        <ul class="d-flex flex-row justify-content-lg-between">
          <li class="rehabilitation">
            <a href="#">
              재활치료센터
            </a>
          </li>
          <li class="artificial">
            <a href="#">
              인공관절센터
            </a>
          </li>
          <li class="bloodless">
            <a href="#">
              무수혈센터
            </a>
          </li>
        </ul>
      </div>

      <div class="press text-center mt-4 mr-lg-5 mr-0">
        <?php echo latest('theme/press', 'press', 5, 15);?>
      </div>

      <div class="hospitalTell text-center mt-4">
        <h2>진료안내</h2>
        <p>언제나 환자를 향합니다.</p>
        <ul class="infoText">
          <li>대표전화 : <span>1599-6677</span></li>
          <li>평일 08:30~17:30(접수마감 16:30)</li>
          <li>점심시간 12:30~13:30</li>
          <li>토요일 08:30~12:30(접수마감 11:30)</li>
          <li>공휴일 휴진/응급실 24시간</li>
        </ul>
      </div>

    </div>
  </div>
</section>






<section class="news">
	<div class="container">
    <div class="d-flex flex-lg-row flex-column justify-content-between">
      <div class="newsTitle">
        <h2 class="text-center text-lg-left">NEWS</h2>
        <p class="text-center text-lg-left mb-4 mb-lg-0">
          세종병원의 다양한 <br>
          소식을 알려드립니다.
        </p>
      </div>
      <div class="newsContent">
        <?php echo latest('theme/news', 'news', 6, 24); ?>
      </div>
    </div>
	</div>
</section>







<section class="health">
  <div class="container">
    <h2 class="text-center">건강정보</h2>
    <p class="text-center">부천세종병원이 엄섬한 건강정보</p>
    <div class="youTube d-flex flex-lg-row flex-column">
      <div class="movie movie1 mr-lg-3 mt-3 mt-lg-0">
        <iframe width="100%" height="100%" src="//www.youtube.com/embed/IyqBuUfjS8M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="movie movie2 mt-3 mr-lg-3 mt-lg-0">
        <iframe width="100%" height="100%" src="//www.youtube.com/embed/g7KaPo3NZek" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="movie movie3 mt-3 mt-lg-0">
        <iframe width="100%" height="100%" src="//www.youtube.com/embed/NOtd_hStYuU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</section>




<div id="quick">
  <ul>
    <li><a href="#"></a></li>
    <li><a href="#"></a></li>
    <li><a href="#"></a></li>
    <li><a href="#"></a></li>
  </ul>
  <button type="button" name="button">
    <a onclick="$('html,body').animate({scrollTop:0},'slow')" class="move" href="#sliderBn"><i class="xi-arrow-up xi-2x"></i> </a>
  </button>
</div>



<?php
include_once(G5_THEME_PATH.'/tail.php');
?>
