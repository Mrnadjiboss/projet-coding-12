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
    <h1 class="bg-secondary text-center text-white">
        Headers
    </h1>
    @foreach ($headers as $header)

    <div class="container">
        <img src={{$header -> img_path}} alt="" class="img-fluid">
        <h1 class=" text-dark text-center">
            title : {{$header -> title}}
        </h1>
        <h1 class="text-dark text-center">
            description : {{$header -> description}}
        </h1>
    <a href="header/{{$header->id}}/edit" class="btn btn-warning">edit</a>
    </div>
    @endforeach
    <hr>
    <br>

    <h1 class="bg-dark text-center text-white">
        avantages
    </h1>
    <a href="avantage/create" class="btn btn-danger form-control btn-outline-secondary btn-lg text-white">create</a>

    @foreach ($avantages as $avantage)
    <form action="avantage/{{$avantage ->id}}" method = "post">
        @csrf
        @method("delete")
      <div class="container">
        <h1 class=" text-dark text-center">
            title : {{$avantage -> title}}
        </h1>
        <h1 class=" text-dark text-center">
            descripition : {{$header -> description}}
        </h1>
        <hr>
        <button class="btn btn-danger btn-outline-secondary text-white" type="submit">delete</button>
        <a href="avantage/{{$avantage->id}}/edit" class="btn btn-warning">edit</a>
    </div>
</form> 
    @endforeach
    <hr>
    <br>

    <h1 class=" bg-dark text-center text-white">
        testimonials
    </h1>
    <a href="testimonial/create" class="btn btn-danger form-control btn-outline-secondary btn-lg text-white">create</a>
    @foreach ($testimonials as $testimonial)
    <form action="testimonial/{{$testimonial ->id}}" method="post">
        @csrf
        @method("delete")
    <div class="container">
    <img src={{$testimonial -> img_path}} alt="" class="img-fluid">
      
        <h1 class=" text-dark text-center">
            text : {{$testimonial -> text}}
        </h1>
        <h1 class=" text-dark text-center">
            name : {{$testimonial -> name}}
        </h1>
        <h1 class=" text-dark text-center">
            link : {{$testimonial -> link}}
        </h1>
        <button class="btn btn-danger btn-outline-secondary text-white" type="submit">delete</button>
        <a href="testimonial/{{$testimonial->id}}/edit" class="btn btn-warning">edit</a>
    </div>
</form>
    @endforeach
    <hr>
    <br>
    <h1 class=" bg-dark text-center text-white">
        works
    </h1>
    <a href="work/create" class="btn btn-danger form-control btn-outline-secondary btn-lg text-white">create</a>
    @foreach ($works as $work)
    <form action="work/{{$work ->id}}" method = "post">
        @method("delete")
        @csrf
      <div class="container">
        <img src={{$work -> img_path}} alt="" class="container-fluid">
        <hr>
        <button class="btn btn-danger btn-outline-secondary text-white" type="submit">delete</button>

        <a href="work/{{$work->id}}/edit" class="btn btn-warning">edit</a>
    </div>
</form> 
    @endforeach


    <h1 class=" bg-dark text-center text-white">
        Contacts
    </h1>

   

    @foreach ($contacts as $contact)
    
<div class="container">
        <h1 class=" text-dark text-center">
            address : {{$contact -> address}}
        </h1>
        <h1 class=" text-dark text-center">
            number : {{$contact -> phone_number}}
        </h1>
        <h1 class=" text-dark text-center">
            fax : {{$contact -> fax_number}}
        </h1> 
        <h1 class=" text-dark text-center">
            email : {{$contact -> email}}
        </h1>

        <a href="contact/{{$contact->id}}/edit" class="btn btn-warning">edit</a>
    </div>
@endforeach

       


</body>
</html>