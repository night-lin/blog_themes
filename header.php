<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- css -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>">
    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body>
<div class="themeGreen-nav">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <!-- 折叠导航 -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    <img alt="Brand" src="<?php $this->options->themeUrl('images/logo.png'); ?>"></a>
            </div>
            <div class="collapse navbar-collapse navbar-right " id="nav-1">
                <ul class="nav navbar-nav">
                    <li <?php if($this->is('index')): ?> class="active"<?php endif; ?>>
                        <a href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
                    </li>
                    <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                    <?php while($pages->next()): ?>
                        <li <?php if($this->is('page', $pages->slug)): ?> class="active"<?php endif; ?>>
                            <a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <!-- 搜索框 -->
                <!-- <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="输入搜索条件"></div>
                    <button type="submit" class="btn btn-default">站内搜索</button>
                </form> -->
            </div>
        </div>
    </nav>
</div>
<div class="themeGreen-jumbotron">
    <div class=" ">
        <div class="jumbotron">
            <div class="container">
                <h1><?php $this->options->title(); ?></h1>
                <p><?php $this->options->description(); ?></p>
            </div>
        </div>
    </div>
</div>

