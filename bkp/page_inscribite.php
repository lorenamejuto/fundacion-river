<?php
/* Template Name: Inscribite */
//wp_head();
include_once ("header-inscribite.php");
?>

    <section class="fondo-formulario">
        <span class="btn-wp">
            <a href="https://wa.me/541136295655" ><img src="<?php echo get_template_directory_uri() ?>/images/wp-flotante.svg" alt="whatsapp"><img class="desktop-view" src="<?php echo get_template_directory_uri() ?>/images/wp-flotante-texto.png" alt="whatsapp"></a>
        </span>
        <h1>Inscripción</h1>
        <div class="formulario">
            <!--span class="marcador-pagina">
                <h1>Paso 1</h1>
            </span-->
            <div class="contenedor-links"> 
                <!--span>
                    <a href="#" class="links bg-rojo-link">Guardar cambios</a>
                </span>
                <span>
                    <a href="<?php echo get_bloginfo('url') ?>/inscribite" class="links bg-gris-link">VOLVER AL INICIO</a>
                </span-->
            </div>
            <!--span class="marcador-form">
                <img src="<?php echo get_template_directory_uri() ?>/images/circulo-rojo.svg" alt="marcador">
                <hr class="bg-gris">
                <img src="<?php echo get_template_directory_uri() ?>/images/circulo-gris.svg" alt="marcador">
                <hr class="bg-gris">
                <img src="<?php echo get_template_directory_uri() ?>/images/circulo-gris.svg" alt="marcador">
                <hr class="bg-gris">
                <img src="<?php echo get_template_directory_uri() ?>/images/circulo-gris.svg" alt="marcador">
            </span-->


<main id="site-content" role="main">
    
    

	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
		}
	}

	?>

</main><!-- #site-content -->

        </div>
        <footer>
            <div class="contenedor">
                <img src="<?php echo get_template_directory_uri() ?>/images/logo-footer.png" alt="Fundación River Plate">
                <span class="redes-footer">
                    <a href="<?php echo get_bloginfo('url') ?>/bases-y-condiciones/"><h3>bases y condiciones</h3></a>
                <a href="<?php echo get_bloginfo('url') ?>/#preg-frec"><h3>Preguntas frecuentes</h3></a>
                    <span>
                        <a href="https://instagram.com/fundacionriver" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="https://www.facebook.com/fundacionriver/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </span>
                </span>
            </div>
        </footer>
    </section>
    
<?php wp_footer() ?>