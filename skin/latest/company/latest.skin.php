<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 368;
$thumb_height = 250;
?>

<div class="d-flex">
	<?php
	for ($i=0; $i<count($list); $i++) {
	$thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

	if($thumb['src']) {
		$img = $thumb['src'];
	} else {
		$img = G5_IMG_URL.'/no_img.png';
		$thumb['alt'] = '이미지가 없습니다.';
	}
	$img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" class="card-img-top">';

	?>

	<div class="">
		<div class="card-group">
			<div class="">
			  <h5 class="f13">
					<?php

					if ($list[$i]['is_notice'])
					echo $list[$i]['subject'];
					else
					echo $list[$i]['subject'];
					?>
			  </h5>
			  <p class="card-text f13 p-0">
					<?php echo $list[$i]['wr_content']; ?>
			  </p>
			</div>
		</div><!-- /card-group -->
	</div><!-- /col -->
	<?php }?>


</div><!-- /row -->
