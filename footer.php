</div>
<div class="footer">
    <section class="sc-7">
        <div class="container">
            <div class="row">
                <div class="col-md-6 align-left">                    
                    <h3>Меню</h3>
                </div>
                <div class="col-md-6 align-right">
                    <h3>Контакты</h3>
                </div>
            </div>
            <div class="row flex">
                <div class="col-md-4 align-left">
                    <?php wp_nav_menu( array( 'theme_location' => 'footer-menu') ); ?>
                </div>
                <div class="col-md-4 align-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/app/img/Logo2.svg" alt="">
                </div>
                <div class="col-md-4 align-right">
                    <ul>
                        <li>Some text</li>
                        <li>Some text</li>
                        <li>Some text</li>
                        <li>Some text</li>
                        <li>Some text</li>
                        <li>Some text</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>Copyright &copy; 2016</p>
                </div>
                <div class="col-md-6 align-right">
                    <p>Создание сайта <a href="//mediaone.in.ua" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/app/img/maps.svg" alt=""></a></p>
                </div>
            </div>
        </div>
</div>
</footer>

<div id="toTop"> &uarr; Наверх </div>
</div>
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/app/js/libs.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/app/js/main.js"></script>
</body>
</html>