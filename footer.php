    <footer>
        <div class="contenedor">
            <img src="<?php echo get_template_directory_uri() ?>/images/logo-footer.png" alt="Fundación River Plate">
            <span class="redes-footer">
                <a href="<?php echo get_bloginfo('url') ?>/bases-y-condiciones/"><h3>bases y condiciones</h3></a>
                <a href="<?php echo get_bloginfo('url') ?>/#preg-frec"><h3>Preguntas frecuentes</h3></a>
                <span>
                    <a href="https://instagram.com/fundacionriver" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="https://facebook.com/fundacionriver/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                </span>
            </span>
        </div>
    </footer>
    <script src="<?php echo get_template_directory_uri() ?>/js/aos.js"></script>
    <script>
        AOS.init({
          disable: 'mobile'
        });
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity=" sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"crossorigin="anonymous"></script>
    <script src="<?php echo get_template_directory_uri() ?>/script.js"></script>

    <?php wp_footer(); ?>

	</body>
</html>