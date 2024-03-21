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
    </style>
</head>
<body>
    <div class="edit_container">
      <form action="{{route('tour.update', $tour->id)}}" method="post">
       @csrf
       @method('PUT')
       
        <p>
            <label for="name">Name: </label>
            <input type="text" name="name" value="{{$tour->name}}"  placeholder="Name">
        </p>
        @error('name')
        <p style="color:red">{{$message}}</p>
        @enderror

        <p>
            <label for="price">Price: </label>
            <input type="text" name="price" value="{{$tour->price}}" placeholder="Price">
        </p>
        @error('price')
        <p style="color:red">{{$message}}</p>
        @enderror
        
        <p>
            <label for="status">Available: </label>
            <input type="checkbox" value="1" name="status" {{$tour->status== 1 ? 'checked' : ''}}>
        </p>

        <p>
            <legend>Short_description:</legend>
            <textarea name="short_description" rows="2" cols="80" >{{$tour->short_description}}</textarea>
        </p>
        @error('short_description')
        <p style="color:red">{{$message}}</p>
        @enderror      

        <p>
            <legend>Description:</legend>
            <textarea name="description" rows="4" cols="80" >{{$tour->description}}</textarea>
        </p>
        @error('description')
        <p style="color:red">{{$message}}</p>
        @enderror       
       
        <p>
            <legend>Image:</legend>
            <textarea name="img" rows="4" cols="80" >{{$tour->img}}</textarea>
        </p>
        @error('img')
        <p style="color:red">{{$message}}</p>
        @enderror
       
              <input class="btn" type="submit" name="editbtn"  value="Edit">   
        

     
      </form>

    </div>
   
</body>
</html>