<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
            @foreach($data as $data)
                <h1>{{$data->id}}</h1>
                <img src="product/{{$data->image}}" alt="here there is an image">
            @endforeach
</body>
</html>