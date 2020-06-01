<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
    <div class="themeGreen-footer">
        <div class="container">
            © <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
            <?php _e('All Rights Reserved. 版权所有.'); ?>

            <script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1257015934'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s95.cnzz.com/z_stat.php%3Fid%3D1257015934%26show%3Dpic' type='text/javascript'%3E%3C/script%3E"));</script>
            <!--   百度统计 start -->
            <script type="text/javascript">
                var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
                document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3Ffb82a04cc28d2e2a378835c0caecfa3e' type='text/javascript'%3E%3C/script%3E"));
            </script>
            <script>
                var _hmt = _hmt || [];
                (function() {
                    var hm = document.createElement("script");
                    hm.src = "//hm.baidu.com/hm.js?005464a7fb2b9c59f55bad8bbd58d0ee";
                    var s = document.getElementsByTagName("script")[0];
                    s.parentNode.insertBefore(hm, s);
                })();
            </script>
            <!-- 百度统计 end -->
        </div>

    </div>
    <div class="themeGreen-back">
        <a class="back-to-top" href="#" id="btn-back-to-top">
            <i class="glyphicon glyphicon-chevron-up"></i>
        </a>
    </div>



    <!-- js -->
    <script src = "<?php $this->options->themeUrl('js/jquery2.14.min.js'); ?>"></script>
    <script src = "<?php $this->options->themeUrl('js/bootstrap.min.js'); ?>"></script>
    <script src = "<?php $this->options->themeUrl('js/jquery.color.js'); ?>"></script>
    <script src = "<?php $this->options->themeUrl('js/themeGreen.js'); ?>"></script>
    <!-- 多说公共JS代码 start (一个网页只需插入一次) -->
    <script type="text/javascript">
        var duoshuoQuery = {short_name:"hongweipeng"};
        (function() {
            var ds = document.createElement('script');
            ds.type = 'text/javascript';ds.async = true;
            ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
            ds.charset = 'UTF-8';
            (document.getElementsByTagName('head')[0]
            || document.getElementsByTagName('body')[0]).appendChild(ds);
        })();
    </script>
    <!-- 多说公共JS代码 end -->

    <?php $this->footer(); ?>
    </body>
</html>