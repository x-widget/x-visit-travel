<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
widget_css();
$visit = x::visit();

$visit_name = array('오늘', '어제', '최대', '전체');
?>
<div class='stats-container'>
	<div class='stats-title'>
		<img src="<?=x::url()?>./widget/<?=$widget_config['name']?>/img/stat-icon.png"/>접속자 통계
	</div>
	<div class='stats-content'>
		<?for( $i=0; $i<=3; $i++) { 
			if( $visit[$i+1] ) $num_of_visits = number_format($visit[$i+1]);
			else $num_of_visits = 0;			
		?>
			<div class='per-stats'><?=$visit_name[$i]?> <span class='stats-results'><?=$num_of_visits?></span></div>
		<?}?>
		<?php if ($is_admin == "super") {  ?><a href="<?php echo G5_ADMIN_URL ?>/visit_list.php">상세보기</a><?php } ?>
	</div>
</div>

