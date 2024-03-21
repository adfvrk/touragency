<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Order</title>
    <style>
        body{
           background-color: lightblue;
        }  
        .btn{
            background-color: lightgreen;
            padding: 5px 250px;
            border-radius: 5px; 
            margin:20px 0 10px ;                 
            
        } 
        .edit_container{
            width: 700px;
            min-width: 700px;
            margin: 20px auto;
            border: 1px solid black;
            padding:  20px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border-radius: 10px;
            background-color: lightcoral;            
        }
        input[type="submit"]{
            display: block;
            margin: 0 auto;            
        }
        input[type="text"]{
            width:60%;
        }
    </style>
</head>
<body>
<div class="edit_container">
    <form action="{{route('order.store')}}" method="post">
        @csrf
        <p>
           <select name="tour_id" id="tour_id" value="TourId">
               @foreach($tours as $tour)                
                    <option value="{{$tour->id}}" data-price="{{$tour->price}}">{{$tour->name}} </option>    
               @endforeach
           </select>
        </p>
        @error('tour_id')
        <p style="color:red">{{$message}}</p>
        @enderror
        <p>
            <label for="">P.I.P: </label>
            <input type="text" name="pip">
        </p>
        @error('pip')
        <p style="color:red">{{$message}}</p>
        @enderror

        <p>
            <label for="email">E-mail: </label>
            <input type="email" name="email" >
        </p>
        @error('email')        
        <p style="color:red">{{$message}}</p>
        @enderror
        <p>
            <label for="">Phone: </label>
            <input type="text" name="telephone" >
        </p>
        @error('telephone')        
        <p style="color:red">{{$message}}</p>
        @enderror
        <p>
            <label for="count_day">CountDays: </label>
            <input type="number" name="count_day"  min="1" max="14">
        </p>
        @error('count_day')
        <p style="color:red">{{$message}}</p>
        @enderror
        <p>
            <label for="price">Price: </label>
            <input type="number" name="price"  readonly>
        </p>
        <input type="submit" name="submitbtn"  value="Create" class="btn">
    </form>
    </div>
    <script>        
        document.addEventListener("DOMContentLoaded", function() {
        var countDayInput = document.querySelector('input[name="count_day"]');
        var priceInput = document.querySelector('input[name="price"]');
        var tourSelector = document.getElementById('tour_id');
        tourSelector.addEventListener("change", function() { updatePrice();});
        countDayInput.addEventListener("input", function() { updatePrice();});

        function updatePrice() {
                var countDays = parseInt(countDayInput.value);
                var pricePerDay = parseInt(tourSelector.options[tourSelector.selectedIndex].getAttribute('data-price'));
                priceInput.value = countDays * pricePerDay;            
            }
        });
    </script>
</body>
</html>


