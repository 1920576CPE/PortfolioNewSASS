<?php


/*

  Template Name: Projects

*/

?>

<?php get_header(); ?>

<section class="Projects">
        <div class="container">
            <div class="Projects__title text--center">
                <h1><span class="red"><?php echo get_field('project_title1'); ?></span> <?php echo get_field('project_title2'); ?> <span class="red">.</span></h1>
                <?php if(have_rows('ojt_projects')) : while(the_repeater_field('ojt_projects')): ?>
                <div class="Projects__subtitle">
                    <h2 class="text--left ml--4"><?php echo get_sub_field('ojt_title'); ?></h2>
                </div>
                <div class="Projects__wrapper">
                        <div class="Projects__cards"> 
                        <?php 
                                $img = get_sub_field('ojt_img_1');
                                if(!empty($img)) :
                                ?>
                                <img src="<?php echo esc_url($img['url']); ?>" alt = "<?php echo esc_attr($img['alt']); ?>">
                                <?php endif; ?>
                        <?php 
                                $img = get_sub_field('ojt_img_2');
                                if(!empty($img)) :
                                ?>
                                <img src="<?php echo esc_url($img['url']); ?>" alt = "<?php echo esc_attr($img['alt']); ?>">
                                <?php endif; ?>
                            
                        </div>
                        <div>
                            <div class="Projects__content bg--gray2 mb--3">
                                <h3><?php echo get_sub_field('ojt_content_title'); ?></h3>
                                <p><?php echo get_sub_field('ojt_content'); ?></p>
                            </div>
                            <?php 
                                $img = get_sub_field('ojt_img_3');
                                if(!empty($img)) :
                                ?>
                                <img src="<?php echo esc_url($img['url']); ?>" alt = "<?php echo esc_attr($img['alt']); ?>">
                                <?php endif; ?>
                        </div>

                </div>
                <?php
                    endwhile;
                     else:
                            echo "There is no content!";
                     endif;
                     wp_reset_postdata();
                ?>
                <?php if(have_rows('school_projects')) : while(the_repeater_field('school_projects')): ?>
                    <div class="Projects__subtitle">
                        <h2 class="text--left ml--4"><?php echo get_sub_field('school_title'); ?></h2>
                    </div>
                    <div class="Projects__wrapper">
                        <div class="Projects__cards"> 
                        <?php 
                                $img = get_sub_field('sch_img_1');
                                if(!empty($img)) :
                                ?>
                                <img src="<?php echo esc_url($img['url']); ?>" alt = "<?php echo esc_attr($img['alt']); ?>">
                                <?php endif; ?>
                        <?php 
                                $img = get_sub_field('sch_img_2');
                                if(!empty($img)) :
                                ?>
                                <img src="<?php echo esc_url($img['url']); ?>" alt = "<?php echo esc_attr($img['alt']); ?>">
                                <?php endif; ?>
                        </div>
                        <div>
                        <?php 
                                $img = get_sub_field('sch_img_3');
                                if(!empty($img)) :
                                ?>
                                <img src="<?php echo esc_url($img['url']); ?>" alt = "<?php echo esc_attr($img['alt']); ?>">
                                <?php endif; ?>
                            <div class="Projects__content bg--gray2 mb--3">
                                <h3><?php echo get_sub_field('sch_cont_title'); ?></h3>
                                <p><?php echo get_sub_field('sch_cont'); ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                    endwhile;
                     else:
                            echo "There is no content!";
                     endif;
                     wp_reset_postdata();
                ?>
                <?php if(have_rows('personal_projects')) : while(the_repeater_field('personal_projects')): ?>
                    <div class="Projects__subtitle">
                        <h2 class="text--left ml--4"><?php echo get_sub_field('per_title'); ?></h2>
                    </div>
                    <div class="Projects__wrapper">
                        <div>
                            <?php 
                                $img = get_sub_field('per_proj_img');
                                if(!empty($img)) :
                                ?>
                                <img src="<?php echo esc_url($img['url']); ?>" alt = "<?php echo esc_attr($img['alt']); ?>">
                                <?php endif; ?>
                            <div class="Projects__content bg--gray2 mb--3">
                                <h3><?php echo get_sub_field('per_proj_cont_title'); ?></h3>
                                <p><?php echo get_sub_field('per_proj_cont'); ?></p>
                            </div>
                        </div>
                        <div class="Projects__cards"> 
                            <?php 
                                $img = get_sub_field('per_proj_img_2');
                                if(!empty($img)) :
                                ?>
                                <img src="<?php echo esc_url($img['url']); ?>" alt = "<?php echo esc_attr($img['alt']); ?>">
                                <?php endif; ?>
                            <?php 
                                $img = get_sub_field('per_proj_img_3');
                                if(!empty($img)) :
                                ?>
                                <img src="<?php echo esc_url($img['url']); ?>" alt = "<?php echo esc_attr($img['alt']); ?>">
                                <?php endif; ?>
                        </div>
                    </div>
                <?php
                    endwhile;
                     else:
                            echo "There is no content!";
                     endif;
                     wp_reset_postdata();
                ?>
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

