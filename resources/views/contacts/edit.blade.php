<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css1/app.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <form action='/contact/{{$contacts->id}}/update ' method="post">
      @csrf
      

      <input type="text" value="address" class="form-control" name="address">
      <input type="text" value="phone number" name="phone_number">
      <input type="text" value="fax number" name="fax_number">
      <input type="email" value="email" name="email">
      <button type="submit" class="btn btn-primary">Submit</button>
 
    </form>
    </div>
      


</body> 
</html>