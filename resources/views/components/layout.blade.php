<html>
    <head>
        <title>{{ $title ?? 'Todo Manager' }}</title>
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
        <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>
    <div class="container mx-auto p-4"> {{ $slot }} </div>
    </body>
</html>