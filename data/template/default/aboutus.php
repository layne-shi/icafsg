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
		<div class="crumbs" style="display:none;"><?=x6cms_location($category,' > ');?></div>
		<div class="ny_title"><img src="<?=$category['thumb'] ?>"></div>

		<div class="padding-20-65">
			<!-- <h1 class="text-align-center"><?=$category['name']?></h1> -->
			<?=$category['content']?>
		</div>
	</div>
</div>
<?php $this->load->view($config['site_template'].'/foot');?>


