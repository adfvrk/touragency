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
    <form action="{{route('category.store')}}" method="post">
          @csrf
          <p>
              <label for="name">Name: </label>
              <input type="text" name="name">
          </p>        
            @error('name')
         <p style="color:red">{{$message}}</p>
            @enderror
            <input type="submit" name="createbtn" value="create" class="btn">
    </form>
</div>
</body>
</html>