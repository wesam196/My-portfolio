<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <base href="/public">
    <style>
     img{
      max-height: 300px;
      margin-top: 20px;
      margin-bottom: 20px;
    }
    .div_center{
      text-align:center;
      padding-top:40px;
    }
  </style>
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
</head>
<body>
@if(session()->has('msg'))
            <div class="alert alert-success">
            {{session()->get('msg')}}
            <button data-dismiss="alert" class="close">X</button>
            </div>
            @endif


         
            <div class="div_center">

        <table class="center table-bordered" > 
            <tr>
                <td>Image</td>
                <td>Action</td>         
            </tr>
            
            
    @foreach($data as $data)

    <tr>
    
        <td><img src="gallary/{{$data->images}}" alt="{{$data->images}}"></td>
        <td>
        <a onclick="return confirm('are you sure you wnat delete this image')" class="btn btn-danger" href="{{url('/deleteImage',$data->id)}}">Delete</a>

        </td>
    
    </tr>
        @endforeach
    
    
    </table>
    
    
    
    
    <form action="{{url('/addImage' ,$id)}}" method="POST" enctype ="multipart/form-data" >
    @csrf

    <label for="image">Image</label>
    <input type="file" name="image">

    <input type="submit">
    </form>
 
    </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>