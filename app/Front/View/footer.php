        </section>
    </div>

    <?php self::inc('parts/navbar-bottom'); ?>

    <script src="bower_components/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/common.js" type="text/javascript"></script>

    <?php if(defined('GOOGLE_ANALYTICS')): ?>
        <script type="text/javascript">
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            ga('create', '<?php echo GOOGLE_ANALYTICS; ?>', '<?php echo $_SERVER['HTTP_HOST']; ?>');
            ga('send', 'pageview');
        </script>
    <?php endif; ?>

</body>
</html>