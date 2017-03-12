<?php global $wp; $current_url = home_url(add_query_arg(array(),$wp->request)); ?>
    <footer class="footer" style="">
        <div class="container">
            <h6>Share</h6>
            <div class="social">
                <a href="#" class="share-fb"><i class="fa fa-facebook fa-2x "></i></a>
                <a class="share-twitter" href="https://twitter.com/intent/tweet?url=<?php echo rawurlencode($current_url); ?>&text=Check This&via=AAAcounting" ><i class="fa fa-twitter fa-2x "></i></a>
                <a class="share-google" href="https://plus.google.com/share?url=<?php echo rawurlencode($current_url); ?>"><i class="fa fa-google-plus-square fa-2x"></i></a>
                <a class="share-linkedin" href="https://www.linkedin.com/cws/share?url=<?php echo rawurlencode($current_url); ?>"><i class="fa fa-linkedin fa-2x"></i></a>
            </div>
            <h6>&copy; 2017 Anthia Accounting by Taptip</h6>
        </div>
        
        <script>
        $(document).ready(function () {
            $(".share-fb").click(function() {
                FB.ui({
                    method: 'share',
                    href: '<?php echo esc_url( $current_url );?>',
                }, function(response){});
            });
            $(".share-twitter").click(function() {
                window.open(this.href, '', 'menubar=no, toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');
                return false;
            });
            $(".share-google").click(function() {
                window.open(this.href, '', 'menubar=no, toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');
                return false;
            });
            $(".share-linkedin").click(function() {
                window.open(this.href, '', 'menubar=no, toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');
                return false;
            });
        });
</script>
    </footer>
    <?php wp_footer(); ?> 
</body>

</html>