<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



@if(session()->has('msg'))
            <div class="alert alert-success">
            {{session()->get('msg')}}
            <button data-dismiss="alert" class="close">X</button>
            </div>
            @endif
            <div class="div_center">

            <h2>update product</h2>
            
            
            <form action="{{url('/confirmUpdate' ,$data->id)}}" method="POST" enctype ="multipart/form-data" >

            @csrf
            <label for="name"> Name</label> <br>
              <input type="text" name="name" placeholder="write product title" value='{{$data->name}}'>
                <br>
                <br>

              <label for="description">decription</label> <br>
              <textarea class="resizable-input"  name="description" placeholder="write decription" value='{{$data->description}}'>{{$data->description}}</textarea>
              <br>
              <br>
              
              <label for="image"></label>
              <input type="file" name="image" placeholder="choose image" value='product/{{$data->image}}'>
              
              <br>
              <br>

              <label for="language">Language</label> <br>
              <input type="text" name="language" placeholder="write Language used " value='{{$data->language}}'>

              <br>
              <br>

              <label for="framework">Framework</label> <br>
              <input type="text" name="framework" placeholder="write framework/s used" value='{{$data->framework}}'>
              <br>
              <br>

              <label for="link">Link</label> <br>
              <input type="text" name="link" placeholder="write project Link if exist" value='{{$data->link}}'>

              <br>
              <br>

              <label for="GitHub">GitHub Link</label> <br>
              <input type="text" name="GitHub" placeholder="write project GitHubLink " value='{{$data->GitHubLink}}'>

              <br>
              <br>

              <label for="current_image"></label> <br>
              <img src="product/{{$data->image}}" alt="null" name='current_image'>
              <br>
              

              <input type="submit" class="btn btn-primary" name="submit" value="update product">

            </form>

            </div>

</div>

</body>
</html>