<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<link type="text/css" rel="stylesheet" href="/html/front/css/common.css" />
    <link type="text/css" rel="stylesheet" href="/html/front/css/index.css" />
    <link type="text/css" rel="stylesheet" href="/html/front/css/user.css" />
    <script type="text/javascript" src="/html/front/js/common.js"></script>
	<title>
        <?php echo $title;?>
	</title>
</head>
<body onload="margin_top_height(1);">
<div id="wrap">
    <?php echo $this->element('header');?>
    <?php echo $this->fetch('content'); ?>
    <?php echo $this->element('footer');?>
</div>
</body>
</html>
