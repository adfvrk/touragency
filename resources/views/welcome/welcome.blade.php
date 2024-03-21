<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>welcome</title>

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

      
        <link rel="stylesheet" href="{{asset('css/welcome.css')}}">
    </head>

    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
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
          
        </div>
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
                    <!-- <a class="anchor button color1" href="{{route('welcome')}}">Home</a> -->
                    <a class="anchor button color2" href="{{route('welcome.allpost')}}">Posts</a>
                    <a class="anchor button color3" href="{{route('welcome.category')}}">Categoriers</a>
                </div>
            </div>
            <div class="main-piture">
            </div>
        </header>
        <main class="main-container">            
             <h1 class="header">Доступні тури</h1>
             @if($message != null && $message != '')  
                <h2 class="message" id="flashMessage">{{$message}}</h2>
                <script>
                      setTimeout(function() {
                      document.getElementById('flashMessage').style.display = 'none';
                    }, 1000);
               </script>
             @endif        
         <div class="tour-variants">
             @foreach ($tours as $tour)
             <div class="tour-cart">           
                 <img src="{{$tour->img}}" alt="Tour Paris" class="tour-image">
                 <div class="tour-details">
                    <p class="tour-title">{{$tour->name}}</p>
                    <p class="tour-description">{{$tour->short_description}} </p>
                    <p class="tour-price">{{$tour->price}} грн/доба</p>  
                    <p class="tour-button">
                       <button class="btn2 colorgreen" onclick = "ShowDialog('{{$tour->description}}')"> Детальніше </button>   
                       <button class="btn2 colorblue" onclick = "ShowOrder('{{$tour->name}}', '{{$tour->price}}', '{{$tour->id}}')"> Замовити </button>              
                    </p>              
                 </div>
            </div>
             @endforeach 

             <dialog id="myModal" class="dialog">
                <div class="dialog-content">
                    <p id="dialogContent"></p>
                     <button id="closeDialog" class="btn2 colorgreen"> Закрити вікно </button>                       
                </div>            
            </dialog> 

            <dialog id='myOrder' class="dialog">
                 <div class="form_tour">     
                    <h2 class="header">Замовлення туру</h2>
                    <h2 class="header" id="tourName"></h2>
                    <form action="{{route('welcome.store')}}" method="post">
                    @csrf
                    <table>
                         <tr>
                              <td>TourId:</td>
                             <td><input type="text" name="tour_id"  readonly> </td>
                         </tr>
                         <tr>
                             <td>P.I.P:</td>
                            <td>
                                <input type="text" name="pip" placeholder="Прізвище Ім'я По-батькові" required>
                                @error('pip')
                                <p style="color:red">{{ $message }}"></p>
                                @enderror
                            </td>
                        </tr>
                         <tr>
                             <td>Email:</td>
                             <td>
                                <input type="email" name="email" placeholder="Email" required>
                                @error('email')
                                <p style="color:red">{{ $message }}</p>
                                @enderror
                            </td>
                         </tr>
                         <tr>
                             <td>Phone:</td>
                             <td>
                                <input type="text" name="telephone" placeholder="phone" required>
                                @error('telephone')
                                <p style="color:red">{{ $message }}</p>
                                @enderror
                            </td>                    
                         </tr>
                         <tr>
                             <td>CountNights:</td>
                            <td>
                                <input type="number" name="count_day" placeholder=" count of nights" min="1" max="24" required>
                                @error('count_day')
                                <p style="color:red">{{ $message }}</p>
                                @enderror
                            </td>
                        </tr>
    
                         <tr>
                               <td>Price:</td>
                                <td> <input type="number" name="price" readonly></td>
                        </tr>
                        <tr>
                                <td> <input type="submit" name="tourbtn" value="Підтвердити" class="btn2 colorblue special"></td>
                                <td class="centered-cell"> <button id="closeDialogOrder" class="btn2 colorgreen"> Повернутись </button>    </td>
                        </tr>
                    </table>   
                   </form>
                 </div>    
            </dialog>
         </div>        
        </main>
       <script>
            const myDialog = document.getElementById('myModal');
            const myOrder = document.getElementById('myOrder');
            const priceInput = document.querySelector('input[name="price"]');
            const tourId = document.querySelector('input[name="tour_id"]');
            const closeDialogButton = document.getElementById('closeDialog');
            const closeOrderButton = document.getElementById('closeDialogOrder');
            const countDayInput = document.querySelector('input[name="count_day"]');
            let priceByNight=0;

            function ShowOrder(name, price, tour_Id) {
                const tourContent = document.getElementById('tourName');
                tourContent.innerHTML = name;
                tourId.value = tour_Id;
                priceByNight=parseInt(price);
                myOrder.style.display='flex';  
            }

            function ShowDialog(message) {        
                const dialogContent = document.getElementById('dialogContent');
                dialogContent.innerHTML=message;

                myDialog.style.display = 'flex';
            }
           
  
           closeDialogButton.addEventListener('click', () => {
              myDialog.style.display = 'none';
           });

           closeOrderButton.addEventListener('click', () => {
                myOrder.style.display = 'none';
           })

           document.addEventListener("DOMContentLoaded", function() {
           
           // var priceInput = document.querySelector('input[name="price"]');
            //var tourSelector = document.getElementById('tour_id');
            //tourSelector.addEventListener("change", function() { updatePrice();});
            countDayInput.addEventListener("input", function() { updatePrice();});

            function updatePrice() {
                var countDays = parseInt(countDayInput.value);
                //var pricePerDay = parseInt(tourSelector.options[tourSelector.selectedIndex].getAttribute('data-price'));
                priceInput.value = countDays * priceByNight;            
            }
        });
       </script>
</body>
</html>
