<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Para este caso, ya que la vista será un PDF, lo mejor es utilizar CSS dimensionados concretamente -->

    <style>
        .page-break{
            page-break-after: always;
        }
        h1{
            color: blue;
        }
    </style>

</head>
<body>
    <h1>Hello {{ $data }}!</h1>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, sit voluptates quidem corporis, a unde et quod ratione atque officiis pariatur at quae aliquam, placeat totam dolor tenetur? Dolore, nisi!</p>
    <div class="page-break"></div>
    <h1>Hello world from another page</h1>
</body>
</html>