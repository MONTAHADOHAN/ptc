 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <h1>Hello , hi everyone!!  => i'm  {{$name}} </h1>
    <form action="about" method="post">
        @csrf
        <input type="text" name="name" id ="name"><br>
        <select name="teacher" id="teacher">
            @foreach ($teachers as $key => $teacher)
            <option value = "{{$key}}">{{$teacher}}</option>
            @endforeach
        </select>
        <input type="submit" value="Send">
    </form>
 </body>
 </html>