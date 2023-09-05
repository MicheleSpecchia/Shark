<!doctype html>
<html lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SHARK</title>
    <!-- Favicon icon -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;50">
    <script src="https://kit.fontawesome.com/3b7cab5fda.js" crossorigin="anonymous"></script>

    <link rel="icon" type="image/png" sizes="100x100" href="{{asset('favicon.ico')}}">
    <link rel="icon" href="images/favicon.ico" />

    @vite(['resources/js/app.js'])

</head>


<body>

    <main>
        {{$slot}}
    </main>

</body>

</html>