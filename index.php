<?php
/**
 * 这是 蛋总 定制的主题
 *
 * @package Greenthemes
 * @author night-lin hongweipeng
 * @version 0.0.1
 * @link https://github.com/night-lin/blog_themes
 */

$this->need('header.php');
?>

<div class="themeGreen-content">
    <div class="container">
        <div class="row">
            <div class="col-md-9" role = "main">
                <div class="article-list">
                    <!-- 文章块 -->
                    <?php while($this->next()): ?>
                        <div class="article">
                            <a class="article-title" href="<?php $this->permalink() ?>"><h1><?php $this->title() ?></h1></a>
                            <div class="article-info">
                                <span class="article-tag"><?php $this->category(','); ?></span>
                                <span><i class="glyphicon glyphicon-user"></i>
                                <a class="article-author" itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></span>
                                <span class="article-date">
                                <i class="glyphicon glyphicon-time"></i>
                                <?php $this->date('Y-m-d'); ?>
                                </span>
                            </div>
                            <div class="article-content clearfix">
                                <?php $this->content(); ?>
                            </div>
                            <div class="btn-area clearfix">
                                <span class="agree-nums"><i class="glyphicon glyphicon-heart"></i>2</span>
                                <a class="btn-read-line" href="<?php $this->permalink() ?>">阅读全文</a>

                            </div>
                        </div>
                    <?php endwhile; ?>
                    
                </div>
                <!-- 分页按钮 -->
                <div class="page-nav">
                    <nav>
                        <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;', 3, '...', array(
                            'itemTag'       =>  'li',
                            'textTag'       =>  'span',
                            'currentClass'  =>  'disabled',
                            'prevClass'     =>  'prev',
                            'nextClass'     =>  'next',
                            'wrapTag'       =>  'ul',
                            'wrapClass'     =>  'pagination'
                        )); ?>
                    </nav>
                </div>
            </div>
            <!-- 侧边栏 -->
            <?php $this->need('sidebar.php'); ?>
            </div>
        </div>
    </div>
<?php $this->need('footer.php'); ?>
