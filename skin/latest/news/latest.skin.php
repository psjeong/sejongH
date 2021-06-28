<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 600;
$thumb_height = 600;
?>

<div id="newsSlider" class="owl-carousel owl-theme col-12">
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
        <div class="newsSliderTitle d-flex flex-column justify-content-between" >
           <h3 class=""><?php echo $list[$i]['subject']; ?></h3>
           <span class="text-right"><?php echo $list[$i]['datetime'] ?></span>
        </div>
      </a>
    </div>
	<?php } ?>
</div>
