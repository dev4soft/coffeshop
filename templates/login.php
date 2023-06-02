<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/styleSwiper.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bruno+Ace+SC&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap" rel="stylesheet">
    <title>Авторизация</title>
</head>

<body >
    <?php
    require_once "header.html";
    ?>
    <div class="relative flex h-[90vh]  flex-col justify-center  py-6 sm:py-12" style="background: rgba(26, 26, 26, 0.904);">
        <div class="relative sm:w-96 mx-auto bg-white rounded-xl  ">
                
                <div class="pt-6 text-center">
                    <span class="text-2xl font-light text-gray-600 ">Авторизация</span>
                </div>

                <div class="px-8 py-[50px] w-[400px] h-[300px]  ">
                <form method="post" action="/login">
                    <input 
                    type="text" 
                    placeholder="Email" 
                    name="email"
                    autocomplete='off'
                    class="border w-full h-5 px-3 py-5 my-2 hover:outline-none focus:outline-none focus:ring-gray-600 focus:ring-1 rounded-md"
                    >
                    <input 
                    type="password" 
                    name="pass"
                    placeholder="Password" 
                    autocomplete='off'
                    class="border w-full h-5 px-3 py-5 my-2 hover:outline-none focus:outline-none focus:ring-gray-600 focus:ring-1 rounded-md">
                    <div class="w-full">
                        <button type="submit" style="background: rgba(26, 26, 26, 0.904);" class="mt-3 w-full text-white py-2 px-6 rounded-md hover:bg-yellow">Войти</button>
                    </div>
                    <a href="/registration" class="text-sm hover:underline">Создать аккаунт</a>
                </form>
                </div>
            
        </div>
    </div>
    <?php
    require_once "footer.html";
    ?>
    <script src="/js/main.js"></script>
</body>

</html>
