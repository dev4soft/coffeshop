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
    <section class=" h-screen" id="app">
      <div class="container mx-auto py-[100px] lg:py-[50px]">
        <div class="flex flex-wrap columns-2xs justify-center gap-10">
            <div class="w-full p-[30px] relative" style="text-align: center">
              <div
                class="text-[100px] text-[#C0C0C0] absolute left-10 top-[-72px] ] lg:text-[60px] z-0"
              >
                Мои заказы
              </div>
              <table
                class="w-[800px] text-center mt-[20px] text-xl text-gray-600 xl:w-[600px] lg:w-[400px] lg:text-base"
                style="margin: auto 0"
              >
                <tr class="text-gray-500 text-base h-[50px]">
                  <td class="w-[20%] text-start">Дата и время заказа</td>
                  <td class="w-[15%]">Номер заказа</td>
                  <td class="w-[40%]">Товары</td>
                  <td class="w-[20%]">Итого</td>
                </tr>

                <tr  v-for="order in orders" v-key="order.order_id"
                     class="border-t-2 border-b-2 text-sm h-[70px]">
                  <td class="text-start">{{order.dt}}</td>
                  <td> №{{ order.order_id }} </td>
                  <td class="h-auto">
                    <items v-bind:order_id="order.order_id"></items>
                  </td>
                  <td>{{order.summa}} р.</td>
                </tr>

              </table>
            </div>
          </div>      
          </div>     
      </div>
    </section>
    <?php require_once "footer.html"; ?>

<script src="/js/vue.min.js"></script>
<script src="/js/vue-resource.min.js"></script>

<script>
Vue.component('items', {
    props: ['order_id'],


    data: function () {
        return {
            goods: [],
        }
    },


    computed: {
        init: function () {
            this.$http.get('/order_items/' + this.order_id).then(
                function (otvet) {
                    this.goods = otvet.data;
                },
                function (errr) {
                    console.log(errr);
                }
            );
        },
    },


    template: `
        <ul v-bind:name="init">
            <li v-for="row in goods">
                {{ row.title_name }} {{ row.trait_name }} {{ row.quantity }} x {{ row.cost }} р.
            </li>
        </ul>
    `
})
</script>

<script>
    Vue.use(VueResource);
    var app = new Vue({
        el: '#app',
        data: {
            orders: [],
        },


        methods: {
            list_orders: function () {
                this.$http.get('/list_orders').then(
                    function (otvet) {
                        if (otvet.data.error == 1) {
                            window.location.href = otvet.data.url;
                        } else {
                            this.orders = otvet.data;
                        }
                    },
                    function (errr) {
                        console.log(errr);
                    }
                );
            },
        },

        created: function() {
            this.list_orders();
        }
    })
</script>
  </body>
</html>
