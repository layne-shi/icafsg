<div class="copyright">
	<p>
		法律聲明：未經許可，任何模仿本站模板、轉載本站內容等行為者，本站保留追究其法律責任的權利！<br>
		<span>本網站版權為國際華人藝術節所有 </span><br>  
		<span>技術支持：<a href="<?=base_url($langurl);?>">中視藍圖</a></span>
	</p>
</div>

<div class="copyright" style="display:none;">
	<?php if(isset($config['site_beian'])):?>
	<p>备案号：<a href="http://www.miibeian.gov.cn" rel="nofollow" target="_blank"><?=$config['site_beian']?></a></p>
	<?php endif;?>
	<p>© 2012 <?=$config['site_name']?>  Inc. Powered by <a href="<?=lang('system_link')?>" target="_blank"><?=lang('system_name')?></a> <?=lang('system_version')?></p>
</div>
<?=$config['site_code']?>
</body>
</html>