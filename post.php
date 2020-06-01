<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?><?php $this->need('header.php'); ?>

<div class="themeGreen-content">
    <div class="container">
        <div class="row">
            <div class="col-md-9" role = "main">
                <div class="article-list">
                    <!-- 文章块 -->
                    <div class="article-post">
                        <h1 class="article-title-h"><?php $this->title() ?></h1>
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
                        <?php if($this->allow('ping')): ?>
                            <div class="copyright">
                                <div class="article-license">
                                    <img height="24" src="https://sf-static.b0.upaiyun.com/v-57d7cc42/global/img/creativecommons-cc.png" class="mb5"><br>
                                    <div class="license-item text-muted">
                                        本文由 <a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a> 创作，采用 <a class="alert-link" target="_blank" href="http://creativecommons.org/licenses/by/3.0/cn">知识共享署名 3.0</a>，可自由转载、引用，但需署名作者且注明文章出处。
                                    </div>

                                </div>
                            </div>
                        <?php endif; ?>
                        <?php if(class_exists('Reward_Plugin') && isset($this->options->plugins['activated']['Reward'])): ?>
                            <?php Reward_Plugin::show_reward(); ?>
                            <?php Reward_Plugin::show_modal(); ?>
                        <?php endif; ?>
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
