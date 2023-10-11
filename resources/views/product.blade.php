<!DOCTYPE html>
<html>

<head>
    <title>Document</title>
    {{-- <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"> --}}
</head>

<body>
    <h3> Entre The Detail of Product</h3>
    <form method="post" action="{{route('store.data')}}">
        @csrf
        <div class="mb-1">
            @csrf
            <label for="name" class="name">Name</label>
            <input name="name"type="name" class="name" id="name" aria-describedby="name">
        </div>
        <div class="mb-1">
            <label for="quality" class="quality">Quality</label>
            <input name="quality" type="quality" class="quality" id="quality">
        </div>
        {{-- feature1 branch --}}
        <input type="submit" name="submit" id="" class="btn btn-primary">
        <a href="{{url('/')}}">Show Data</a>

        {{-- <input type="submit" value="Submit" name="save" id="" class="btn btn-primary"> --}}


    </form>


</body>
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> --}}

</html>
