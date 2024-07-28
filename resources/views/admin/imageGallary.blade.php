<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <base href="/public">
</head>
<body>
@if(session()->has('msg'))
            <div class="alert alert-success">
            {{session()->get('msg')}}
            <button data-dismiss="alert" class="close">X</button>
            </div>
            @endif
    @foreach($data as $data)


    <img src="gallary/{{$data->images}}" alt="{{$data->images}}">

    
    @endforeach

    <form action="{{url('/addImage' ,$id)}}" method="POST" enctype ="multipart/form-data" >
    @csrf

    <label for="image">Image</label>
    <input type="file" name="image">

    <input type="submit">
    </form>
 
</body>
</html>