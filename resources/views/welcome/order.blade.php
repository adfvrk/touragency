!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Order</title>
    <link rel="stylesheet" href="{{asset('css/welcome.css')}}">
    <!-- <style>
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
    </style> -->
</head>
<body>
<div class="form_tour">     
     <h2 class="header">Замовлення туру</h2>
     <form action="{{route('welcome.store')}}" method="post">
        @csrf
         <table>
            <tr>
              <td>Tour:</td>
              <td><select name="tour" required>
                 <option value="0" disabled  ></option>
                    <option value="1">Мальдіви</option>
                    <option value="2">Париж</option>
                    <option value="3">Рим</option>
                    <option value="4">Берлін</option>
                    <option value="5">Египет</option>
                    <option value="6">Туреччина</option>
                    <option value="7">Туніс</option>
                 </select>
             </td>
            </tr>
             <tr>
                  <td>Date:</td>
                 <td><input type="date" name="date" required></td>
             </tr>
              <tr>
                   <td>Time:</td>
                  <td><input type="number" name="count_day" id="" min="3" max="14" required placeholder="кількість ночей"></td>
             </tr>
             <tr>
                 <td>Name:</td>
                 <td><input type="text" name="pip" placeholder="Прізвище Ім'я По-батькові" required></td>                    
             </tr>
              <tr>
                  <td>Email:</td>
                  <td><input type="email" name="email" placeholder="Email" required></td>
             </tr>
    
             <tr>
                  <td>Telephone:</td>
                  <td> <input type="tel" name="telephpone" required placeholder="телефон"></td>
            </tr>
            <tr>
                 <td colspan="2"> <input type="submit" name="tourbtn" value="Замовити" class="btn"></td>
            </tr>
        </table>   
     </form>
 </div>
</body>
</html>