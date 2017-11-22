<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?=$config['seo_title']?> - <?=$config['site_name']?> </title>
<meta name="keywords" content="<?=$config['seo_keywords']?>" />
<meta name="description" content="<?=$config['seo_description']?>" />
<meta name="author" content="<?=lang('system_author');?>" />
<script type="text/javascript" src="<?=$config['site_templateurl'];?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?=$config['site_templateurl'];?>/js/public.js"></script>
<script type="text/javascript" src="<?=$config['site_templateurl'];?>/js/swfobject.js"></script>
<link rel="stylesheet" type="text/css" href="<?=$config['site_templateurl'];?>/css/style.css" />
<link rel="shortcut icon" href="<?=x6cms_path('images/favicon.ico');?>" />
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
</script>
</head>
<body>
<div style="width:120px; height:120px; position:absolute; right:30px; padding-top:50px; z-index:-1;"><img src="<?=$config['site_templateurl'];?>/images/weixin.jpg" width="120" height="120" alt="官方微信公众平台"></div>
<div class="header">
	<div class="wrap clearfix">
		<div class="logo">
			<a href="<?=base_url($langurl);?>"><img src="<?=$config['site_templateurl'];?>/images/logo.jpg"></a>	
		</div>
		<div class="headerr">
			<div class="search">
				<?=x6cms_search()?>
			</div>
		</div>
	</div>
	<div class="nav">
		<div class="wrap"><?=x6cms_category();?></div>
	</div>
</div>