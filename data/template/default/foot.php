
	<div id="rightFloat" class="right-float position-fixed"><?=x6cms_fragment('right_float')?></div>
	
		<div class="copyright">
			<p>
				法律聲明：未經許可，任何模仿本站模板、轉載本站內容等行為者，本站保留追究其法律責任的權利！<br>
				<span>本網站版權為國際華人藝術節所有 </span><br>  
				<!-- <span>技術支持：<a href="<?=base_url($langurl);?>">中視藍圖</a></span> -->
			</p>
		</div>
	
		
	<script type="text/javascript" src="<?=$config['site_templateurl'];?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?=$config['site_templateurl'];?>/js/public.js"></script>
	<script type="text/javascript" src="<?=$config['site_templateurl'];?>/js/fns.js"></script>
	<script type="text/javascript" src="<?=$config['site_templateurl'];?>/js/swfobject.js"></script>
	<script type="text/javascript" src="<?=$config['site_templateurl'];?>/js/jquery.KinSlideshow-1.2.1.min.js"></script>
	
	<script type="text/javascript">
		var lang = {};
		lang.validform = {
				'onlyform':'<?=lang('valid_onlyform')?>',
				'required':{
					'text':'* <?=lang('valid_required_text')?>',
					'checkmultiple':'* <?=lang('valid_required_checkmultiple')?>',
					'select':'* <?=lang('valid_required_select')?>',
					'checkbox':'*  <?=lang('valid_required_checkbox')?>'
				},
				'min':{
					'text':'* <?=lang('valid_min_text')?>',
					'text1':'<?=lang('valid_min_text1')?> '
				},
				'max':{
					'text':'* <?=lang('valid_max_text')?>',
					'text1':'<?=lang('valid_max_text1')?>'
				},
				'email':{
					'text':'* <?=lang('valid_email_text')?>'
				},
				'equals':{
					'text':'* <?=lang('valid_equals_text')?>'
				}
		};
	
		$(function(){
			if(/Android|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)){
				$('body').css({'overflow-x':'auto'});
				$('#rightFloat').css({'right':'0'});
			}else{
				$('body').css({'overflow-x':'hidden'});
				$('#rightFloat').css({'left':(($(window).width()-1000)/2)+1010+'px'});
			};
			$("#KinSlideshow").KinSlideshow();
		});
	</script>
	</body>
	</html>