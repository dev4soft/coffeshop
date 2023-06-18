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
    <title>Заказ оформлен</title>
  </head>
  <body>

    <?php require_once "header.html"; ?> 

    <section class="py-[50px] h-[90vh]">
      <div class="container mx-auto ">
        <div class=" flex flex-wrap columns-2xs justify-center  ">
          <div class=" basis-1/2 relative shrink-0 ">
          <div class="text-[100px] text-[#C0C0C0] absolute left-10 top-[-72px] lg:text-[60px] z-0" >
                Заказ формлен!
              </div>
            <div  class="w-full   h-auto min-h-[400px] text-gray-700">
              <p class="p-[50px] text-3xl">

              </p>
            </div>
          </div>
          <div class="basis-1/3 ">
            <img src="/resource/images/about.jpg"   alt="">
          </div>
        </div>
      </div>
    </section>

    <?php require_once "footer.html"; ?>

  </body>
</html>
