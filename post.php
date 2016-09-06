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
                            <span class="article-tag"><?php $this->category(','); ?></span>
                            <span>
                            <i class="glyphicon glyphicon-user"></i>
                            <a class="article-author" itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a>
                            </span>
                            <span class="article-date">
                            <i class="glyphicon glyphicon-time"></i>
                            <?php $this->date('Y-m-d'); ?></span>
                        </div>
                        <div class="article-content clearfix">
                            <?php $this->content(); ?>
                        </div>
                    </div>
                    <?php if($this->allow('ping')): ?>
                        <div class="copyright">
                            <div role="alert" class="alert">本文由 <a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a> 创作，采用 <a rel="external nofollow" href="http://creativecommons.org/licenses/by/3.0/cn" target="_blank">知识共享署名 3.0</a> 中国大陆许可协议 进行许可。 <br>可自由转载、引用，但需署名作者且注明文章出处。</div>
                        </div>
                    <?php endif; ?>
                </div>
                <?php $this->need('comments.php'); ?>
            </div>
            <!-- 侧边栏 -->
            <?php $this->need('sidebar.php'); ?>
        </div>
    </div>
</div>
<?php $this->need('footer.php'); ?>
