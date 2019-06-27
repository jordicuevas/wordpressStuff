<?php
/* 
   Template Name: Modelos 
          author: jordi cuevas
         twitter: @jordicuevas
           email: jordicuevas@gmail.com
         website: jordicuevas.website
*/
    get_header();
?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/jjva_categorias.css">
<!-- CARGAMOS EL MENU DE CATEGORIAS-->
<div class="jjva_menu"><?php ubermenu( 'main' , array( 'menu' => 3 ) ); ?></div>
<!-- CARGAMOS LA BARRA DE VEHICULOS-->
<div style="padding-top:40px;" class="jjva_icon_bar"><?php       include(  get_template_directory() . '/jjva_icons_bar.php' ); ?></div>
<div id="container" class="container" >
	  <div class="jjva_top_space"></div>
    <?php 
      /**
       *  INCLUIMOS LA CATEGORIA LIVIANOS
       */
      include(  get_template_directory() . '/jjva_categoria_livianos.php' );
      /**
       *  INCLUIMOS LA CATEGORIA MEDIANOS
       */
      include(  get_template_directory() . '/jjva_categoria_medianos.php' );
       /**
       *  INCLUIMOS LA CATEGORIA CARGO
       */
      include(  get_template_directory() . '/jjva_categoria_cargo.php' );
      /**
       *  INCLUIMOS LA CATEGORIA CARGO
       */
      include(  get_template_directory() . '/jjva_categoria_tolva.php' );
      /**
       *  INCLUIMOS LA CATEGORIA TRACTO
       */
      include(  get_template_directory() . '/jjva_categoria_tracto.php' );
    ?>			
	</div> <!-- END ROW -->		 
</div> <!-- END CONTAINER -->
<?php get_footer(); ?>
