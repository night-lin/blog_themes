<div class="col-md-3 hidden-xs" role ="sider">
    <div class="search-area">
        <form class="search-form" role="search" action="./" method="post">
            <div class="input-group">
                <input type="text" class="form-control" name="s" placeholder="输入搜索条件">
                <span class="input-group-btn">
                    <button type="submit" class="btn btn-search">站内搜索</button>
                </span>
            </div>

        </form>
    </div>
    <div class="panel-list">

        <div class="panel panel-latest-article panel-commen">
            <div class="panel-heading">

                <!-- <i class="glyphicon glyphicon-bookmark"> </i> -->
                <span class="panel-title">最新文章</span>

            </div>
            <div class="panel-body">
                <ul class="panel-ul  latest-article-list">
                    <?php $this->widget('Widget_Contents_Post_Recent')
                        ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
                </ul>
            </div>
        </div>


        <div class="panel panel-latest-comment panel-commen">
            <div class="panel-heading">
                <!-- <i class="glyphicon glyphicon-bookmark"> </i> -->
                <span class="panel-title">最近回复</span>

            </div>
            <div class="panel-body">
                <ul class="panel-ul  latest-comment-list ds-recent-comments" data-num-items="6" data-show-avatars="0" data-show-time="0" data-show-title="0" data-show-admin="1" data-excerpt-length="70"></ul>
            </div>
        </div>


        <div class="panel panel-tags panel-commen">
            <div class="panel-heading">
                <!-- <i class="glyphicon glyphicon-bookmark"> </i> -->
                <span class="panel-title">标签分类</span>

            </div>
            <div class="panel-body">
                <div class="panel-ul tags-list">
                    <?php $this->widget('Widget_Metas_Category_List')->parse('<a href="{permalink}" class="tag">{name}</a>'); ?>
                </div>
            </div>
        </div>


        <?php if(class_exists('Links_Plugin') && isset($this->options->plugins['activated']['Links'])): ?>
        <div class="panel panel-connect panel-commen">
            <div class="panel-heading">
                <!-- <i class="glyphicon glyphicon-bookmark"> </i> -->
                <span class="panel-title">友情链接</span>

            </div>
            <div class="panel-body">
                <ul class="panel-ul  connect-list">
                    <?php Links_Plugin::output('<li><a href="{url}" target="_blank"><i class="glyphicon glyphicon-link"></i> {name}</a></li>', 10, NULL, true); ?>
                </ul>
            </div>
        </div>
        <?php endif; ?>
        <script type="text/javascript">
            document.write('<a style="display:none!important" id="tanx-a-mm_117570917_17204454_63488759"></a>');
            tanx_s = document.createElement("script");
            tanx_s.type = "text/javascript";
            tanx_s.charset = "gbk";
            tanx_s.id = "tanx-s-mm_117570917_17204454_63488759";
            tanx_s.async = true;
            tanx_s.src = "//p.tanx.com/ex?i=mm_117570917_17204454_63488759";
            tanx_h = document.getElementsByTagName("head")[0];
            if(tanx_h)tanx_h.insertBefore(tanx_s,tanx_h.firstChild);
        </script>



        <div class="panel panel-latest-article panel-commen">
            <div class="panel-heading">
                <!-- <i class="glyphicon glyphicon-bookmark"> </i> -->
                <span class="panel-title">归档</span>
            </div>
            <div class="panel-body">
                <ul class="panel-ul  latest-article-list">
                    <?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=Y 年 m 月')
                        ->parse('<li></li><a href="{permalink}" class="item">{date}</a></li>'); ?>
                </ul>
            </div>
        </div>


    </div>


</div>
