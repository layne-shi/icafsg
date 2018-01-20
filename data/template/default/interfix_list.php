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
				    <li class="menu_1">
                        <a class="<?php if($item['id']==$category['id']):?> guo<?php endif;?>" href="<?=(site_url('category/'.$item['dir']))?>"><?=$item['name']?></a>
                    </li>
				<?php endforeach; ?>
			</ul>

			</div>
			<div class="leftpic"><?=x6cms_fragment('atrical_left_bottom_img1')?></div>
			<div class="leftpic"><?=x6cms_fragment('atrical_left_bottom_img2')?></div>
		</div>

		<div class="mainright">
			<div class="maincen2">
				<div id="weizhi">所在位 &gt; <?=x6cms_location($category,' > ');?></div>
				<div class="zhanshi">
					<ul class="clearfix">
						<?php foreach ($list as $item): ?>
						<li>
                            <div class="">
                                <a href="<?=$item['url']?>">
                                    <img src="<?=$item['thumb']?>" width="320" height="240">
                                </a>
                            </div>
                            <div class="wen_fuwu">
                                <!-- <a href="<?=$item['url']?>"><?=$item['title']?></a> -->
                            </div>
						</li>
						<?php endforeach; ?>
					</ul>
				</div>
				<div class="page"><?=isset($pagestr)?$pagestr:''?></div>
			</div>
		</div>
	</div>



</div>
<?php $this->load->view($config['site_template'].'/foot');?>