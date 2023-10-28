<?php if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
} ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no,viewport-fit=cover,minimum-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="renderer" content="webkit">
	<meta name="layoutmode" content="standard">
	<meta name="imagemode" content="force">
	<meta name="wap-font-scale" content="no">
	<?php if($this->options->favicon){ ?>
    <link rel="icon" type="image/x-icon" href="<?php $this->options->favicon(); ?>">
	<?php } ?>
    <title><?php $this->archiveTitle([
            'category' => _t('分类 %s 下的文章'),
            'search'   => _t('包含关键字 %s 的文章'),
            'tag'      => _t('标签 %s 下的文章'),
            'author'   => _t('%s 发布的文章')
        ], '', ' - '); ?><?php $this->options->title(); ?></title>
	<link rel="stylesheet" href="<?php $this->options->themeUrl('css/normalize.css'); ?>">
	<link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>">
</head>