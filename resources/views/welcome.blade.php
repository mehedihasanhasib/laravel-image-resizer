<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image Resizer</title>
</head>

<body>
    <form action="{{ route('resizer') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div style="margin-bottom: 8px">
            <input type="file" name="image">
        </div>
        <button type="submit">Resize</button>
    </form>
</body>

</html>
