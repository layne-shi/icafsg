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

		<div class="maincen2">
            <!-- <div id="weizhi">所在位 &gt; <?=x6cms_location($category,' > ');?></div> -->

            <div class="zhanshi">
                <dl class="sm_ny clearfix">
                    <?php foreach ($list as $item): ?>
                    <dd>
                            <a href="<?=$item['url']?>" class="sp_tu">
								<img src="<?=$item['thumb']?>" width="276" height="159">
								<h4><?=$item['title']?></h4>
                            </a>
                    </dd>
                    <?php endforeach; ?>
                </dl>
            </div>
            <div class="page"><?=isset($pagestr)?$pagestr:''?></div>
		</div>


	</div>
</div>
<?php $this->load->view($config['site_template'].'/foot');?>