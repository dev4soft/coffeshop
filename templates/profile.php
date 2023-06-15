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
    <title>Профиль</title>
  </head>
  <body>
    <?php require_once "header.html"; ?> 
    <section class=" h-screen">
      <div class="container mx-auto py-[100px] lg:py-[50px]">
        <div class="flex flex-wrap columns-2xs justify-center gap-10">
            <div class="w-full p-[25px] relative">
              <div
                class="text-[100px] text-[#C0C0C0] absolute left-10 top-[-72px] ] lg:text-[60px] z-0"
              >
                Мои заказы
              </div>
              <table
                class="w-[800px] text-center mt-[20px] text-xl text-gray-600 xl:w-[600px] lg:w-[400px] lg:text-base"
              >
                <tr class="text-gray-500 text-base h-[50px]">
                  <td class="w-[25%] text-start">Дата и время заказа</td>
                  <td class="w-[15%]">Номер заказа</td>
                  <td class="w-[25%]">Товары</td>
                  <td class="w-[25%]">Итого ₽</td>
                  <td class="w-[5%]"></td>
                </tr>
                <tr class="border-t-2 border-b-2 text-sm h-[70px]">
                  <td class="text-start">28 мая, 15:05</td>
                  <td> №205 </td>
                  <td class="h-auto">
                    <ul>
                      <li>Латте 0,2л 2x 400 ₽,</li>
                      <li>Капучино 0,4л 1x 300 ₽</li>  
                    </ul>
                  </td>
                  <td>270 ₽</td>
                  <td><button
                    class="text-red-500  ml-2 "
                  >
                    Удалить
                  </button></td>
                </tr>
                <tr class="border-t-2 border-b-2 text-sm h-[70px]">
                  <td class="text-start">28 мая, 15:05</td>
                  <td> №206 </td>
                  <td class="h-auto">
                    <ul>
                      <li>Латте 0,2л 2x 400 ₽,</li>
                      <li>Капучино 0,4л 1x 300 ₽</li>  
                    </ul>
                  </td>
                  <td>270 ₽</td>
                  <td><button
                    class="text-red-500  ml-2 "
                  >
                    Удалить
                  </button></td>
                </tr>                      
              </table>
            </div>
          </div>      
          </div>     
      </div>
    </section>
    <?php
        require_once "footer.html";
      ?>
  </body>
</html>
