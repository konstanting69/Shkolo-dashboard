<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cells Dashboard</title>
    
    <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">

    
</head>
<body>
    <div class="dashboard">
        <div class="dashboard__grid">
        @foreach ($cells as $cell)
        <div class="dashboard__item" style="background-color: {{ $cell->color }};">
            <a href="{{ $cell->link ? $cell->link : route('cell.edit', ['cell' => $cell]) }}" class="dashboard__link" target="_blank">
                {{ $cell->title }}
            </a>
        </div>
        @endforeach
        </div>
    </div>
</body>
</html>
