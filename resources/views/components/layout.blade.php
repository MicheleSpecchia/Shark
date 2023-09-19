<!doctype html>
<html lang="it">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="">
    <title>SHARK</title>
    <!-- Favicon icon -->

    <link rel="icon" type="image/png" sizes="100x100" href="{{asset('favicon.ico')}}">
    <link rel="icon" href="images/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;50">
    <script src="https://kit.fontawesome.com/3b7cab5fda.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Inclusione di SweetAlert2 per rendere esteticamente piu bello l'alert della chiamat ajax -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function submenu() {
            var subMenuWrap = document.querySelector('.sub-menu-wrap');
            if (subMenuWrap.style.display === 'none' || subMenuWrap.style.display === '') {
                subMenuWrap.style.display = 'block'; // Mostra l'elemento
            } else {
                subMenuWrap.style.display = 'none'; // Nasconde l'elemento
            }
        }
    </script>





    @vite(['resources/js/app.js'])

</head>


<body>

    <main>
        {{$slot}}
    </main>

</body>

</html>