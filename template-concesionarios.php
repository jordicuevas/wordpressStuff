<?php
/* 
   Template Name: Concesionarios
          author: jordi cuevas
         twitter: @jordicuevas
           email: jordicuevas@gmail.com
         website: jordicuevas.website
*/
    get_header();
?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/jjva_categorias.css">
<div style="margin-top:30px;"></div>
<div class="container">

<?php
/**
 * Setup query to show the ‘LIVIANOS’ post type with all posts filtered by ‘home’ category.
 * Output is linked title with featured image and excerpt.
 */
   
    $args = array(  
        'post_type' => 'concesionario',
        'post_status' => 'publish',
        'posts_per_page' => -1, 
        //‘orderby’ => 'title', 
        'order' => 'DESC'
       
    );
     $loop = new WP_Query( $args ); 
?> 
<div><h3 class="jjva_h3" >CONCESIONARIOS</h3></div>
         <hr class="jjva_hr"> 
    <div class="row">

        <?php  while ( $loop->have_posts() ) : $loop->the_post(); ?>     
            <div class="col-md-4 " style="min-height:400px;height:400px; border:1px solid #EEEEEE">
                <!-- CABECERA -->
                <div class="row " style=" padding:20px;font-weight:bold;background-color:#f6f6f6; color:#00529c;">
                   <div class="col-md-9 col-sm-6 col-6">
                       <?php the_field( 'nombre_del_consecionario' ); ?>
                   </div> 
                   <div class="jjva_concesionario_icons col-md-1 col-sm-2 col-2" style="cursor:pointer">
                     <?php if ( get_field( 'venta' ) == 1 ) { 
                           ?>
                              <i data-toggle="tooltip" data-placement="top"  title="Venta" class="fas fa-male"></i>
                           <?php 
                     } else { 
                          // echo 'false'; 
                     } ?>
                    </div>
                    <div class="jjva_concesionario_icons col-md-1 col-sm-2 col-2" style="cursor:pointer">
                        <?php if ( get_field( 'servicio_tecnico_autorizado' ) == 1 ) { 
                        // echo 'true'; 
                        ?>
                        <i class="fas fa-tools" data-toggle="tooltip" data-placement="top" title="Servicio Técnico Autorizado"></i>
                        <?php
                         } else { 
                        // echo 'false'; 
                         } ?> 
                    </div>
                    <div class="jjva_concesionario_icons col-md-1 col-sm-2 col-2" style="cursor:pointer">
                    <?php if ( get_field( 'repuestos_maxus' ) == 1 ) { 
                        ?>
                        <i class="fas fa-cog" data-toggle="tooltip" data-placement="top" title="Repuestos Maxus"></i>
                        <?php
                       // echo 'true'; 
                        } else { 
                        // echo 'false'; 
                        } ?>
                  
                    </div>
                </div>
                <!-- CUERPO-->
                <div class="row ">
                <!-- TEXTO -->
                    <div class="col-md-6 col-6 col-sm-6" style="margin-top:15px;">
                        <span class="jjva_concesionario_localidad" style="font-size:13px; font-weight:bold">
                            <?php the_field( 'localidad' ); ?>
                        </span> <br>
                        <span class="jjva_concesionario_direccion" style="font-size:12px;">
                            <?php the_field( 'direccion' ); ?>  
                        </span> 
                        <span class="jjva_concesionario_localidad" style="font-size:13px; font-weight:bold">
                            Teléfonos
                        </span><br>
                        <span class="jjva_concesionario_direccion" style="font-size:12px;">
                            <?php the_field( 'telefonos' ); ?>
                        </span>           
                        <span class="jjva_concesionario_localidad" style="font-size:13px; font-weight:bold">
                            JEFE DE VENTAS
                        </span><br>
                        <span class="jjva_concesionario_direccion" style="font-size:12px;">
                            <?php the_field( 'nombre_jefe_de_ventas' ); ?>            
                        </span><br>
                        <span class="jjva_concesionario_direccion" style="font-size:12px;">
                            <?php the_field( 'email_jefe_de_ventas' ); ?>         
                        </span>
                    </div>
                <!-- MAPA -->
                   <div class="col-md-6 col-6 col-sm-6 p-0 m-0">
                        <?php 
                            $location = get_field('ubicacion');
                            if( !empty($location) ):
                        ?>
                        <div align="center" class="acf-map" style=" width: 100%;min-height:320px;">
                            <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
                        </div>
                        <?php endif; ?>
                   </div>
                </div>

            </div><!-- FIN COL-MD-4 -->
        <?php endwhile;?>
    </div><!-- FIN ROW -->
 </div><!-- FINALIZA CONTAINER -->
<?php
    wp_reset_postdata(); 
?>
    
<div style="margin-bottom:130px;"></div>

<?php get_footer(); ?>
