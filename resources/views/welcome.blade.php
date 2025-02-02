<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>welcome</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <!-- <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style> -->
            <!-- body {
                font-family: 'Nunito', sans-serif;
            } -->
        <!-- </style> -->
        <link rel="stylesheet" href="{{asset('css/welcome.css')}}">
    </head>

    <body class="antialiased">
        <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif        
          
        </div> -->
         <!-- ---------------------------------------------------------- -->
         <header class="main-container">
            <div class="header-container">
                <div>
                    <p class="header-text">м. Львів, вул.Городоцька,174, ДЦ"Вулик", оф.406</p>
                    <p class="phone-number">
                        <a class="anchor" href="">(067)37-37-447</a>
                        <a class="anchor" href="">(032)24-71-447</a>
                    </p>
                </div>
                <div>
                    <a class="anchor" href="">Home</a>
                    <a class="anchor" href="">Posts</a>
                    <a class="anchor" href="">Categoriers</a>
                </div>
              
            </div>
            <div class="main-piture">
            </div>
        </header>
        <main class="main-container">            
             <h1 class="header">Доступні тури</h1>
         <div class="tour-variants">
             @foreach ($tours as $tour)
             <div class="tour-cart">           
                 <img src="{{$tour->img}}" alt="Tour Paris" class="tour-image">
                 <div class="tour-details">
                    <p class="tour-title">{{$tour->name}}</p>
                    <p class="tour-description">{{$tour->short_description}} </p>
                    <p class="tour-price">{{$tour->price}} грн/доба</p>                
                 </div>
            </div>
             @endforeach

            <!-- <div class="tour-cart">           
                 <img src="https://img.freepik.com/free-photo/eiffel-tower-in-paris-with-gorgeous-colors-in-autumn_268835-828.jpg?size=626&ext=jpg&ga=GA1.1.1826414947.1699488000&semt=ais" alt="Tour Paris" class="tour-image">
                 <div class="tour-details">
                    <p class="tour-title">Париж</p>
                    <p class="tour-description">Подорож до Парижу — це захоплива пригода у столиці Франції. </p>
                    <p class="tour-price">2000 грн/доба</p>                
                 </div>
            </div>
            <div class="tour-cart">
                 <img src="https://cdn.pixabay.com/photo/2015/03/09/18/34/beach-666122_640.jpg" alt="Tour Maldives" class="tour-image">
                 <div class="tour-details">
                    <p class="tour-title">Мальдіви</p>
                    <p class="tour-description">Кришталево чиста вода, білосніжний пісок і бунгало </p>
                    <p class="tour-price">3500 грн/доба</p>
                
                 </div>
            </div>
            <div class="tour-cart">
                 <img src="https://cdn.pixabay.com/photo/2019/10/06/08/57/tiber-river-4529605_640.jpg" alt="Tour Rome" class="tour-image">
                 <div class="tour-details">
                    <p class="tour-title">Рим</p>
                    <p class="tour-description">Серце Італії, де зливаються старовинні руїни та сучасні тренди</p>
                    <p class="tour-price">1950 грн/доба</p>
                
                 </div>
            </div>
            <div class="tour-cart">
                 <img src="https://cdn.pixabay.com/photo/2013/10/28/18/51/brandenburger-tor-201939_1280.jpg" alt="Tour Berlin" class="tour-image">
                 <div class="tour-details">
                    <p class="tour-title">Берлін</p>
                    <p class="tour-description">Культурна столиця Німеччини, що поєднує історію та сучасність</p>
                    <p class="tour-price">1500 грн/доба</p>
                
                 </div>
            </div>
            <div class="tour-cart">
                 <img src="https://cdn.pixabay.com/photo/2019/06/18/21/44/ramses-ii-4283321_640.jpg" alt="Tour Egypt" class="tour-image">
                 <div class="tour-details">
                    <p class="tour-title">Eгипет</p>
                    <p class="tour-description">Розташований на березі Середземного та Червоного морів</p>
                    <p class="tour-price">1900 грн/доба</p>
                
                 </div>
            </div>
            <div class="tour-cart">
                 <img src="https://cdn.pixabay.com/photo/2012/02/19/16/10/calcium-pools-14979_640.jpg" alt="Tour Türkiye" class="tour-image">
                 <div class="tour-details">
                    <p class="tour-title">Туреччина</p>
                    <p class="tour-description">Сонячні та розкішні прибережні райони, для всіх смаків</p>
                    <p class="tour-price">1600 грн/доба</p>
                
                 </div>
            </div>
            <div class="tour-cart">
                 <img src="https://cdn.pixabay.com/photo/2017/07/04/13/57/tunisia-2471197_640.jpg" alt="Tour Tunisia" class="tour-image">
                 <div class="tour-details">
                    <p class="tour-title">Туніс</p>
                    <p class="tour-description">країна, що розташована на березі Середземного моря з чудовою природою</p>
                    <p class="tour-price">2600 грн/доба</p>
                
                 </div>
            </div> -->

         </div>         
         
         <div class="form_tour">
       
     
                <h2 class="header">Замовлення туру</h2>
                <form action="{{route('welcome.store')}}" method="post">
                   @csrf
                    <table>
                       <tr>
                         <td>Tour:</td>
                         <td><select name="tour" required>
                            <option value="0" disabled  ></option>
                               <option value="1">Мальдіви</option>
                               <option value="2">Париж</option>
                               <option value="3">Рим</option>
                               <option value="4">Берлін</option>
                               <option value="5">Египет</option>
                               <option value="6">Туреччина</option>
                               <option value="7">Туніс</option>
                            </select>
                        </td>
                       </tr>
                        <tr>
                             <td>Date:</td>
                            <td><input type="date" name="date" required></td>
                        </tr>
                         <tr>
                              <td>Time:</td>
                             <td><input type="number" name="count_day" id="" min="3" max="14" required placeholder="кількість ночей"></td>
                        </tr>
                        <tr>
                            <td>Name:</td>
                            <td><input type="text" name="pip" placeholder="Прізвище Ім'я По-батькові" required></td>                    
                        </tr>
                         <tr>
                             <td>Email:</td>
                             <td><input type="email" name="email" placeholder="Email" required></td>
                        </tr>
               
                        <tr>
                             <td>Telephone:</td>
                             <td> <input type="tel" name="telephpone" required placeholder="телефон"></td>
                       </tr>
                       <tr>
                            <td colspan="2"> <input type="submit" name="tourbtn" value="Замовити" class="btn"></td>
                       </tr>
                   </table>   
                </form>
            </div>
            </main>
          
        </body>
</html>
