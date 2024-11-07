<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit a cell</h1>
   
    <form method="post" action="{{route('cell.update', ['cell' => $cell])}}">
        @csrf 
        @method('put')
        <div>
            <label>Title</label>
            <input type="text" name="title" placeholder="Title" value="{{$cell->title}}" />
        </div>
        <div>
            <label>Link</label>
            <input type="text" name="link" placeholder="Link" value="{{$cell->link}}" />
        </div>
        <div>
            <label>Color</label>
            <input type="text" name="color" placeholder="Color" value="{{$cell->color}}" />
        </div>
        <div>
            <input type="submit" value="Update" />
        </div>
    </form>
</body>
</html>