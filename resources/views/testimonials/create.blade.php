<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <form action='/testimonial' method="post">
      @csrf
     

      <input type="text" value="title" class="form-control" name="text">
      <input type="text" value="name" name="name"> 
      <input type="text" value="link" name="link">
      <input type="text" value="img_path" name="img_path">
      <button type="submit" class="btn btn-primary">Submit</button>
 
    </form>
    </div>
      


</body> 
</html>