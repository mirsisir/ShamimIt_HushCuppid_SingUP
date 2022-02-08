<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{asset('css/web/style.css')}}">
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    @livewireStyles
</head>

<body  >

<div class="fixed-top bg-light">
    <div class="container ">
        <img src="https://www.hushcupid.com/templates/themes/base/img/logo.png" alt="s" width="70px" >
        <span class="h3 m-3 text-purple">Hush Cupid</span>
        <a href="#" class="float-end btn  mt-3"  >Login</a>
    </div>
</div>
<div class="row">
    <div class="col-lg-6 col-sm-12">
        <div class="container m-auto p-4" >

            <div class="form  p-4 bg-light    rounded-2" style="margin: 7vw">
                <div class="mb-3">
                    <h6 class="h5 mb-0">hush cupid!</h6>

                    <h3 class="h4 font-weight-bold text-center">SingUp</h3>
                </div>
                @livewire('singup-component')


            </div>
        </div>
    </div>

    <div class="col-lg-6 col-sm-12">
        <div class="image p-4" >
            <div class="p-4">
                <div class="p-4   text-white bg-light " style="margin-top: 150px;">

                    <h2 class="text-purple">Meet amazing people nearby Waiting for you...! 🎉</h2>
                    <span class="text-purple">You're on the best place for meeting new people nearby! Chat, Flirt, Socialize and have Fun!</span>


                </div>
            </div>
        </div>
    </div>
</div>
@livewireScripts
</body>
</html>
