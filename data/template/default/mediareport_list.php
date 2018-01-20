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
		<div class="crumbs" style="display:none;">
            <?=x6cms_location($category,' > ');?>
        </div>
		<div class="ny_title">
            <img src="<?=$category['thumb'] ?>">
        </div>

		<div class="new_list">
      <div class="newsbox_top">
			<ul>
				<?php foreach ($list as $item): ?>
				<li>
                    <?php if ($item['is_recommend'] == 1) { ?>
                    <table width="664" border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                      <tr>
                        <td width="190" valign="top">
                          <a href="<?=$item['url']?>">
                            <img src="<?=$item['thumb']?>" width="165" height="122">
                          </a>
                        </td>
                        <td width="474" valign="top">
                   	     <h1>
                           <a href="<?=$item['url']?>" style="font-size:14px;">
                            <?=$item['title']?>
                           </a>
                         </h1>
                         <p><a href="<?=$item['url']?>"></a></p>
                         <div style="text-align: right;">
                            <a href="<?=$item['url']?>" style="color:#cf1b18;font-size: 14px;">詳細&gt;&gt;</a>
                         </div>
                        </td>
                      </tr>
                    </tbody>
                    </table>
                    </li>
                    <?php } ?>
                    <?php endforeach; ?>
                    </ul>
                    </div>
                    
                      <div  class="newsbox_bot">
                      <ul>
                      <?php foreach ($list as $item): ?>
                      <?php if ($item['is_recommend'] != 1) { ?>
			                	<li>
                    
                    <a href="<?=$item['url']?>" target="_blank">
                        <?=$item['title']?>
                    </a>
                    <span><?=$item['puttime']?></span>
                </li>
                    <?php } ?>
				<?php endforeach; ?>
      </ul>
                    </div>
			<div class="page"><?=isset($pagestr)?$pagestr:''?></div>
		</div>
	</div>

</div>
<?php $this->load->view($config['site_template'].'/foot');?>