<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');

if($bo_table) {
	$E_bo = sql_fetch("SELECT * FROM g5_board where bo_table ='$bo_table'");
}

// 오늘 새글
function bo_count($bo){
	$cnt = 0;
	foreach (func_get_args() as $bo) {
		$table = "g5_write_".$bo;
		$sql = "select count(*) cnt from $table where wr_datetime >= CURRENT_DATE() and wr_is_comment=0";
		$row = sql_fetch($sql);
		$cnt += $row['cnt'];
	}
	return $cnt;;
}

// 팝업추가
if(defined('_INDEX_')) {
    include G5_BBS_PATH.'/newwin.inc.php';
}

?>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<section id="psjPopup" >
  <div class="popTop d-flex flex-column-reverse text-center">
    <h1>NCS | 박소정의 리뉴얼</h1>
    <p><img src="/glassImg/gnu_logo.png" alt="그누보드"></p>
  </div>
    <div class="popTxt d-block d-lg-flex justify-content-lg-around f14">
      <div class="popleft">
        <div class="making">
          <div class="makingContent">
            <h2>제작 내용</h2>
            <ul class="content">
              <li>- 모든 페이지는 내용관리와 게시판으로 제작</li>
              <li>- 최근게시를 활용해 컨텐츠<strong>80%이상 관리자 수정편집</strong>가능</li>
              <li>- 공통 클래스,레이아웃 클래스 부트스트랩 4 활용</li>
              <li>- 시멘틱 구조를 활용해 웹접근성과 검색엔진 최적화</li>
              <li>- 단독페이지 제작을 지양하여 100% 관리자 페이지로 컨텐츠 관리</li>
              <li>- SEO 최적화 <span>( #병원 #심장병원 #부천병원 #병원예약 #)</span></li>
              <li>- jQuery 플러그인 지양</li>
            </ul>
          </div>
          <ul class="work d-flex d-lg-block">
            <li class="workList"><strong>제작 목표</strong>유지보수비용 0%</li>
            <li class="workList ml-1 ml-lg-0"><strong>작업기간</strong> 5일</li>
            <li class="pl-1 pl-lg-0 ml-lg-0"><strong>참여도  100%</strong></li>
          </ul>
          <ul class="work">
            <li class="workList"><strong>DB 경로</strong>sj926thwjdk.cafe24.com/psjAdmin-4.0.10.20</li>
            <li class="workList"><strong>DB 접두어</strong>sejongH_</li>
          </ul>
        </div>

      </div>

      <div class="center">
        <div class="file">
          <h2>PHP - 최근 게시글 경로</h2>
          <dl class="html">
            <dt>logo</dt>
            <dd>/theme/logo/latest.skin.php</dd>
            <dt>메인 슬라이드 (owl-carousel 플러그인 사용)</dt>
            <dd>/theme/mainSliderBn/latest.skin.php</dd>
            <dt>footer 기업 정보</dt>
            <dd>/theme/company/latest.skin.php</dd>
          </dl>
          <h2>CUSTOMIZING</h2>
          <dl class="javaCss">
            <dt>CSS</dt>
            <dd>/sejongH/theme/ety_wide_theme/css/sojeong.css</dd>
            <dt>JavaScript</dt>
            <dd>/sejongH/theme/ety_wide_theme/css/sojeong.js</dd>
          </dl>
        </div>
        <div class="useApp">
          <h2>APP</h2>
          <p>atom, psd, git</p>
        </div>
        <div id="icon">
          <ul class="d-lg-inline-block d-flex">
            <li><a href="//github.com/psjeong/sejongH.git" target="_blank"><i class="xi-github xi-3x"></i></a></li>
            <li><a href="//open.kakao.com/o/sHSbYT6c" target="_blank"><i class="xi-kakaotalk xi-3x"></i></a></li>
          </ul>
          <ul class="d-lg-inline-block d-flex">
            <li><a href="//drive.google.com/file/d/19cvHoTPG1sDwHJAt-rpxBjaUgerQMONN/view?usp=sharing" target="_blank"><i class="xi-paper-o xi-3x"></i></a></li>
            <li><a href="mailto:sj926thwjdk@naver.com" target="_blank"><i class="xi-mail-o xi-3x"></i></a></li>
          </ul>
        </div>
      </div>

      <div class="popRight">
        <div class="addPortfolio">
          <div class="psjBag"><img src="/glassImg/sjBag_.gif" alt="박소정"></div>
          <div class="psjInsta"><img src="/glassImg/psj_insta2.jpg" alt="인스타 배경"></div>
          <div class="qr">
            <a href="//sj926thwjdk.cafe24.com/" target="_blank">
              <img src="/glassImg/qrcode_sj.png" alt="박소정의 자기소개 페이지">
            </a>
          </div>
        </div>
      </div>
    </div>


  <button class="closebtn"><i class="xi-close-thin xi-2x"></i></button>
</section>
<div id="pDim"></div>


<!-- 공지사항 -->
	<?php echo latest('theme/noticeSlide', 'notice', 5, 40);?>


<!-------------------------- 네비게이션 -------------------------->


<nav class="navbar navbar-expand-lg navbar-white bg-white">
  <div class="container">
  	<?php echo latest('theme/logo', 'logo', 1, 1); ?>

  	<button id="allMenu" type="button">
  	  <i class="xi-bars xi-2x"></i>
  	</button>
  	<div class="collapse navbar-collapse" id="navbarResponsive" data-hover="dropdown" data-animations="fadeIn fadeIn fadeInUp fadeInRight">
  	  <ul class="navbar-nav ml-auto">
    		<?php
    		$sql = " select *
    					from {$g5['menu_table']}
    					where me_use = '1'
    					  and length(me_code) = '2'
    					order by me_order, me_id ";
    		$result = sql_query($sql, false);
    		$gnb_zindex = 999; // gnb_1dli z-index 값 설정용
    		$menu_datas = array();
    		for ($i=0; $row=sql_fetch_array($result); $i++) {
    			$menu_datas[$i] = $row;

    			$sql2 = " select *
    						from {$g5['menu_table']}
    						where me_use = '1'
    						  and length(me_code) = '4'
    						  and substring(me_code, 1, 2) = '{$row['me_code']}'
    						order by me_order, me_id ";
    			$result2 = sql_query($sql2);
    			for ($k=0; $row2=sql_fetch_array($result2); $k++) {
    				$menu_datas[$i]['sub'][$k] = $row2;
    			}
    		}
    		$i = 0;
    		foreach( $menu_datas as $row ){
    			if( empty($row) ) continue;
    		?>
    			<?php if($row['sub']['0']) { ?>
    				<li class="nav-item dropdown">
    					<a class="nav-link dropdown-toggle f16" href="<?php echo $row['me_link']; ?>" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" target="_<?php echo $row['me_target']; ?>">
    					<?php echo $row['me_name'] ?>
    					</a>
    						<!-- 서브 -->
    						<ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
    							<?php
    							// 하위 분류
    							$k = 0;
    							foreach( (array) $row['sub'] as $row2 ){

    							if( empty($row2) ) continue;

    							?>
    							<a class="dropdown-item f15 fw4" href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>"><?php echo $row2['me_name'] ?></a>

    							<?php
    							$k++;
    							}   //end foreach $row2

    							if($k > 0)
    							echo '</ul>'.PHP_EOL;
    							?>
    			<?php }else{?>
    				<li class="nav-item">
    				<a class="nav-link en2 f16" href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>"><?php echo $row['me_name'] ?></a>
    				</li>
    			<?php }?>
    		</li>

    		<?php
    		$i++;
    		}   //end foreach $row

    		if ($i == 0) {  ?>
    			<li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <br><a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
    		<?php } ?>
  	  </ul>
  	</div>
    <ul id="user" class="d-lg-flex d-none">
    <?php if($is_member) { ?>
      <li><a href="<?php echo G5_BBS_URL ?>/register_form.php">정보수정</a></li>
      <li><a href="<?php echo G5_URL?>/bbs/logout.php">로그아웃</a></li>
    <?php }else{ ?>
      <li><a href="<?php echo G5_URL?>/bbs/register.php">회원가입</a></li>
      <li><a href="<?php echo G5_URL?>/bbs/login.php">로그인</a></li>
    <?php }?>
    </ul>
  </div>
  <div class="menuBG">
    <div class="container">
      <dl class="tellInfo">
        <dt>대표전화</dt>
        <dd><strong>1599-6677</strong></dd>
        <dd>평일 08:30~17:30(접수마감 16:30)</dd>
        <dd>점심시간 12:30~13:30</dd>
        <dd>토요일 08:30~12:30(접수마감 11:30)</dd>
        <dd>공휴일 휴진/응급실 24시간</dd>

        <dt>면회시간안내</dt>
        <dd><strong>병동/중환자실</strong></dd>
        <dd>코로나 19로 인해 전면 금지</dd>
      </dl>
    </div>
  </div>
</nav>




<!-------------------------- 게시판 상단 배경 수정하는 곳 -------------------------->
<?php
	if($bo_table){
		include_once(G5_THEME_PATH.'/top_banner.php');
	}
?>
<!-------------------------- ./게시판 상단 배경 수정하는 곳 -------------------------->
