<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shualeduri</title>
    <style>
        table {
          font-family: arial, sans-serif;
          border-collapse: collapse;
          width: 100%;
        }
        
        td, th {
          border: 1px solid #dddddd;
          text-align: left;
          padding: 8px;
        }
        
        tr:nth-child(even) {
          background-color: #dddddd;
        }
        .button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  margin-top: 20px;
}

.button1 {background-color: #4CAF50;} 
.button2 {background-color: #008CBA;} 
        </style>
</head>
<body>
    <section class="container">
        <table>
           <tr>
                <th>ID</th>
                <th>Name</th>
               <th>Code</th>
               <th>Address</th>
               <th>City</th>
               <th>Country</th>
           </tr>
           @foreach ($companies as $c)
           <tr>
            <td>{{$c->id}}</td>
            <td>{{$c->name}}</td>
            <td>{{$c->code}}</td>
            <td>{{$c->address}}</td>
            <td>{{$c->city}}</td>
            <td>{{$c->country}}</td>
        </tr>
           @endforeach
         
          </table>
        <a href="/addtable"><button class="button button1">Add</button></a>
        
    </section>
</body>
</html>