<?php


/*

  Template Name: Contacts

*/

?>

<?php get_header(); ?>

<section class="MainContact bg--dark">
        <div class="container">
            <div class="MainContact__wrapper d--flex ">
                <div class="MainContact__content">
                    <h2 class="mb--2"><?php echo get_field('contact_title'); ?></h2>
                    <p class="mb--2"><?php echo get_field('contact_cont'); ?></p>
                    <ul>
                        <li class="mb--1"><i class="fa-solid fa-phone-flip mr--3"></i><?php echo get_field('number'); ?></li>
                        <li class="mb--1"><i class="fa-solid fa-envelope mr--3"></i></i><?php echo get_field('email'); ?></li>
                        <li class="mb--1"><i class="fa-solid fa-location-dot mr--3"></i><?php echo get_field('location'); ?></li>
                    </ul>
                    <ul class=" MainContact__icons d--flex mt--2">
                        <li><i class="fa-brands fa-facebook  "></i></li>
                        <li><i class="fa-brands fa-youtube "></i></li>
                        <li><i class="fa-solid fa-envelope " ></i></li>
                    </ul>
                </div>
                <div class=" MainContact__Input d--flex">
                    <input type="text" placeholder="Name">
                    <input type="text" placeholder="Email">
                    <textarea class="message" type="text" placeholder="Your Message"></textarea>
                    <div class="d--flex justify--end">
                        <a class="btn bg--primary" href="#">Send Message</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>