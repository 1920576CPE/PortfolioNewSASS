<?php


/*

  Template Name: Skills

*/

?>

<?php get_header(); ?>

<section class="SkillHobby">
        <div class="container">
          <div class="SkillHobby__wrapper">
            <div class="SkillHobby__text">
              <h2><?php echo get_field('skill_title'); ?> <span class="red">.</span></h2>
              <p class = "mb--2"> <span class="red"><?php echo get_field('skill_subtitle_1'); ?></span> / <?php echo get_field('skill_subtitle_2'); ?> / <span class="orange"> <?php echo get_field('skill_subtitle_3'); ?></span> </p>
              <p class = "mb--4"><?php echo get_field('skill_content'); ?></p>
              <div>
                <ul class="SkillsHobby__icons d--flex">
                  <li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a></li>
                  <li><a href="https://www.youtube.com/"><i class="fa-brands fa-youtube "></i></a></li>
                  <li><a href="https://mail.google.com/mail/u/0/"><i class="fa-solid fa-envelope "></i></a></li>
                  
              </ul>
              </div>
            </div>
            <?php 
                    $img = get_field('skill_img');
                    if(!empty($img)) :
                    ?>
                    <img src="<?php echo esc_url($img['url']); ?>" alt = "<?php echo esc_attr($img['alt']); ?>">
                    <?php endif; ?>
            
          </div>
        </div>
</section>

<section class="Programming">
        <div class="container ">
          <h2 class="mb--4"> <span class="red">||</span> <?php echo get_field('skillsslider_title'); ?></h2>
          <div class="my-slider ">
            <div>
              <div class="skills2__cardwrapper">
                  <div class="skills2__card">
                  <?php 
                    $img = get_field('web_img');
                    if(!empty($img)) :
                    ?>
                    <img src="<?php echo esc_url($img['url']); ?>" alt = "<?php echo esc_attr($img['alt']); ?>">
                    <?php endif; ?>
                      <h2><?php echo get_field('web_title'); ?></h2>
                      <p><?php echo get_field('web_content'); ?></p>
                      <div class="skills2__button">
                          <a href="#">Read More</a>
                      </div>
                  
                  </div>
                  <div class="skills2__card">
                  <?php 
                    $img = get_field('web_design_img');
                    if(!empty($img)) :
                    ?>
                    <img src="<?php echo esc_url($img['url']); ?>" alt = "<?php echo esc_attr($img['alt']); ?>">
                    <?php endif; ?>
                      <h2><?php echo get_field('web_design_title'); ?></h2>
                      <p><?php echo get_field('web_design_content'); ?></p>
                      <div class="skills2__button">
                          <a href="#">Read More</a>
                      </div>
                  </div>
                  <div class="skills2__card">
                  <?php 
                    $img = get_field('machine_img');
                    if(!empty($img)) :
                    ?>
                    <img src="<?php echo esc_url($img['url']); ?>" alt = "<?php echo esc_attr($img['alt']); ?>">
                    <?php endif; ?>
                      <h2><?php echo get_field('machine_title'); ?></h2>
                      <p><?php echo get_field('machine_content'); ?></p>
                      <div class="skills2__button">
                          <a href="#">Read More</a>
                      </div>
                  </div>
              </div>
          </div>
          <div>
              <div class="skills2__cardwrapper">
                  <div class="skills2__card">
                  <?php 
                    $img = get_field('backend_img');
                    if(!empty($img)) :
                    ?>
                    <img src="<?php echo esc_url($img['url']); ?>" alt = "<?php echo esc_attr($img['alt']); ?>">
                    <?php endif; ?>
                      <h2><?php echo get_field('backend_title'); ?></h2>
                      <p><?php echo get_field('backend_content'); ?></p>
                      <div class="skills2__button">
                          <a href="#">Read More</a>
                      </div>
                  </div>
                  <div class="skills2__card">
                  <?php 
                    $img = get_field('computer_img');
                    if(!empty($img)) :
                    ?>
                    <img src="<?php echo esc_url($img['url']); ?>" alt = "<?php echo esc_attr($img['alt']); ?>">
                    <?php endif; ?>
                      <h2><?php echo get_field('computer_title'); ?></h2>
                      <p><?php echo get_field('computer_content'); ?></p>
                      <div class="skills2__button">
                          <a href="#">Read More</a>
                      </div>
                  </div>
                  <div class="skills2__card">
                  <?php 
                    $img = get_field('commu_img');
                    if(!empty($img)) :
                    ?>
                    <img src="<?php echo esc_url($img['url']); ?>" alt = "<?php echo esc_attr($img['alt']); ?>">
                    <?php endif; ?>
                      <h2><?php echo get_field('commu_title'); ?></h2>
                      <p><?php echo get_field('commu_content'); ?></p>
                      <div class="skills2__button">
                          <a href="#">Read More</a>
                      </div>
                  </div>
              </div>
          </div>

          <div>
              <div class="skills2__cardwrapper">
                  <div class="skills2__card">
                  <?php 
                    $img = get_field('cloud_img');
                    if(!empty($img)) :
                    ?>
                    <img src="<?php echo esc_url($img['url']); ?>" alt = "<?php echo esc_attr($img['alt']); ?>">
                    <?php endif; ?>
                      <h2><?php echo get_field('cloud_title'); ?></h2>
                      <p><?php echo get_field('cloud_content'); ?></p>
                      <div class="skills2__button">
                          <a href="#">Read More</a>
                      </div>
                  </div>
                  <div class="skills2__card">
                  <?php 
                    $img = get_field('tech_img');
                    if(!empty($img)) :
                    ?>
                    <img src="<?php echo esc_url($img['url']); ?>" alt = "<?php echo esc_attr($img['alt']); ?>">
                    <?php endif; ?>
                      <h2><?php echo get_field('tech_title'); ?></h2>
                      <p><?php echo get_field('tech_content'); ?></p>
                      <div class="skills2__button">
                          <a href="#">Read More</a>
                      </div>
                  </div>
                  <div class="skills2__card">
                  <?php 
                    $img = get_field('research_img');
                    if(!empty($img)) :
                    ?>
                    <img src="<?php echo esc_url($img['url']); ?>" alt = "<?php echo esc_attr($img['alt']); ?>">
                    <?php endif; ?>
                      <h2><?php echo get_field('research_title'); ?></h2>
                      <p><?php echo get_field('research_content'); ?></p>
                      <div class="skills2__button">
                          <a href="#">Read More</a>
                      </div>
                  </div>
              </div>
          </div>
  
            
          </div>
  
        </div>
</section>

<section class="ProgrammingSkills">
        <div class="container ">
          <h2 class="mb--4"> <span class="red">||</span> <?php echo get_field('prog_title'); ?></h2>
          

          <div class="ProgrammingSkills_wrapper align--center mb--3">
          <?php if(have_rows('programmingskills')) : while(the_repeater_field('programmingskills')): ?>
                <div class="ProgammingSkills__item text--center">
                <?php 
                    $img = get_sub_field('prog_img');
                    if(!empty($img)) :
                    ?>
                    <img src="<?php echo esc_url($img['url']); ?>" alt = "<?php echo esc_attr($img['alt']); ?>">
                    <?php endif; ?>
                    <h2><?php echo get_sub_field('prog_label'); ?></h2>
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

<section class="Hobby ">
        <div class="container">
          <div class="Hobby__box">
            <h2 class="mb--2"> <span class="red">||</span> <?php echo get_field('expertise_title'); ?></h2>
            <?php if(have_rows('expertise_repeater')) : while(the_repeater_field('expertise_repeater')): ?>
            <div class="Hobby1__wrapper mb--6">
              <div class="Hobby1__content">
                <h2 class="mb--3"> <span class="red"> <?php echo get_sub_field('experttitle1'); ?> </span> <?php echo get_sub_field('experttitle2'); ?> <span class="orange"><?php echo get_sub_field('experttitle3'); ?></span> </h2>
              <p><?php echo get_sub_field('expert_cont'); ?></p>
              </div>
              <div class="HobPic1">
              <?php 
                      $img = get_sub_field('expert_img');
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"></script>

    <script type="module">
    
      var slider = tns({
        container: '.my-slider',
        items: 1,
        slideBy: 'page',
        autoplay: false,
        controls: true,
        controlsText:['<i class="fa-solid fa-chevron-left"></i>','<i class="fa-solid fa-chevron-right"></i>'],
        navPosition: "bottom",
        responsive: {
        320: {
          edgePadding: 20,
          gutter: 20,
          items: 1
        },
        760: {
          gutter: 30,
          items: 1
        },
        900: {
          items: 1
        }
      }
      });
      </script>

  </body>
</html>




