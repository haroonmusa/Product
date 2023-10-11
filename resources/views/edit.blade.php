<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

</head>
<body>
        <form method="post"action="{{url('/update/'.$product->id)}}">
        <div class="mb-1">
            @csrf
            @method('PUT')
            <label for="name" class="name">Name</label>
            <input name="name"type="name" class="name" id="name" value="{{$product->name}}">
        </div>
        <div class="mb-1">
            <label for="quality" class="quality">Quality</label>
            <input name="quality" type="quality" class="quality" id="quality" value="{{$product->quality}}">
        </div>
        <div class="mb-1">
            <label for="price" class="price">Price</label>
            <input name="price" type="price" class="price" id="price" value="{{$product->price}}">
        </div>
        <input type="submit" value="Update" name="save" id="" class="btn btn-dark">


    </form>
</body>
</html>
