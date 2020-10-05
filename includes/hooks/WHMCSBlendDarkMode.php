<?php

function admin_custom_css_hook($vars) 
{
	$currenttemplate = $vars['template'];
	if ($currenttemplate == "blend" ) {
		$head_return = '';
		$head_return = '<link href="/assets/css/admin-dark.css" rel="stylesheet" type="text/css" />
		
		<script type="text/javascript">		
		$(document).ready(function() {
			$(\'.header\').attr(\'src\');
		})
		</script>';
		return $head_return;
	}
}
add_hook("AdminAreaHeadOutput",1,"admin_custom_css_hook");
