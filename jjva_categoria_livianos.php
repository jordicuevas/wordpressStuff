<?php
/**
 * Setup query to show the ‘LIVIANOS’ post type with all posts filtered by ‘home’ category.
 * Output is linked title with featured image and excerpt.
 */
   
    $args = array(  
        'post_type' => 'livianos',
        'post_status' => 'publish',
        'posts_per_page' => -1, 
        //‘orderby’ => 'title', 
        ‘order’ => 'DESC'
       
    );

    $loop = new WP_Query( $args ); 
        ?>
        <div><h3 class="jjva_h3" >LIVIANOS</h3></div>
         <hr class="jjva_hr"> 
    <div class="row">
       
        <?php
          while ( $loop->have_posts() ) : $loop->the_post(); 
          $imagen = get_field( 'imagen' ); 
          
     ?>     
        <div class="col-md-4">
            <div class="jjva_contenedor" >
                <div class="jjva_contenedor_imagen">
                    <?php if ( $imagen ) { ?>
                      <img style=""  src="<?php echo $imagen['url']; ?>" alt="<?php echo $imagen['alt']; ?>" />
                    <?php } ?> 
                </div>  
                <br>
             <div style="line-height:90%">  
                <div  class="jjva_model">
                    <?php the_field( 'modelo' ); ?>  
                </div>  <br>      
                <div class="jjva_version">
                     <i><?php the_field( 'version' ); ?></i>
                </div> 
            </div>  
            <hr style="border: 1pz solid #000 dashed">
            <div style="line-height:90%">
                <div class="jjva_precio_lista"  >
                    <?php the_field( 'precio_lista' ); ?>
                </div>
                <br>
                <div class="jjva_precio_total">
                   <?php the_field( 'precio_total' ); ?>
                </div>
            </div>   
            <hr class="jjva_hr">

            </div> <!-- fin jjva_contenedor -->     
            
            <br>
        </div>
            <?php 
    endwhile;
?>
</div>
<?php
    wp_reset_postdata(); 
?>
	