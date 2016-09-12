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

<!-- Modal callback -->
<div class="modal fade" id="callback" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="ajaxform" method="post">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="myModalLabel">Заказ обратного звонка</h4>
        </div>
        <div class="modal-body">
            <p>Оставьте Ваш номер телефона, и наш менеджер свяжется с Вами в близжайшее время.</p>
            <input class="modall-input" id="number" name="number" type="text" placeholder="Ваш номер телефона">
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn " value="Позвонить мне">
          <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal tender -->
<div class="modal fade" id="tender" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Пригласить нас на тендер</h4>
      </div>
      <div class="modal-body">
        <?php dynamic_sidebar('tender'); ?>
      </div>
    </div>
  </div>
</div>

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/app/js/libs.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/app/js/main.js"></script>
</body>
</html>