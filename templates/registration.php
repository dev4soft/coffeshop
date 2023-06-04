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
    <link rel="stylesheet" href="/css/styleSwiper.css" />
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
  <?php require_once "header.html"; ?>
    <div id="app" class="relative flex h-[90vh] flex-col justify-center  " style="background: rgba(26, 26, 26, 0.904);">
      <div class="relative  mx-auto w-[400px]">
      <div class=" bg-white rounded-xl p-5">
        <!-- Container -->
        <div class="container">
          <div class="flex flex-col">
          <div class="py-4 text-center">
                    <span class="text-2xl font-light text-gray-600 ">Регистрация</span>
                </div>
            <div class="flex flex-row gap-4">
            <form method="post" action="registation">
              <input
                type="text"
                placeholder="Фамилия"
                v-model="last_name"
                autocomplete='off'
                class="border w-full h-5 px-3 py-5 my-2 hover:outline-none focus:outline-none focus:ring-gray-600 focus:ring-1 rounded-md"
              />
              <input
                type="text"
                placeholder="Имя"
                v-model="first_name"
                autocomplete='off'
                class="border w-full h-5 px-3 py-5 my-2 hover:outline-none focus:outline-none focus:ring-gray-600 focus:ring-1 rounded-md"
              />
            </div>
            <input
              type="text"
              placeholder="Email"
              v-model="email"
              autocomplete='off'
              class="border w-full h-5 px-3 py-5 my-2 hover:outline-none focus:outline-none focus:ring-gray-600 focus:ring-1 rounded-md"
            />
            <input
              type="password"
              placeholder="Пароль"
              v-model="pass1"
              autocomplete='off'
              class="border w-full h-5 px-3 py-5 my-2 hover:outline-none focus:outline-none focus:ring-gray-600 focus:ring-1 rounded-md"
            />
            <input
              type="password"
              placeholder="Пароль еще раз"
              v-model="pass2"
              autocomplete='off'
              class="border w-full h-5 px-3 py-5 my-2 hover:outline-none focus:outline-none focus:ring-gray-600 focus:ring-1 rounded-md"
            />
            <div class="w-full">
              <button
                v-on:click="create"
                style="background: rgba(26, 26, 26, 0.904)"
                class="mt-3 w-full text-white py-2 px-6 rounded-md hover:bg-yellow"
              >
                Создать
              </button>
            {{ message }}
            </form>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
    <?php require_once "footer.html"; ?>

<script src="/js/vue.min.js"></script>
<script src="/js/vue-resource.min.js"></script>

<script>
    Vue.use(VueResource);
    var app = new Vue({
        el: '#app',
        data: {
            first_name: '',
            last_name: '',
            email: '',
            pass1: '',
            pass2: '',
            message: '',
        },

        computed: {
        },

        watch: {
        },

        methods: {
            pass_valid: function () {
                return (this.pass1 !== '' && this.pass1 === this.pass2);
            },


            clear_form: function () {
                this.first_name = '';
                this.last_name = '';
                this.email = '';
                this.pass1 = '';
                this.pass2 = '';
            },


            save: function (data) {
                this.$http.post('/registration', data).then(
                    function (otvet) {
                        if (otvet.data.error == 1) {
                            this.message = otvet.data.message;
                        } else {
                            this.clear_form();
                            this.message = 'На указанный адрес отправлдено письмо, для активации аккаунта перейдите по ссылке в письме!';
                        }
                    },
                    function (errr) {
                        console.log(errr);
                    }
                );
            },

            create: function () {
                this.message = '';
                const data = new FormData;
                data.set('first_name', this.first_name);
                data.set('last_name', this.last_name);
                data.set('email', this.email);
                data.set('pass1', this.pass1);
                data.set('pass2', this.pass2);

                this.save(data);
            },
        },

        created: function() {
        }
    })
</script>
  </body>
</html>
