<?php $this->load->view('admin_head.php');?>
<div id="main_head" class="main_head" style="height:35px;">
	<table class="menu">
		<tr>
			<td>
				<a href="<?=site_aurl('adminindex')?>" class="current"><?=lang('func_adminindex')?></a><?php if (is_dir('./install')): ?><font color="red"><?=lang('installnotice')?></font><?php endif; ?>
			</td>
		</tr>
	</table>
</div>
<div id="main_head" style="padding-top:35px;">
<table cellSpacing=0 width="100%" class="content_list Personal_tab">
	<tr><th width="50%" align="left" colspan="2"><?=lang('userinfo')?></th><th align="left" colspan="2" width="50%"><?=lang('systeminfo')?></th></tr>
	<tr><td width="15%"><?=lang('user_name')?></td><td width="35%"><?=$user['username']?></td><td width="15%">系统</td><td width="35%"><?=lang('system_version')?></td></tr>
	<tr><td width="15%"><?=lang('func_usergroup')?></td><td width="35%"><?=$user['usergroup']?></td><td width="15%"><?=lang('runsetting')?></td><td width="35%"><?=$_SERVER['SERVER_SOFTWARE']?></td></tr>
	<tr><td width="15%"><?=lang('lasttimelogin')?></td><td width="35%"><?=date('Y-m-d H:i:s',$user['lasttime'])?></td><td width="15%"><?=lang('uploadlicense')?></td><td width="35%"><?=ini_get('upload_max_filesize')?></td></tr>
	<tr><td width="15%"><?=lang('lastiplogin')?></td><td width="35%"><?=$user['lastip']?></td><td width="15%"><?=lang('mysqlversion')?></td><td width="35%"><?=mysql_get_server_info()?></td></tr>
	<tr><td width="15%"><?=lang('allcountlogin')?></td><td width="35%"><?=$user['logincount']?></td><td width="15%"><?=lang('overspace')?></td><td width="35%"><?=round((@disk_free_space(".")/(1024*1024)),2).'M'?></td></tr>
</table>
</div>
<?php $this->load->view('admin_foot.php');?>