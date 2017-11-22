<?php $this->load->view($config['site_template'].'/head');?>
<script type="text/javascript" src="<?=$config['site_templateurl'];?>/js/jquery.KinSlideshow-1.2.1.min.js"></script>
<script type="text/javascript">
$(function(){
	$("#KinSlideshow").KinSlideshow();
})
</script>
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
	<div class="main-content">
		<div class="main_left">
			<div class="inleft01">
				<div class="title">
					<a href="<?=site_url('category/ask'.$langurl)?>">
						<img src="data/template/default/images/tit01.jpg" width="425" height="33">
					</a>
				</div>
				<div class="clearfix">
					<div class="intr_left">						
						<?=x6cms_fragment('index_chinest_festival')?>
					</div>
					<div class="intr_right">
						<div class="intr_right01"><?=x6cms_fragment('index_chinest_festival_title')?></div>
						<div class="intr_right02"><?=x6cms_fragment('index_chinest_festival_content')?></div> 					
					</div>
				</div>
			</div>
			<div class="inleft02">
              <div class="title"><a href="<?=site_url('category/ask'.$langurl)?>"><img src="data/template/default/images/tit02.jpg" width="282" height="33"></a></div>
               <div class="inle_news">   
				<ul>
					<?php $tmpData = x6cms_modellist('artscouncil',0,'default',5,0);?>
					<?php foreach($tmpData as $item):?>
					<li><a href="http://icafsg.com/yszk.aspx">藝術總監</a></li>
					<li><a href="<?=$item['url']?>" style="<?=$item['color']?><?=$item['isbold']?>" ><?=$item['title']?></a></li>
					<?php endforeach;?>
					<?php unset($tempData,$item);?>	
				</ul>
               </div>
			</div>
		</div>
		<div class="main_right">right</div>
	</div>
	<!-- *************************** -->

	<div class="news">
		<span class="head"><span><?=lang('article')?></span><a href="<?=site_url('category/news'.$langurl)?>"  class="fr"><?=lang('more')?></a></span>
		<ul>
			<?php $tmpData = x6cms_modellist('article',0,'default',7,0);?>
			<?php foreach($tmpData as $item):?>
			<li>[<a href="<?=$item['categoryurl']?>"><?=$item['categoryname']?></a>]<a href="<?=$item['url']?>" style="<?=$item['color']?><?=$item['isbold']?>"><?=$item['title']?></a></li>
			<?php endforeach;?>
			<?php unset($tempData,$item);?>
		</ul>
	</div>
	<div class="main_left">
		<div class="ask">
			<div class="ask_title"><span><a href="<?=site_url('category/ask'.$langurl)?>"><?=lang('more')?></a></span><h3><?=lang('ask')?></h3></div>
			<div class="ask_content">
				<div class="ask_first">
					<?=x6cms_fragment('index_cpjs')?>
				</div>
				<div class="ask_list">
					<ul>
					<?php $tmpData = x6cms_modellist('ask',0,'default',5,0);?>
					<?php foreach($tmpData as $item):?>
					<li><span><?=$item['puttime'];?></span>[<a href="<?=$item['categoryurl']?>"><?=$item['categoryname']?></a>]<a href="<?=$item['url']?>" style="<?=$item['color']?><?=$item['isbold']?>" ><?=$item['title']?></a></li>
					<?php endforeach;?>
					<?php unset($tempData,$item);?>	
					</ul>	
				</div>
			</div>
		</div>
		<div class="anli">
			<div class="anli_title">
				<span><a href="<?=site_url('category/product'.$langurl)?>"><?=lang('more')?></a></span>
				<h3><?=lang('product')?></h3>
			</div>
			<div class=anli_content>
				<ul>
				<?php $tmpData = x6cms_modellist('product',0,'default',4,0);?>
				<?php foreach($tmpData as $item):?>
				<li>
					<a href="<?=$item['url']?>"><img src="<?=$item['thumb']?>" width=90 height=70></a>
					<span>[<a href="<?=$item['categoryurl']?>"><?=$item['categoryname']?></a>]<?=$item['title']?></span>
					</li>
				<?php endforeach;?>
				<?php unset($tempData,$item);?>
				</ul>
			</div>
		</div>
	</div>
	<div class="main_right">
		<div class="ask_title"><span><a href="<?=site_url('category/down'.$langurl)?>"><?=lang('more')?></a></span><h3><?=lang('down')?></h3></div>
		<div class=product_content>
			<ul class=product_list>
			<?php $tmpData = x6cms_modellist('down',0,'default',4,0);?>
				<?php foreach($tmpData as $item):?>
				<li><div class=product_img><a href="<?=$item['url']?>"><img src="<?=$item['thumb']?>" width=85 height=68></a><span><?=$item['title']?><span></div>
				<div class=product_summary>
				<h3>[<a href="<?=$item['categoryurl']?>"><?=$item['categoryname']?></a>]<a href="<?=$item['url']?>"><?=$item['title']?></a></h3><?=$item['description']?> 
				</div>
				</li>
				<?php endforeach;?>
				<?php unset($tempData,$item);?>
			</ul>
		</div>
	</div>
	<div class="tag"><?=lang('tags')?>:
	<?php $tmpData = x6cms_tags(5);?>
	<?php foreach($tmpData as $item):?>
	<a href="<?=$item['url']?>" class="font<?=rand(1,10)?>"><?=$item['title']?></a>
	<?php endforeach;?>
	<?php unset($tmpData,$item);?>
	</div>
	<div class="friendlink">
	<?php $tmpData = x6cms_link();?>
	<?php foreach($tmpData as $item):?>
	<a href="<?=$item['url']?>" target="_blank" title="<?=$item['description']?>"><?=$item['title']?></a>
	<?php endforeach;?>
	<?php unset($tmpData,$item);?>
	</div>
</div>
<?php $this->load->view($config['site_template'].'/foot');?>