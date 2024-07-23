<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="" style=" text-align:center;">
<div class="  ">
    <form action="{{url('/add_poject')}}" method="POST" enctype ="multipart/form-data" >
    @csrf
        
    <label for="name">Name</label>
    <input type="text" name="name">
        <br>
    <label for="description">Description</label>
    <input type="textbox" name="description" placeholder="write decription">
<br>
    <label for="image">Image</label>
    <input type="file" name="image">
<br>
    <label for="language">Language/s</label>
    <input type="text" name="language">
<br>
    <label for="framework">Framework</label>
    <input type="text" name="framework">
<br>
    <label for="link">Ling</label>
    <input type="text" name="link">
<br>
    <label for="GitHub">GitHub Link</label>
    <input type="text" name="GitHub">
<br>
    <input type="submit">

   
    </form>
</div>
</div>



</body>
</html>