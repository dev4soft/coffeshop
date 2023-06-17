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
    <title>Корзина</title>
  </head>
  <body>
  <?php require_once "header.html";?> 
    <section class="py-[50px]  h-full" id="app">
      <div class="container  mx-auto py-[100px] lg:py-[50px]">
        <div class="flex flex-wrap columns-2xs justify-center gap-10">
          <div class="basis-1/2">
            <hr width="70" class="relative z-10" />
            <div class="w-full p-[50px] relative">
              <div
                class="text-[100px] text-[#C0C0C0] absolute left-10 top-[-72px] ] lg:text-[60px] z-0"
              >
                Корзина
              </div>
              <table class="w-[800px] text-center text-xl text-gray-600 xl:w-[600px] lg:w-[400px] lg:text-base">
                <tr class="text-gray-500 text-base h-[50px]">
                  <td class="w-[40%] text-start">Товар</td>
                  <td class="w-[10%]">Объем</td>
                  <td class="w-[25%]">Количество</td>
                  <td class="w-[25%]">Цена ₽</td>
                </tr>
                
                <template v-for="product in basket" v-key="product.product_id">
                    <tr class="border-t-2 h-[70px]">
                      <td class="text-start">{{ product.title_name }}</td>
                      <td>
                        <selecter
                            v-on:select="change_trait(product.product_order_id, $event)"
                            v-bind:product_id="product.product_id"
                        ></selecter>
                      </td>
                      <td>
                        <button
                          class="rounded-[50%] border w-[30px] mr-2 hover:bg-[#CD5C5C] hover:text-white lg:w-[25px]"
                          v-on:click="dec(product.product_id)"
                        >
                          -
                        </button>
                        {{ product.quantity }} 
                        <button
                          class="rounded-[50%] border w-[30px] ml-2 hover:bg-[#3CB371] hover:text-white lg:w-[25px]"
                          v-on:click="inc(product.product_id)"
                        >
                          +
                        </button>
                      </td>
                      <td>{{ product.cost }} ₽</td>
                    </tr>
                </template>

                <tfoot>
                  <tr class="border-t-2 h-[70px]">
                    <td></td>
                    <td></td>
                    <td class="">Итого:</td>
                    <td>{{ summa }} ₽</td>
                  </tr>
                </tfoot>
              </table>
            </div>

            <hr width="70" />
          </div>
          <div class="basis-1/3">
            <form action="" class="w-full border h-full">
              <div
                class="w-full flex flex-wrap p-[50px] gap-5 lg:flex-col md:p-[25px]"
              >
              <div class="text-[40px]  relative top-[-30px] text-[#C0C0C0] xl:text-[30px]">Заполните форму</div>
                <div class="w-full h-[70px] relative">
                  <input
                    type="text"
                    class="peer block w-full appearance-none border-b-2 border-gray-500 bg-transparent py-2.5 px-0 text-xl text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0"
                    placeholder=" "
                    v-bind:value="username"
                  />
                  <label
                    class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-lg text-[#4b5563] duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500"
                    >Ваше имя</label
                  >
                </div>
                <div class="w-full h-[70px] relative">
                  <input
                    type="text"
                    class="peer block w-full appearance-none border-b-2 border-gray-500 bg-transparent py-2.5 px-0 text-xl text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0"
                    placeholder=" "
                    v-bind:value="address"
                  />
                  <label
                    class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-lg text-[#4b5563] duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500"
                    >Адрес доставки</label
                  >
                </div>
                <div class="w-full h-[70px] relative">
                  <input
                    type="text"
                    class="peer block w-full appearance-none border-b-2 border-gray-500 bg-transparent py-2.5 px-0 text-xl text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0"
                    placeholder=" "
                    v-bind:value="phone"
                  />
                  <label
                    class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-lg text-[#4b5563] duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500"
                    >Телефон для связи</label
                  >
                </div>
                <div class="w-full h-[70px] relative">
                  <input
                    type="text"
                    class="peer block w-full appearance-none border-b-2 border-gray-500 bg-transparent py-2.5 px-0 text-xl text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0"
                    placeholder=" "
                    v-bind:value="comments"
                  />
                  <label
                    class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-lg text-[#4b5563] duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500"
                    >Комментарий к заказу</label
                  >
                </div>

                <button
                  class="w-full mt-5 rounded-md px-10 py-2 text-[40px] xl:text-[30px] sm:text-[25px] text-green-500"
                  v-on:click="save_bid"
                  type="button"
                >
                  Оформить заказ
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <?php require_once "footer.html";?>

<script src="/js/vue.min.js"></script>
<script src="/js/vue-resource.min.js"></script>

<script>
Vue.component('selecter', {
    props: ['product_id'],


    data: function () {
        return {
            selected_trait: this.product_id,
            traites: [],
        }
    },


    methods: {
        select: function () {
            this.$emit('select', this.selected_trait);
        },
    },


    computed: {
        init: function () {
            this.$http.get('/get_traites/' + this.product_id).then(
                function (otvet) {
                    this.traites = otvet.data;
                },
                function (errr) {
                    console.log(errr);
                }
            );
        },
    },


    template: `
        <select
            v-model="selected_trait"
            v-on:click="select()"
            class="text-center w-[100px]"
            v-bind:name="init"
        >
            <option v-for="row in traites" v-bind:value="row.product_id">{{row.name}}</option>
        </select>
    `
})
</script>
<script>
    Vue.use(VueResource);
    var app = new Vue({
        el: '#app',
        data: {
            basket: [],
            summa: 0,
            traites: '',
            username: '<?=$username?>',
            address: '',
            phone: '',
            comments: '',
        },


        methods: {
            change_trait: function (product_order_id, new_product_id) {
                const data = new FormData;
                data.set('product_order_id', product_order_id);
                data.set('new_product_id', new_product_id);

                this.$http.post('/change_trait', data).then(
                    function (otvet) {
                        if (otvet.data.error == 1) {
                            window.location.href = otvet.data.url;
                        } else {
                            this.summa_cart();
                            this.in_cart();
                        }
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
                            basket.innerHTML = otvet.data.sum_cart + ' р.';
                            this.summa = otvet.data.sum_cart;
                        } else {
                            basket.innerHTML ='0 р.';
                            this.summa = 0;
                        }
                    },
                    function (errr) {
                        console.log(errr);
                    }
                );
            },


            inc: function (product_id) {
                const data = new FormData;
                data.set('product_id', product_id);
                data.set('direct', '1');
                this.change_quantity(data);
            },


            dec: function (product_id) {
                const data = new FormData;
                data.set('product_id', product_id);
                data.set('direct', '-1');
                this.change_quantity(data);
            },


            change_quantity: function (data) {
                this.$http.post('/change_quantity', data).then(
                    function (otvet) {
                        if (otvet.data.error == 1) {
                            window.location.href = otvet.data.url;
                        } else {
                            this.summa_cart();
                            this.in_cart();
                        }
                    },
                    function (errr) {
                        console.log(errr);
                    }
                );
            },


            in_cart: function () {
                this.$http.get('/in_cart').then(
                    function (otvet) {
                        this.basket = otvet.data;
                    },
                    function (errr) {
                        console.log(errr);
                    }
                );
            },


            save_bid: function () {
                const data = new FormData;
                data.set('address', this.address);
                data.set('phone', this.phone);
                data.set('comments', this.comments);

                this.$http.post('/save_bid', data).then(
                    function (otvet) {
                        if (otvet.data.error == 0) {
                            window.location.href = otvet.data.url;
                        }
                    },
                    function (errr) {
                        console.log(errr);
                    }
                );
            },
        },

        created: function() {
            this.summa_cart();
            this.in_cart();
        }
    })
</script>
  </body>
</html>
