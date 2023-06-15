<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="/css/main.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Bruno+Ace+SC&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap"
      rel="stylesheet"
    />
    <link type="image/png" sizes="16x16" rel="icon" href="/resource/images/favicon.png">
    <title>Document</title>
  </head>
  <body>
    <?php require_once "header.html"; ?> 

    <section class="py-[50px] h-[90vh]">
      <div class="container mx-auto ">
        <div class=" flex flex-wrap columns-2xs justify-center  ">
          <div class=" basis-1/2 relative shrink-0 ">
          <div
                class="text-[100px] text-[#C0C0C0] absolute left-10 top-[-72px] lg:text-[60px] z-0"
              >
                О нас 
              </div>
            <div  class="w-full   h-auto min-h-[400px] text-gray-700">
              <p class="p-[50px] text-3xl">
              Кофейня "Время для кофе" работает на рынке 2 года. В результате
              работы достигнуты определенные успехи в изготовлении кофе элитных
              сортов при соблюдении современных методов технологии обжарки
              зеленого кофе. Мы используем только высококачественное сырье из
              различных регионов мира. Все сорта имеют неповторимый, уникальный
              для каждого сорта аромат и вкус.
              </p>
            </div>
                
          </div>
          <div class="basis-1/3 ">
            <img src="/resource/images/about.jpg"   alt="">
          </div>
        </div>
          
      </div>
    </section>
    <!-- <section id="service" class="h-screen pt-[100px]">
      <div class="container h-full">
        <div class="w-full relative">
          <div
            class="text-[100px] text-[#C0C0C0] absolute left-10 top-[-72px] lg:text-[60px] z-0"
          >
            О нас
          </div>
          <div class="flex p-[50px] justify-center items-center">
            <div class="basis-1/2 text-xl">
              Компания Время для кофе работает на рынке 2 года. В результате
              работы достигнуты определенные успехи в изготовлении кофе элитных
              сортов при соблюдении современных методов технологии обжарки
              зеленого кофе. Мы используем только высококачественное сырье из
              различных регионов мира. Все сорта имеют неповторимый, уникальный
              для каждого сорта аромат и вкус.
            </div>
          </div>
        </div>
      </div>
    </section> -->
    
    <?php
        require_once "footer.html";
      ?>
  </body>
</html>
