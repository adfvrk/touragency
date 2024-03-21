<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
           background-color: lightblue;
        }  
        .btn{
            background-color: lightgreen;
            padding: 5px 250px;
            border-radius: 5px; 
            margin:20px 0 10px ; 
            display: block;
            margin: 0 auto;                
            
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
        input[type="text"],[type="email"]{
             width:300px;
        }
        input[type="submit"]{
                       
        }
    </style>
</head>
<body>
    <div class="edit_container">
        <h2>
            <label for="">OrderId: </label>
            <label for="">{{$order->id}}</label>        
        </h2>
        
    <form action="{{route('order.update', $order->id)}}" method="post">
        @csrf
        @method('PUT')
        <p>
            <label for="">TourId: </label>
            <input type="text" name="tour_id" value="{{$order->tour_id}}" readonly></label>        
        </p>


        <p>
            <label for="name">P.I.P: </label>
            <input type="text" name="pip" value="{{$order->pip}}">
        </p>      
        @error('pip')
        <p style="color:red">{{$message}}</p>
        @enderror

        <p>
            <label for="email">E-mail: </label>
            <input type="email" name="email" value="{{$order->email}}">
        </p>
        @error('email')        
        <p style="color:red">{{$message}}</p>
        @enderror
        <p>
            <label for="">Phone: </label>
            <input type="text" name="telephone" value="{{$order->telephone}}">
        </p>
        @error('telephone')        
        <p style="color:red">{{$message}}</p>
        @enderror
        <p>
            <label for="count_day">CountDays: </label>
            <input type="number" name="count_day" value="{{$order->count_day}}" min="1" max="14">
        </p>
        @error('count_day')
        <p style="color:red">{{$message}}</p>
        @enderror
        <p>
            <label for="price">Price: </label>
            <input type="number" name="price" value="{{$order->price}}" readonly>
        </p>

        <input type="submit" name="editbtn"  value="Edit" class="btn">
    </form>
    </div>
    <script>
        var pricePerDay = {{ $pricePerDay }};
        document.addEventListener("DOMContentLoaded", function() {
        var countDayInput = document.querySelector('input[name="count_day"]');
        var priceInput = document.querySelector('input[name="price"]');
        countDayInput.addEventListener("input", function() {            
        var countDays = parseInt(countDayInput.value);
        var totalPrice = countDays * pricePerDay;          
            priceInput.value = totalPrice; 
        });
    });
</script>
</body>
</html>