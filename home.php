<?php
/*
	Template Name: Home
*/
 get_header(); ?>

 <div class="part-1" style="    background: linear-gradient(30deg, rgba(0, 36, 83, 0.3), rgba(48,105,125,1) 50%,  rgba(255, 43, 74, 0.1))">

     <div class="top">

       <div>

         <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/pl.png" alt="" width="" height="" />
       </div>
       <div>
         <img src="" alt="">
       </div>
     </div>
     <div>
       <div>
         <hr style="height: 3px; color: rgb(152, 180, 190); background-color: rgb(152, 180, 190); width: 570px; border: none;">
         <h1>Paul Lapkin</h1>
         <hr style="height: 3px; color: rgb(152, 180, 190); background-color: rgb(152, 180, 190); width: 570px; border: none;">
         <p><?php the_field('textarea'); ?></p>


       </div>
     </div>
     <div id="primary">
    	<div id="content" role="main">

    		<?php while ( have_posts() ) : the_post(); ?>
          <p><?php the_content(); ?></p>
    			<h1><?php the_field('custom_title'); ?></h1>

    			<img src="<?php the_field('hero_image'); ?>" />




    		<?php endwhile; // end of the loop. ?>

    	</div><!-- #content -->
    </div><!-- #primary -->
   </div>
   <div class="part-2">
     <div>

       <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/award.png" alt="" width="" height="" />
     </div>
     <div>
       <div>
         <h2><?php the_field('titre'); ?></h2>
         <p><?php the_field('text1_part_2'); ?></p>
         <p><?php the_field('text2_part_2'); ?></p>
         <p><?php the_field('text3_part_2'); ?></p>
         <button class="hire">Hire Me!</button>
       </div>
     </div>
   </div>
   <div class="part-3">
     <div>
       <h2><?php the_field('titre_part_3'); ?></h2>
       <p><?php the_field('text1_part_3'); ?></p>
     </div>
     <div>
       <div class="box">
         <?php

          $image = get_field('box_1');

          if( !empty($image) ): ?>

          	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

          <?php endif; ?>
       </div>
       <div class="box">
         <?php

          $image = get_field('box_2');

          if( !empty($image) ): ?>

          	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

          <?php endif; ?>
       </div>
       <div class="box">
         <?php

          $image = get_field('box_3');

          if( !empty($image) ): ?>

          	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

          <?php endif; ?>
       </div>
       <div class="box">
         <?php

          $image = get_field('box_4');

          if( !empty($image) ): ?>

          	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

          <?php endif; ?>
       </div>
     </div>
   </div>
   <div class="part-4">
     <div class="box-exp">
       <h3><?php the_field('titre1_part_4'); ?></h3>
       <p class="section-title"><?php the_field('titre3_part_4'); ?></p>
       <p class="section-sub"><?php the_field('section-sub-1'); ?></p>
       <p><?php the_field('content-1'); ?></p>
       <hr>
       <p class="section-title"><?php the_field('titre5_part_4'); ?></p>
       <p class="section-sub"><?php the_field('section-sub-2'); ?></p>
       <p><?php the_field('content-2'); ?></p>
     </div>
     <div class="box-exp-2">
       <h3><?php the_field('titre2_part_4'); ?></h3>
       <p class="section-title"><?php the_field('titre4_part_4'); ?></p>
       <p class="section-sub"><?php the_field('section-sub-3'); ?></p>
       <p><?php the_field('content-3'); ?></p>
       <hr>
       <p class="section-title"><?php the_field('titre6_part_4'); ?></p>
       <p class="section-sub"><?php the_field('section-sub-4'); ?></p>
       <p><?php the_field('content-4'); ?></p>
           <p></p>
     </div>
   </div>
   <div class="part-5">
     <div>
       <h2><?php the_field('titre_part_5'); ?></h2>
       <p><?php the_field('content-1'); ?></p>
     </div>
     <div>
       <div class="box">
         <?php

          $image = get_field('box_img_1');

          if( !empty($image) ): ?>

          	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

          <?php endif; ?>
       </div>
       <div class="box">
         <?php

          $image = get_field('box_img_2');

          if( !empty($image) ): ?>

          	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

          <?php endif; ?>
       </div>
       <div class="box">
         <?php

          $image = get_field('box_img_3');

          if( !empty($image) ): ?>

          	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

          <?php endif; ?>
       </div>
       <div class="box">
         <?php

          $image = get_field('box_img_4');

          if( !empty($image) ): ?>

          	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

          <?php endif; ?>
       </div>
     </div>
     <div>
       <div class="box-2">
         <?php

          $image = get_field('box_img_5');

          if( !empty($image) ): ?>

          	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

          <?php endif; ?>
       </div>
       <div class="box">
         <?php

          $image = get_field('box_img_6');

          if( !empty($image) ): ?>

          	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

          <?php endif; ?>
       </div>
       <div class="box">
         <?php

          $image = get_field('box_img_7');

          if( !empty($image) ): ?>

          	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

          <?php endif; ?>
       </div>
     </div>
   </div>
   <div class="part-6">
     <div>
       <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/guillemet.png" alt="" width="" height="" /><br />

       <p><?php the_field('quote'); ?></p>
       <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/signature.png" alt="" width="" height="" />

       <p class="signature"><?php the_field('sign'); ?></p>
       <p class="sub-sign"><?php the_field('job'); ?></p>
     </div>
   </div>
   <div class="part-7">
     <div>
       <h3><?php the_field('titre_1'); ?></h3>

       <input type="text" placeholder="Name*">
       <input type="text" placeholder="Email*">
       <input type="text" placeholder="Subject*">
       <textarea name="name" rows="8" cols="80" placeholder="Message*"></textarea>

       <div>
         <button class="hire">Hire Me!</button>
       </div>

     </div>
     <div>
       <div>
         <h3><?php the_field('titre_2'); ?></h3>
         <p><?php the_field('adress'); ?></p>
       </div>
       <div>
         <h3><?php the_field('titre_3'); ?></h3>
         <p><?php the_field('phone_1'); ?></p>
         <p><?php the_field('phone_2'); ?></p>
       </div>
       <div>
         <h3><?php the_field('titre_4'); ?></h3>
         <p><?php the_field('mail'); ?></p>
         <p><?php the_field('web'); ?></p>
       </div>
     </div>
   </div>




<?php get_footer(); ?>
