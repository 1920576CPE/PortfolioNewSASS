<?php


/*

  Template Name: Home

*/

?>

<?php get_header(); ?>

<section class="banner">
      <div class="container">
        <div class="banner__wrapper">

          <div class="banner__content">
            <h2 class = "mb--2"> <?php echo get_field('banner__title'); ?> <span>.</span></h2>
            <p class = "mb--2"><?php echo get_field('banner__subtitle'); ?> <span>/</span> <?php echo get_field('banner__subtitle_2'); ?> <span>/</span> <?php echo get_field('banner__subtitle_3'); ?></p>
            <p class = "text--justify mb--2"><?php echo get_field('banner_content'); ?> </p>
            
            <a class="btn bg--primary" href="#">Explore More</a>
          </div>
          <div class="banner__picture align--center">
          <?php 
                    $img = get_field('banner_img');
                    if(!empty($img)) :
                    ?>
                    <img src="<?php echo esc_url($img['url']); ?>" alt = "<?php echo esc_attr($img['alt']); ?>">
                    <?php endif; ?>
          </div>
          
        </div>
</section>

<section class="achievement">
      <div class="container">
        <h2 class="mb--2"><span class="red">||</span> Achievements</h2>
        <div class="achievement__content  align--center ">
          <div class="achievements">
          <?php 
                    $img = get_field('achievement_1');
                    if(!empty($img)) :
                    ?>
                    <img src="<?php echo esc_url($img['url']); ?>" alt = "<?php echo esc_attr($img['alt']); ?>">
                    <?php endif; ?>
            
          </div>
          <div class="achievements">
          <?php 
                    $img = get_field('achievement_2');
                    if(!empty($img)) :
                    ?>
                    <img src="<?php echo esc_url($img['url']); ?>" alt = "<?php echo esc_attr($img['alt']); ?>">
                    <?php endif; ?>
            
          </div>
          <div class="achievements">
          <?php 
                    $img = get_field('achievement_3');
                    if(!empty($img)) :
                    ?>
                    <img src="<?php echo esc_url($img['url']); ?>" alt = "<?php echo esc_attr($img['alt']); ?>">
                    <?php endif; ?>
           
          </div>
          <div class="achievements">
          <?php 
                    $img = get_field('achievement_4');
                    if(!empty($img)) :
                    ?>
                    <img src="<?php echo esc_url($img['url']); ?>" alt = "<?php echo esc_attr($img['alt']); ?>">
                    <?php endif; ?>
           
          </div>
        </div>


      </div>
    </section>
  
    <section class="affiliations">
      <div class="container">

        <div class="affiliations__wrapper  align--center">
          <div class="affiliations__content">
            <h2 class=" mb--2"> <span>||</span> <?php echo get_field('affiliation_title'); ?></h2>
  
            <h4 class="mb--1"><?php echo get_field('affiliation_subtitle_1'); ?></h4>
  
            <p class = "mb--2"><?php echo get_field('affliation_content_1'); ?></p>
  
            <h4 class="mb--1"><?php echo get_field('affiliation_subtitle_2'); ?></h4>
  
            <p class = "mb--4"><?php echo get_field('affiliation_content_2'); ?></p>
            
          </div>
          <?php 
                    $img = get_field('affliation_img');
                    if(!empty($img)) :
                    ?>
                    <img src="<?php echo esc_url($img['url']); ?>" alt = "<?php echo esc_attr($img['alt']); ?>">
                    <?php endif; ?>
        </div>
        
      </div>
    </section>

    <section class="contact ">
      <div class="container">
        <div class="contact__content  text--center">
          <h2 class="mb--1"><?php echo get_field('contact_text'); ?></h2>
          <p class="mb--1"><?php echo get_field('contact_subtext'); ?></p>
          <a class="btn bg--primary" href="#"><?php echo get_field('contactbutton_text'); ?></a>
        </div>
      </div>
    </section>




<?php get_footer(); ?>