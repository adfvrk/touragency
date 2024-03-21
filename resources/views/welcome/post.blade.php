<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Posts</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

       
        <link rel="stylesheet" href="{{asset('css/welcome.css')}}">
        <style>
        table{
            border-collapse: collapse;
        }

        th,td{
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        a{
            text-decoration: none;
            color:black;
            border: 1px solid gray;
            padding: 1px 5px;
            border-radius: 2px;
        }
        .btn-create{background-color: lightgreen;}
        .btn-show{background-color: lightblue;}
        .btn-edit{background-color: lightyellow;}
        .btn-delete{background-color: lightcoral; border:1px solid gray; padding: 1px 5px;border-radius: 2px; }
  
        tr:nth-child(even){background-color:#f2f2f2;}
        tr:nth-child(odd){background-color:#ffffff;}
        th{
            background-color: lightgray;
        }
    </style>
    </head>

    <body class="antialiased"> 
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
                    <a class="anchor button color1" href="{{route('welcome')}}">Home</a>
                    <!-- <a class="anchor button color2" href="{{route('welcome.allpost')}}">Posts</a> -->
                    <a class="anchor button color3" href="{{route('welcome.category')}}">Categories</a>
                </div>
            </div>
            <div class="main-piture">
            </div>
        </header>
        <main class="main-container">            
             <h1 class="header">Posts:</h1>
             <table>
                <thead>
                    <tr>
                        <th>PostName</th>
                        <th>Category</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                         <tr>
                            <td>{{$post->name}}</td>
                            <td>{{$categoryNames[$post->category_id]}}</td>
                            <td>{{$post->description}}</td>
                         </tr>
                 
                     @endforeach
                </tbody>
             </table>
            
            </main>

           
        </body>
</html>
