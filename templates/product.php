<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/main.css" />
    <link rel="stylesheet" href="/css/product.css" />
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

    <title>Document</title>
  </head>
  <body>
    <?php
      require_once "header.html";
    ?> 

    <section class="p-[50px]">
    <div class=" relative">
        <div class="text-[100px] text-[#C0C0C0] absolute left-60 top-[-82px] xl:text-[80px] lg:top-[-75px] z-0 lg:left-0">Магазин</div>
    </div>
      <div class="container z-10">
        <div class="flex flex-row lg:flex-wrap gap-7 justify-center"  >
          <div class="flex border w-[320px] h-[420px] xl:justify-center lg:hidden">
            <div class="flex flex-col p-5 w-72  text-3xl text-gray-700 ">
              <details class="">
                <summary>Категории</summary>
                <p>Кофе</p>
                <p>Чай</p>
                <p>Десерты</p>
              </details>
              <hr>
              <details class="">
                <summary>Категории</summary>
                <p>Кофе</p>
                <p>Чай</p>
                <p>Десерты</p>
              </details>
              <hr>
             
            </div>  
          </div>
          <div class="">
            <div class="w-full flex justify-end ml-[-5rem] lg:justify-center lg:ml-0">
              <div class="text-sm flex items-center">Сортировка:</div>
              
              <select name="pets" id="pet-select">
                  <option value="">По умолчанию</option>
                  <option value="up_price">Сначала не дорогие</option>
                  <option value="bottom_price">Сначала дорогие</option>
                  <option value="up_abc">По алфавиту, А-Я</option>
                  <option value="bottom_abc">По алфавиту, Я-А</option>
              </select>
            </div>
            <div class="flex flex-wrap justify-center">

              <div id="coffee" class=" mx-4 h-[auto] product my-2" > 
                <a class="" href="" >
                  <div
                  class="mx-auto w-72  product-border ">
                    <img
                    class="h-[auto] w-full object-cover object-center rounded-t-[20px] p-1"
                    src="/resource/images/slides/coffe.jpg"
                    alt="Product Image"
                    />
                    <div class="h-[100px]  flex flex-col justify-center  text-center ">
                      <p class="text-2xl">Американо</p>
                      <p class="text-lg">200₽</p>
                    </div>
                  </div>
                </a>
                <div class="flex justify-center items-center w-[200px]  absolute top-[50%] left-[15%]">
                  <div class="product-content mx-auto ">
                    <div class="flex justify-center h-full items-center">
                      <div class="w-full ">
                        <button class="product-button text-white text-[14px] rounded-md " >В корзину</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div id="coffee" class=" mx-4 h-[auto] product my-2" > 
                <a class="" href="" >
                  <div
                  class="mx-auto w-72  product-border ">
                    <img
                    class="h-[auto] w-full object-cover object-center rounded-t-[20px] p-1"
                    src="/resource/images/slides/coffe.jpg"
                    alt="Product Image"
                    />
                    <div class="h-[100px]  flex flex-col justify-center  text-center ">
                      <p class="text-2xl">Американо</p>
                      <p class="text-lg">200₽</p>
                    </div>
                  </div>
                </a>
                <div class="flex justify-center items-center w-[200px]  absolute top-[50%] left-[15%]">
                  <div class="product-content mx-auto ">
                    <div class="flex justify-center h-full items-center">
                      <div class="w-full ">
                        <button class="product-button text-white text-[14px] rounded-md " >В корзину</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div id="coffee" class=" mx-4 h-[auto] product my-2" > 
                <a class="" href="" >
                  <div
                  class="mx-auto w-72  product-border ">
                    <img
                    class="h-[auto] w-full object-cover object-center rounded-t-[20px] p-1"
                    src="/resource/images/slides/coffe.jpg"
                    alt="Product Image"
                    />
                    <div class="h-[100px]  flex flex-col justify-center  text-center ">
                      <p class="text-2xl">Американо</p>
                      <p class="text-lg">200₽</p>
                    </div>
                  </div>
                </a>
                <div class="flex justify-center items-center w-[200px]  absolute top-[50%] left-[15%]">
                  <div class="product-content mx-auto ">
                    <div class="flex justify-center h-full items-center">
                      <div class="w-full ">
                        <button class="product-button text-white text-[14px] rounded-md " >В корзину</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div id="coffee" class=" mx-4 h-[auto] product my-2" > 
                <a class="" href="" >
                  <div
                  class="mx-auto w-72  product-border ">
                    <img
                    class="h-[auto] w-full object-cover object-center rounded-t-[20px] p-1"
                    src="/resource/images/slides/coffe.jpg"
                    alt="Product Image"
                    />
                    <div class="h-[100px]  flex flex-col justify-center  text-center ">
                      <p class="text-2xl">Американо</p>
                      <p class="text-lg">200₽</p>
                    </div>
                  </div>
                </a>
                <div class="flex justify-center items-center w-[200px]  absolute top-[50%] left-[15%]">
                  <div class="product-content mx-auto ">
                    <div class="flex justify-center h-full items-center">
                      <div class="w-full ">
                        <button class="product-button text-white text-[14px] rounded-md " >В корзину</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div id="coffee" class=" mx-4 h-[auto] product my-2" > 
                <a class="" href="" >
                  <div
                  class="mx-auto w-72  product-border ">
                    <img
                    class="h-[auto] w-full object-cover object-center rounded-t-[20px] p-1"
                    src="/resource/images/slides/coffe.jpg"
                    alt="Product Image"
                    />
                    <div class="h-[100px]  flex flex-col justify-center  text-center ">
                      <p class="text-2xl">Американо</p>
                      <p class="text-lg">200₽</p>
                    </div>
                  </div>
                </a>
                <div class="flex justify-center items-center w-[200px]  absolute top-[50%] left-[15%]">
                  <div class="product-content mx-auto ">
                    <div class="flex justify-center h-full items-center">
                      <div class="w-full ">
                        <button class="product-button text-white text-[14px] rounded-md " >В корзину</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="h-screen"></div>

      
    <?php
        require_once "footer.html";
      ?>
  </body>
</html>
