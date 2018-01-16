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
	<div class="page-content clearfix">
		<div class="ny_title"><img src="<?=$category['thumb'] ?>"></div>
		<div class="mainleft">
			<div class="leftsidebar" id="nava">

			<ul class="clearfix">
				<?php $tmpData = x6cms_thiscategory($category);?>
				<?php foreach ($tmpData as $item): ?>
				<li class="menu_<?=$item['level']?><?php if($item['id']==$category['id']):?> active<?php endif;?>"><a class="<?php if($item['id']==$category['id']):?> guo<?php endif;?>" href="<?=$item['url']?>"><?=$item['name']?></a></li>
				<?php endforeach; ?>
			</ul>

			</div>
			<div class="leftpic"><?=x6cms_fragment('atrical_left_bottom_img1')?></div>
			<div class="leftpic"><?=x6cms_fragment('atrical_left_bottom_img2')?></div>
		</div>

		<div class="mainright">
			<div class="maincen2">
				<div id="weizhi">所在位 &gt; <?=x6cms_location($category,' > ');?></div>

				<div class="padding-20-65">
					<h1 class="text-align-center"><?=$detail['title']?></h1>
					<?=$detail['content']?>
				</div>
			</div>
		</div>




	</div>
</div>

<?php $this->load->view($config['site_template'].'/foot');?>