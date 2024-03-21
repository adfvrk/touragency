<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/welcome.css')}}">
    <title>Tour</title>
</head>
<body >
    <div class="container">
      <h1>TourId: {{ $tour->id }}</h1>
       <div class="tour-cart">
         <img src="{{ $tour->img }}" alt="tour image" class="tour-image">
         <div class="tour-details">
            <p class="tour-title">{{ $tour->title }}</p>
            <p class="tour-description">{{ $tour->short_description }}</p> 
          
            <p class="tour-price">{{ $tour->price }} грн/доба</p>                
         </div>
       </div>
    </div>
    
</body>
</html>