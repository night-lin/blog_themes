<?php $this->need('header.php'); ?>

<div class="themeGreen-content">
    <div class="container">
        <div class="row">
            <div class="col-md-9" role = "main">
                <div class="article-list">
                    <!-- 文章块 -->
                        <div class="article-post">
                            <h1><?php $this->title() ?></h1>
                            <div class="article-info">
                                <span>
                                    <i class="glyphicon glyphicon-user"></i>
                                    <a class="article-author" itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a>

                                </span>
                                <span class="article-date"><i class="glyphicon glyphicon-time"></i> <?php $this->date('Y-m-d'); ?></span>
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
