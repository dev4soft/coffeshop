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
    <link rel="stylesheet" href="/css/contact.css">
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
  <?php require_once "header.html";?> 
    <section class="py-[50px]">
      <div class="container mx-auto ">
        <div class=" flex flex-wrap columns-2xs justify-center gap-10 min-w-[400px]">
          <div class=" basis-1/2 relative   shrink-0 min-w-[400px]">
          <div
                class="text-[100px] text-[#C0C0C0] absolute left-10 top-[-72px] lg:text-[60px] z-0"
              >
                Контакты
              </div>
            <form action="" class="w-full border h-full z-10">
              <div class=" w-full flex flex-wrap p-[50px] gap-5 lg:flex-col md:p-[25px]">
                <div class="w-full  min-w-[300px] relative ">
                  <input type="text" name="name" class="peer block w-full appearance-none border-1 border-b border-gray-500 bg-transparent py-2.5 px-0 text-xl text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder=" " />
                  <label class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-lg text-[#4b5563] duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Имя</label>
                </div>
                <div class="w-full  min-w-[300px] relative ">
                  <input type="email" name="name" class="peer block w-full appearance-none border-1 border-b border-gray-500 bg-transparent py-2.5 px-0 text-xl text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder=" " />
                  <label class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-lg text-[#4b5563] duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Email</label>
                </div>
                <div class="w-full  min-w-[300px] relative ">
                  <textarea name="" id=""  rows="5" class="peer block w-full appearance-none border-1 border-b border-gray-500 bg-transparent py-2.5 px-0 text-xl text-gray-900 focus:border-blue-600 focus:outline-none focus:ring-0" placeholder=" " "></textarea>
                  <label class="absolute top-3 -z-10 origin-[0] -translate-y-6 scale-75 transform text-lg text-[#4b5563] duration-300 peer-placeholder-shown:translate-y-0 peer-placeholder-shown:scale-100 peer-focus:left-0 peer-focus:-translate-y-6 peer-focus:scale-75 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">Имя</label>
                </div> 
                <button class="w-full mt-5 rounded-md bg-[#2f2f2f] px-10 py-2 text-white">Отправить</button>
              </div>
            </form>
                
          </div>
          <div class="basis-1/3 flex items-center">
            <div class="bg-hours">
              <div class="p-[20px] w-full h-full">
                <div class="p-[20px] border-[7px] border-white w-full h-full">
                  <div class="flex flex-col shrink-0 text-lg relative top-[10%] left-0 text-white">
                      <span class="text-center my-5 text-2xl">Время работы</span>
                      <span>Понедельник: 09:00 - 20:00</span>
                      <span>Вторник: 09:00 - 20:00</span>
                      <span>Среда: 09:00 - 20:00</span>
                      <span>Четверг: 09:00 - 20:00</span>
                      <span>Пятница: 09:00 - 22:00</span>
                      <span>Суббота: 09:00 - 19:00</span>
                      <span>Воскресенье: Выходной</span>
                      <span class="mt-[70px] text-base  ">Адрес: Комсомольский просп., 13Б,</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          
      </div>
    </section>

    <section class="pt-[100px] border"> 
      <div class="map" id="map"  onClick="style.pointerEvents='none'">
        <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1qL1uKI6baeB2zfVbf_AexNwh49y4cpE&ehbc=2E312F" width="100%" height="700" defer></iframe>
      </div>
    </section>
    <?php require_once "footer.html";?>
    
    <script src="/js/main.js"></script>
</html>
