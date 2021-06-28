<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 200;
$thumb_height = 200;
?>

<div id="sliderBn" class="owl-carousel owl-theme">
    <?php
    for ($i=0; $i<count($list); $i++) {
    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

    if($thumb['src']) {
        $img = $thumb['ori'];
    } else {
        $img = G5_IMG_URL.'/no_img.png';
        $thumb['alt'] = '이미지가 없습니다.';
    }
    $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
    ?>

    <div class="item">
      <a href="<?php echo $list[$i]['href']; ?>">
        <div  class='mainSliderItme  slider<?php echo $i; ?>' style="background-image:url(<?php echo $img; ?>); background-repeat:no-repeat">
           <div class="mainSliderTitle">
             <div class="txt">
               <h3><?php echo $list[$i]['subject']; ?></h3>
               <p class="mt-3"><?php echo $list[$i]['wr_content']; ?></p>
               <!-- <a href="<//?php echo $list[$i]['wr_link1'] ?>" class='bo_link1'></a>
               <a href="<//?php echo $list[$i]['wr_link2'] ?>" class='bo_link2'></a> -->
             </div>
           </div>
        </div>
      </a>
    </div>
	<?php } ?>
</div>
