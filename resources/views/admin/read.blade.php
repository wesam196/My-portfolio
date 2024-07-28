<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon"  >
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <style>
     img{
      max-height: 100px;
      margin-top: 20px;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
    





@if(session()->has('msg'))
            <div class="alert alert-success">
            {{session()->get('msg')}}
            <button data-dismiss="alert" class="close">X</button>
            </div>
            @endif

            
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="table-container">
        <table class="center table-bordered" > 

          <tr>
          <td>title</td>
          <td>description</td>
          <td>language</td>
          <td>framework</td>
          <td>link</td>
          <td>GitHubLink</td>
          <td>image</td>
          <td>Delete</td>
          <td>Edit</td>
          </tr>
          @foreach($data as $data)
          <tr>
            <td>{{$data->name}}</td>
            <td >
          <div class="scrollable-td">    
            
          {{$data->description}}

          </div>
          </td>
            <td>{{$data->language}}</td>
            <td >{{$data->framework}}</td>
            <td>{{$data->link}}</td>
            <td>{{$data->GitHubLink}}</td>
            <td>
                <img src="product/{{$data->image}}" alt="null">
            
        
        </td>
        

        <td>
            <a onclick="return confirm('are you sure you wnat delete ( {{$data->name}} )')" class="btn btn-danger" href="{{url('/delete',$data->id)}}">Delete</a>
             
        </td>
        <td>
            <a href="{{url('/update',$data->id)}}"  class="btn btn-success">Edit</a>
        </td>
        </tr>
          @endforeach
        </table>

        </div>
        </div>
        </div>
        </div>
</div>


        </body>
</html>