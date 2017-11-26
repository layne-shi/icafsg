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
		<div class="project_bm">
			<?php foreach ($list as $key => $item): ?>
			<dl class="bm_ny clearfix">
				<dd>
					<a href="<?=$item['attrurl']?>" class="bm_tu">
						<img src="<?=$item['thumb']?>" width="279" height="220">
					</a>
					<h4>
						<a href="<?=$item['attrurl']?>"><?=$item['title']?></a>
					</h4>
					<div class="x_piao">
						<a title="<?=$item['title']?>" href="<?=$item['attrurl']?>">
							<img src="data/template/default/images/x_piao.jpg" width="89">
						</a>
					</div>
				</dd>
			</dl>
			<?php endforeach; ?>
		</div>
	</div>
</div>

<?php $this->load->view($config['site_template'].'/foot');?>