<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inphut form</title>
    <style> 
        input[type=text] {
          width: 100%;
          padding: 12px 20px;
          margin: 8px 0;
          box-sizing: border-box;
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
        </style>
</head>
<body>
    <section>
        <p>Create Table</p>
        
        <form action="/companies/store" method="POST">
            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
            <label for="fname">Name:</label>
            <input type="text" id="name" name="name">
            <label for="lname">Code:</label>
            <input type="text" id="code" name="code">
            <label for="lname">Address:</label>
            <input type="text" id="address" name="address">
            <label for="lname">City:</label>
            <input type="text" id="city" name="city">
            <label for="lname">Country:</label>
            <input type="text" id="country" name="country">
            <input type='submit'>
        </form>
        
    </section>
</body>
</html>