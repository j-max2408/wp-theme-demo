<?php get_header()?>




             <?php if(have_posts()) :  ?>

                <?php  while (have_posts()) : the_post(); {}?>
        
          
             <article class="flex post">
             <div class="quart">
          
            
             <?php if(has_post_thumbnail(  )) :?>

        <?php the_post_thumbnail('small', ['class' => 'fluide']);?>
       
        <?php endif; ?>
        </div>

           

             <div class="image-article quart">
            
             <h3><?php  the_title();?></h3>
                <p> <?php the_content();?></p>
                <p><?php  the_category(',')?></p>

          </div>


        </article>
        <?php endwhile; ?>

             <?php endif; ?>
</section>

<?php get_footer()?>
