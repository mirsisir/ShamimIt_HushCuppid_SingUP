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

@if($setting->background_image)
    <body
        style="background-image: url('{{ asset('storage/'.($setting->background_image ?? "https://cdn.pixabay.com/photo/2016/07/12/11/44/face-1511873_960_720.jpg") ) }}')">
    @else
        <body style="background-image: url(https://cdn.pixabay.com/photo/2017/11/12/22/50/human-2944064_960_720.jpg);">
        @endif
        <div class="wrapper">

            <div id="main-wrapper" class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="card border-0" style="    margin-top: 3.5rem!important;">
                            <div class="card-body p-0">
                                <div class="row no-gutters mt-4">
                                    <div class="col-lg-6">
                                        <div class="py-3 ps-3">
                                            <div class="p-2">
                                                <div class="">
                                                    <h6 class="h5 mb-0">hush cupid!</h6>

                                                    <h3 class="h4 font-weight-bold text-theme">SingUp</h3>
                                                </div>

                                                @livewire('singup-component')


                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 d-none d-lg-inline-block">

                                            @if($setting->login_image)
                                            <div class="account-block rounded-right p-3"
                                                style="background-image: url('{{ asset('storage/'.($setting->login_image ?? "https://cdn.pixabay.com/photo/2016/07/12/11/44/face-1511873_960_720.jpg") ) }}')">
                                            @else
                                                <div class="account-block rounded-right p-3"
                                                     style="background-image: url(https://cdn.pixabay.com/photo/2016/03/23/04/01/woman-1274056_960_720.jpg);">
                                            @endif



                                                    <div class="overlay rounded-right"></div>
                                                    <div class="account-testimonial">
                                                        <h4 class="text-white mb-4">You're on the best place for meeting
                                                            new people nearby! Chat, Flirt, Socialize and have Fun!</h4>
                                                        <p class="lead text-white">"Meet amazing people nearby Waiting
                                                            for you...!"</p>
                                                    </div>
                                                </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        @livewireScripts
        </body>
</html>
