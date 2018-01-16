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
            <?php
                $url = site_url('detail/'.$category['dir'].'/'.$detail['id']);

                $CI =& get_instance();
                $flag = $CI->uri->segment(4);
            ?>
			<ul class="clearfix">
				<li class="menu_1">
                    <a class="<?=($flag==false?'guo':'')?>" href="<?=$url?>">简介</a>
                </li>
				<li class="menu_1">
                    <a class="<?=($flag=='group'?'guo':'')?>" href="<?=$url.'/group'?>">专家团</a>
                </li>
				<li class="menu_1">
                    <a class="<?=($flag=='notice'?'guo':'')?>" href="<?=$url.'/notice'?>">参赛须知</a>
                </li>
				<li class="menu_1">
                    <a href="<?=site_url('category/signdownload')?>">报名表下载</a>
                </li>
				<li class="menu_1">
                    <a href="<?=site_url('category/contactus')?>">报名方式下载</a>
                </li>
			</ul>

			</div>
			<div class="leftpic"><?=x6cms_fragment('atrical_left_bottom_img1')?></div>
			<div class="leftpic"><?=x6cms_fragment('atrical_left_bottom_img2')?></div>
		</div>

		<div class="mainright">
			<div class="maincen2">
				<div id="weizhi">所在位 &gt; <?=x6cms_location($category,' > ');?></div>

				<div class="">
<!--                     <h1 class="text-align-center">
                        <?=$detail['title']?>
                    </h1> -->
                    <?php if($flag == false):?>
					    <?=$detail['content']?>
                    <?php elseif($flag == 'group'):?>
                        <?=$detail['group']?>
                    <?php elseif($flag == 'notice'):?>
                        <?=$detail['notice']?>
                    <?php endif;?>
				</div>
			</div>
		</div>




	</div>
</div>

<?php $this->load->view($config['site_template'].'/foot');?>