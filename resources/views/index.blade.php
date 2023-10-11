<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        table td, th {
            border: 3px solid black ;
        }
    </style>
</head>
<body>
    <h2> Products Data </h2>
    <form>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Quality</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
    <tbody >
        @foreach($products as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->quality}}</td>
            <td>{{$item->price}}</td>
            <td>
               <a href="{{url('/delete/'.$item->id)}}"> <button>Delete</button></a>
               <a href="{{url('/edit/'.$item->id)}}"> <button>Edit</button></a>

            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
</form>
    <br>
    <a href="{{ url('product/create') }}"> <button>Add data</button></a>
</body>

</html>
