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
    <form action="{{route('tour.store')}}" method="post">
        @csrf
        <p>
             <label for="name">Name: </label>
            <input type="text" name="name" placeholder="Name">
        </p>
        @error('name')
        <p style="color:red">{{$message}}</p>
        @enderror

        <p>
            <label for="price">Price: </label>
            <input type="text" name="price" placeholder="Price">
        </p>
        @error('price')
        <p style="color:red">{{$message}}</p>
        @enderror

        <p>
            <label for="status">Available: </label>
            <input type="checkbox" name="status" placeholder="Status">
        </p>

        <p>
            <legend>Short_description:</legend>
            <textarea name="short_description" rows="2" cols="80" placeholder="short_description"></textarea>
        </p>
        @error('short_description')
        <p style="color:red">{{$message}}</p>
        @enderror
        
        <p>
            <legend>Description:</legend>
            <textarea name="description" rows="4" cols="80" placeholder="Description"></textarea>
        </p>
        @error('description')
        <p style="color:red">{{$message}}</p>
        @enderror
       
       
        <p>
             <legend>Image:</legend>
            <textarea name="img" rows="4" cols="80" ></textarea>
        </p>
        @error('img')
        <p style="color:red">{{$message}}</p>
        @enderror

        <input type="submit" name="submitbtn"  value="Create" class="btn">
    </form>
    </div>
</body>
</html>

