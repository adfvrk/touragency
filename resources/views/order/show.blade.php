<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <style>
        body{
           background-color: lightblue;
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
      

    </style>
</head>
<body>
    <div class="edit_container">
                <h2>OrderId:{{$order->id}}</h2>                   
                <p>
                    <label for="">TourId: </label>
                    <label for="">{{$order->tour_id}}</label>
                    
                </p> 
                <p>
                    <label for="">P.I.P: </label> 
                    <label >{{$order->pip}}</label>  
                </p>
                <p>
                    <label for="">E-mail: </label> 
                    <label >{{$order->email}}</label>  
                </p> 
                <p>
                    <label for="">Phone: </label> 
                    <label >{{$order->telephone}}</label>  
                </p>  
                <p>
                    <label for="">Count_Days:  </label> 
                    <label >{{$order->count_day}}</label>  
                </p> 
                <p>
                    <label for="">Price:  </label> 
                    <label >{{$order->price}}</label>  
                </p> 

                     
       
    </div>
   
</body>
</html>