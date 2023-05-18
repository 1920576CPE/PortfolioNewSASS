<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
    <title>Document</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  </head>
  <body>
   
    <header class="header bg--dark "> 

      <div class="container">

        <div class="header__wrapper d--flex justify--between align--center ">
          <div class="header__logo">
            <img src="./img/Logo.png" alt="">
          </div>
          
          <nav class="nav">

            <ul class="d--flex">
                <?php wp_menu_li(); ?>
            </ul>

          </nav>


        </div>




      </div>
    </header>