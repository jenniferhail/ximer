</main>
<footer class="footer">
    <div class="wrapper">
        <a class="logo" href="/" target="_self" aria-label="Ximer Home">Ximer</a>
        <nav class="footer-nav">
            <ul class="footer-menu one">
                <?php
                    $args = array(
                        'theme_location' => 'footer-menu-left',
                        'menu' => 'footer-menu-left',
                        'container' => 'false',
                        'items_wrap' => '%3$s'
                    );
                ?>
                <?php wp_nav_menu($args); ?>
            </ul>
            <ul class="footer-menu two">
                <?php
                    $args = array(
                        'theme_location' => 'footer-menu-right',
                        'menu' => 'footer-menu-right',
                        'container' => 'false',
                        'items_wrap' => '%3$s'
                    );
                ?>
                <?php wp_nav_menu($args); ?>
            </ul>
        </nav>
        <div class="copyright">©<?php echo date("Y"); ?> Rainbow Design Services</div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
