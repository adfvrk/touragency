<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
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
                <h2>PostId:{{$post->id}}</h2>  
                <p>category_ID:{{$post->category_id}}</p>                       
            <p>
                <legend>Description:</legend>
                <textarea name="description" rows="4" cols="80" >{{$post->description}}</textarea>
            </p>           
       
    </div>
   
</body>
</html>