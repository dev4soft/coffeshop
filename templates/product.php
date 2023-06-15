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
    <link type="image/png" sizes="16x16" rel="icon" href="/resource/images/favicon.png">
    <title>Каталог</title>
  </head>
  <body>
    <div id="app">
    <?php require_once "header.html"; ?> 

    <section class="p-[50px]">
      <div class="container z-10">
        <div class="flex flex-row lg:flex-wrap gap-7 justify-center"  >
          <div class="flex h-[420px] w-[400px]  xl:justify-center lg:hidden items-center mr-[20px]">
            <div class="flex flex-col p-5  items-center  text-3xl text-gray-700 fixed  ">
                <template v-for="cat in category">
                    <a class="product_category" v-bind:href="cat.link">{{ cat.category_name }}</a>
                </template>
            </div>
          </div>
          <div class="flex flex-col">
            <div class="flex flex-wrap justify-center">

              <section id="coffee">
                <div class="text-[100px] mt-[-50px]  text-[#C0C0C0] ml-[-100px] lg:ml-0">Кофе</div>
                <div class="flex flex-wrap justify-center">

                    <template v-for="el in coffee" v-key="el.product_id">
                        <div id="coffee" class=" mx-4 h-[auto] product my-2" > 
                            <a class="" href="" >
                                <div class="mx-auto w-72  product-border ">
                                    <img
                                        class="h-[auto] w-full object-cover object-center rounded-t-[20px] p-1"
                                        v-bind:src="el.image"
                                        alt="Product Image"
                                    />
                                    <div class="h-[100px]  flex flex-col justify-center  text-center ">
                                        <p class="text-2xl">{{ el.title_name }}</p>
                                        <p class="text-lg">{{ el.cost }} р.</p>
                                    </div>
                                </div>
                            </a>
                            <div class="flex justify-center items-center w-[200px]  absolute top-[50%] left-[15%]">
                                <div class="product-content mx-auto ">
                                    <div class="flex justify-center h-full items-center">
                                        <div class="w-full ">
                                            <button
                                                v-on:click="add_cart(el.product_id)"
                                                class="product-button text-white text-[14px] rounded-md " >
                                                В корзину
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
              </section>

              <section id="tea">
                <div class="text-[100px] mt-[-50px]  text-[#C0C0C0] ml-[-100px] lg:ml-0">Чай</div>
                <div class="flex flex-wrap justify-center">

                    <template v-for="el in tea" v-key="el.product_id">
                        <div id="coffee" class=" mx-4 h-[auto] product my-2" > 
                            <a class="" href="" >
                                <div class="mx-auto w-72  product-border ">
                                    <img
                                        class="h-[auto] w-full object-cover object-center rounded-t-[20px] p-1"
                                        v-bind:src="el.image"
                                        alt="Product Image"
                                    />
                                    <div class="h-[100px]  flex flex-col justify-center  text-center ">
                                        <p class="text-2xl">{{ el.title_name }}</p>
                                        <p class="text-lg">{{ el.cost }} р.</p>
                                    </div>
                                </div>
                            </a>
                            <div class="flex justify-center items-center w-[200px]  absolute top-[50%] left-[15%]">
                                <div class="product-content mx-auto ">
                                    <div class="flex justify-center h-full items-center">
                                        <div class="w-full ">
                                            <button
                                                v-on:click="add_cart(el.product_id)"
                                                class="product-button text-white text-[14px] rounded-md " >
                                                В корзину
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
              </section>

              <section id="desert">
                <div class="text-[100px] mt-[-50px]  text-[#C0C0C0] ml-[-100px] lg:ml-0">Десерты</div>
                <div class="flex flex-wrap justify-center">

                    <template v-for="el in deserts" v-key="el.product_id">
                        <div id="coffee" class=" mx-4 h-[auto] product my-2" > 
                            <a class="" href="" >
                                <div class="mx-auto w-72  product-border ">
                                    <img
                                        class="h-[auto] w-full object-cover object-center rounded-t-[20px] p-1"
                                        v-bind:src="el.image"
                                        alt="Product Image"
                                    />
                                    <div class="h-[100px]  flex flex-col justify-center  text-center ">
                                        <p class="text-2xl">{{ el.title_name }}</p>
                                        <p class="text-lg">{{ el.cost }} р.</p>
                                    </div>
                                </div>
                            </a>
                            <div class="flex justify-center items-center w-[200px]  absolute top-[50%] left-[15%]">
                                <div class="product-content mx-auto ">
                                    <div class="flex justify-center h-full items-center">
                                        <div class="w-full ">
                                            <button
                                                v-on:click="add_cart(el.product_id)"
                                                class="product-button text-white text-[14px] rounded-md " >
                                                В корзину
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
              </section>

            </div>
          </div>
        </div>
      </div>
    </section>


    <?php require_once "footer.html"; ?>
    </div>

<script src="/js/vue.min.js"></script>
<script src="/js/vue-resource.min.js"></script>

<script>
    Vue.use(VueResource);
    var app = new Vue({
        el: '#app',
        data: {
            category: [],
            coffee: [],
            tea: [],
            deserts: [],
            products: [],
        },

        computed: {
        },

        watch: {
        },

        methods: {


            split_products: function () {
                this.coffee = [];
                this.tea = [];
                this.deserts = [];

                for (let i = 0; i < this.products.length; i++) {

                    if (this.products[i].category_id == 1) {
                        this.coffee.push(this.products[i]);
                        continue;
                    }

                    if (this.products[i].category_id == 2) {
                        this.tea.push(this.products[i]);
                        continue;
                    }

                    this.deserts.push(this.products[i]);
                }
            },    


            load_category: function () {
                this.$http.get('/get_category').then(
                    function (otvet) {
                        this.category = otvet.data;
                        // после получения списка категорий, формируем список товаров
                        // на данный момнт не получилось програмно формировать содержимое категорий
                        // формируем вручную
                        
                        this.load_products();
                    },
                    function (errr) {
                        console.log(errr);
                    }
                );
            },


            load_products: function () {
                this.$http.get('/get_products').then(
                    function (otvet) {
                        this.products = otvet.data;
                        this.split_products();
                    },
                    function (errr) {
                        console.log(errr);
                    }
                );
            },


            summa_cart: function () {
                this.$http.get('/summa_cart').then(
                    function (otvet) {
                        const basket = document.getElementById('basket');
                        const sum = new Number(otvet.data.sum_cart);

                        if (sum) {
                            basket.innerHTML = sum + ' р.';
                        } else {
                            basket.innerHTML ='0 р.';
                        }
                    },
                    function (errr) {
                        console.log(errr);
                    }
                );
            },


            add_cart: function (product_id) {
                const data = new FormData;
                data.set('product_id', product_id);
                this.$http.post('/add_cart', data).then(
                    function (otvet) {
                        if (otvet.data.error == 1) {
                            window.location.href = otvet.data.url;
                        } else {
                            this.summa_cart();
                        }
                    },
                    function (errr) {
                        console.log(errr);
                    }
                );
            },
        },

        created: function() {
            this.load_category();
            this.summa_cart();
        }
    })
</script>
  </body>
</html>
