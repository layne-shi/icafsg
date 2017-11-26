<?php $this->load->view($config['site_template'].'/head');?>

<div class="wrap main">
	<div class="position-relative">		
		<div class="long1"></div>
		<div class="long2"></div>
		<div class="long3"></div>
		<div class="long4"></div>
	</div>
	<!-- slide ad start -->
	<div class="slide-ad">
		<div id="KinSlideshow" style="visibility:hidden;">
		<?php $tmpData = x6cms_slide(2);?>
		<?php foreach($tmpData as $item):?>
		<a href="<?=$item['url']?>" target="_blank"><img src="<?=$item['thumb']?>" alt="<?=$item['title']?>" width="1000" height="353" /></a>
		<?php endforeach;?>
		<?php unset($tmpData,$item);?>
		</div>
	</div>
	<!-- slide ad end -->
	<!-- content -->
	<div class="page-content">
		<ul class="searchlist">
			<?php foreach ($list as $item): ?>
			<li>[<a href="<?=$item['categoryurl']?>"><?=$item['categoryname']?></a>] <a href="<?=$item['url']?>" target="_blank"><?=$item['title']?></a><span><?=$item['puttime']?></span></li>
			<?php endforeach; ?>
		</ul>
		<div class="page"><?=isset($pagestr)?$pagestr:''?></div>
	</div>
</div>

<?php $this->load->view($config['site_template'].'/foot');?>