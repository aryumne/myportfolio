<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body style="background-color: blueviolet;">
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="col-5">
            <h1 class="text-center text-white text-uppercase pb-3">Hallo, {{ $name }}!</h1>
            <h4 class="text-light fw-normal">
                {{ $message_text }}
            </h4>
            <p class="text-light pb-2"> Please wait for a reply in your email.</p>
            <div class="text-end">
                <a class="btn btn-outline-light" href="/" role="button">Continue</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>