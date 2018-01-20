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
	<div class="main-content">
		<div class="main_left">

			<div class="clearfix">
				<div class="inleft01">
					<div class="title">
						<a href="<?=site_url('category/contactus'.$langurl)?>">
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
				<div class="title"><a href="<?=site_url('category/artscouncil'.$langurl)?>"><img src="data/template/default/images/tit02.jpg" width="282" height="33"></a></div>
				<div class="inle_news">
                    <ul>
                        <?php $tmpData = x6cms_thiscategory($artsCouncil);?>
                        <?php foreach ($tmpData as $item): ?>
                            <li>
                                <a class="" href="<?=(site_url('category/'.$item['dir']))?>"><?=$item['name']?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>

				</div>
				</div>
			</div>

			<div class="inleft03">
				<div class="title"><a href="<?=site_url('category/artfestival'.$langurl)?>"><img src="data/template/default/images/tit03.jpg"></a></div>
				<div class="project">
                    <dl class="sm clearfix">
                        <?php foreach($artfestival as $item):?>
                        <dd>
                            <a title="<?=$item['title']?>" href="<?=$item['url']?>" class="sp_tu">
                                <img src="<?=$item['thumb']?>" width="188" height="108">
                                <h4><?=$item['title']?></h4>
                            </a>
                        </dd>
                        <?php endforeach;?>
                    </dl>
				</div>
			</div>

			<div class="inleft04">
				<div class="title">
					<a href="<?=site_url('category/specialperformance'.$langurl)?>"><img src="data/template/default/images/tit04.jpg" width="707" height="33"></a>
				</div>
				<div id="slider">
					<div class="buttons">
						<span class="prev">prev</span>
						<span class="next">next</span>
					</div>
					<div class="holder">
				      <div class="content" style="left: 0px;">
                        <ul>
                        <?php foreach($specialperformance as $item):?>
                          <li class="fragment">
                            <div class="gdz">
                              <div class="fra_tu">
                                <a href="<?=$item['url']?>">
                                  <img src="<?=$item['thumb']?>" width="190" height="118">
                                 </a>
                               </div>
                               <div class="fra_wen">
                                <p>
                                  <a href="<?=$item['url']?>">
                                    <?=$item['title']?>
                                  </a>
                                </p>
                               </div>
                            </div>
                          </li>
                        <?php endforeach;?>
                        </ul>
                      </div>
					</div>
				</div>
			</div>

			<div class="inleft05">
				<div class="title">
					<a href="<?=site_url('category/expertclass'.$langurl)?>"><img src="data/template/default/images/tit05.jpg" width="707" height="33"></a>
				</div>
				<div id="slider">
                    <div class="buttons">
                        <span class="prev">prev</span>
                        <span class="next">next</span>
                    </div>
                    <div class="holder">
                      <div class="content" style="left: 0px;">
                        <ul>
                        <?php foreach($expertclass as $item):?>
                          <li class="fragment">
                            <div class="gdz">
                              <div class="fra_tu">
                                <a href="<?=$item['url']?>">
                                  <img src="<?=$item['thumb']?>" width="190" height="118">
                                 </a>
                               </div>
                               <div class="fra_wen">
                                <p>
                                  <a href="<?=$item['url']?>">
                                    <?=$item['title']?>
                                  </a>
                                </p>
                               </div>
                            </div>
                          </li>
                        <?php endforeach;?>
                        </ul>
                      </div>
                    </div>
				</div>

			</div>

		</div>
		<!-- right -->
		<div class="main_right">
			<div class="inleft06">
				<div class="title">
					<a href="<?=site_url('category/newscenter'.$langurl)?>">
						<img src="data/template/default/images/tit06.jpg" width="280" height="32">
					</a>
				</div>
				<div class="news">
                    <ul>
                    <?php $tmpData = x6cms_modellist('article',68,'default',7,0);?>
                      <?php foreach ($tmpData as $item): ?>
                        <li><a href="<?=$item['url']?>" style="<?=$item['color']?><?=$item['isbold']?>"><?=$item['title']?></a></li>
                    <?php endforeach; ?>
                    </ul>
				</div>
			</div>

			<div class="inleft07">
				<div class="title02">
					<a href="<?=site_url('category/mediareport'.$langurl)?>">
						<img src="data/template/default/images/tit07.jpg" width="270" height="32">
					</a>
				</div>
				<div class="baodao">
		            <ul>
                    <?php foreach($mediareport as $item):?>
                        <li class="clearfix">
                          <div class="fl">
                            <a href="<?=$item['url']?>">
                              <img src="<?=$item['thumb']?>" width="131" height="85">
                            </a>
                          </div>
                          <div class="fl">
                            <div class="bd_wen">
                              <h5>
                                <a href="<?=$item['url']?>"><?=$item['title']?></a>
                              </h5>
                            </div>
                          </div>
                        </li>
                    <?php endforeach;?>
                    </ul>
				</div>
			</div>

			<div class="inleft08">
				<div class="title03">
					<a href="<?=site_url('category/wonderfulreview'.$langurl)?>">
						<img src="data/template/default/images/tit08.jpg" width="268" height="32">
					</a>
				</div>
				<div class="cpshow">
                  <ul>
                  <?php foreach($wonderfulreview as $item):?>
                    <li>
                      <a href="<?=$item['url']?>" class="showlist">
                        <img src="<?=$item['thumb']?>" width="78" height="47">
                        <div class="bd_wen">
                          <h6></h6>
                          <p><?=$item['title']?></p>
                        </div>
                      </a>
                    </li>
                  <?php endforeach;?>
                  </ul>
				</div>
			</div>

			<div class="inleft09">
				<div class="title0">
					<?=x6cms_fragment('right_bottom_title')?>
					<a style="display:none;" href="<?=site_url('category/interfix'.$langurl)?>">
						<img src="data/template/default/images/tit09.jpg" width="286" height="32">
					</a>
				</div>

				<div class="related">
					<ul>
						<li>
							<?=x6cms_fragment('right_bottom1')?>
							<a style="display:none;" href="<?=site_url('category/singapore'.$langurl)?>" class="sg1">藝術節在新加坡</a>
						</li>
						<li>
							<?=x6cms_fragment('right_bottom2')?>
							<a style="display:none;" href="<?=site_url('category/seoul'.$langurl)?>" class="sg2">藝術節在首爾</a>
						</li>
						<li>
							<?=x6cms_fragment('right_bottom3')?>
							<a style="display:none;" href="<?=site_url('category/taipei'.$langurl)?>" class="sg3">藝術節在台北</a>
						</li>
						<li>
							<?=x6cms_fragment('right_bottom4')?>
							<a style="display:none;" href="<?=site_url('category/interfix'.$langurl)?>" class="sg5">更多</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- *************************** -->

</div>

<?php $this->load->view($config['site_template'].'/foot');?>