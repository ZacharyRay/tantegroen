</div>
<footer class="footer">
<!-- Content start -->
    <div class="footer-nav">
    <!-- Menu start -->
    <div class="footer-nav__nav">
        <?php 
            wp_nav_menu(array(
                'theme_location' => 'footer_menu'
            ));
        ?>
    </div>
    <div class="footer_nav__content">
        <p>ÅBNINGSTIDER</p>
    </div>
    <div class="footer_nav__content">
        <p>SOCIAL MEDIA</p>
    </div>
     <!-- Menu end -->
    </div>
<!-- Content end -->
</footer>
<?php wp_footer(); ?>
</body>
</html>