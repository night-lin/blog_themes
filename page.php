<?php $this->need('header.php'); ?>

<div class="themeGreen-content">
    <div class="container">
        <div class="row">
            <div class="col-md-9" role = "main">
                <div class="article-list">
                    <!-- 文章块 -->
                        <div class="article">
                            <a href="<?php $this->permalink() ?>"><h3><?php $this->title() ?></h3></a>
                            <div class="article-info">
                                <span class="article-tag"><?php $this->category(','); ?></span>
                                <i class="glyphicon glyphicon-user"></i>
                                <a class="article-author" itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a>
                                <i class="glyphicon glyphicon-time"></i>
                                <span class="article-date"><?php $this->date('Y-m-d'); ?></span>
                            </div>
                            <div class="article-content clearfix">
                                <?php $this->content(); ?>
                            </div>
                        </div>
                </div>
                <?php $this->need('comments.php'); ?>
            </div>
            <!-- 侧边栏 -->
            <?php $this->need('sidebar.php'); ?>
        </div>
    </div>
</div>
<?php $this->need('footer.php'); ?>
