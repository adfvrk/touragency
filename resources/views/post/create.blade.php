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
            border-radius: 5px; 
            padding:5px 40px ;                 
            
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
    <form action="{{route('post.store')}}" method="post">
        @csrf
        <table>
            <tr>
                <td>Name:</td>
                <td>
                    <input type="text" name="name" placeholder="Name">
                    @error('name')
                        <p style="color:red">{{$message}}</p>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>Description:</td>
                <td>
                    <textarea name="description" rows="4" cols="80" placeholder="Description"></textarea>
                    @error('description')
                         <p style="color:red">{{$message}} </p>
                    @enderror
                </td>
            </tr>
            <tr>
                <td>Category:</td>
                <td>
                      <select name="category_id" id="category_id" value="">
                            @foreach($categories as $category)                
                               <option value="{{ $category->id }}">{{$category->name}} </option>  
                            @endforeach
                      </select>   
                          @error('category_id')
                           <p style="color:red">{{$message}}</p>
                          @enderror                 
                </td>
            </tr>
            <tr>
               <td colspan="2">
               <input type="submit" name="submitbtn"  value="Create" class="btn">
               </td> 
            </tr>
        </table>     
    
        
    </form>
</div>
</body>
</html>


