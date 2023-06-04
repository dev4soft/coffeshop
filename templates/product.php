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
    <div id="app">
    <?php
      require_once "header.html";
    ?> 

    <section class="p-[50px]">
    
      <div class="container z-10">
        <div class="flex flex-row lg:flex-wrap gap-7 justify-center"  >
          <div class="flex h-[420px] w-[400px]  xl:justify-center lg:hidden items-center mr-[20px]">
            <div class="flex flex-col p-5  items-center  text-3xl text-gray-700 fixed  ">
                <template v-for="cat in category">
                    <a class="product_category" v-bind:href="cat.link">{{ cat.name }}</a>
                </template>
            </div>  
          </div>
          <div class="flex flex-col">
            <div class="flex flex-wrap justify-center">
              <section id="coffee">
                <div class="text-[100px] mt-[-50px]  text-[#C0C0C0] ml-[-100px] lg:ml-0">Кофе</div>    
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
                </div>        
              </section>

              <section id="tea" class="mt-[100px]" >
              <div class="text-[100px] mt-[-50px] text-[#C0C0C0] ml-[-100px] lg:ml-0">Чай</div>
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
                </div>
              </section>

              <section id="desert" class="mt-[100px]" >
                <div class="text-[100px] mt-[-50px] text-[#C0C0C0] ml-[-100px] lg:ml-0">Десерты</div>
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
                </div>
              </section>
            </div>
          </div>


      

        </div>
      </div>
    </section>

    


    <div class="h-screen"></div>

      
    <?php
        require_once "footer.html";
    ?>
    </div>

<script src="/js/vue.min.js"></script>
<script src="/js/vue-resource.min.js"></script>

<script>
    Vue.use(VueResource);
    var app = new Vue({
        el: '#app',
        data: {
            category: [
                {link: '#coffee', name: 'Кофе'},
                {link: '#tea', name: 'Чай'},
                {link: '#desert', name: 'Десерты'}
            ],
            coffee: [],
            tea: [],
            deserts: [],
        },

        computed: {
        },

        watch: {
        },

        methods: {
            load_category: function () {
                this.$http.get('/get_category').then(
                    function (otvet) {
                    },
                    function (errr) {
                        console.log(errr);
                    }
                );
            },
        },

        created: function() {
            load_category();
        }
    })
</script>
  </body>
</html>
