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


</head>

<body class="bg-light"
      @if(!empty($setting->background_image ?? ""))
      style="background-image: url('{{ asset('storage/'.($setting->background_image ?? "https://cdn.pixabay.com/photo/2016/07/12/11/44/face-1511873_960_720.jpg") ) }}')" >
@else
    style="background-image: url('https://cdn.pixabay.com/photo/2016/07/12/11/44/face-1511873_960_720.jpg') ">

@endif
<div class="">
    <div class="container ">
        <img src="https://www.hushcupid.com/templates/themes/base/img/logo.png" alt="s" width="70px">
        <span class="h3 m-3 text-purple">{{$setting->website_name ?? "Hush Cupid"}}</span>

        <a href="https://www.hushcupid.com/" class="float-end btn btn-theme mt-3">Login</a>

    </div>
</div>

<div id="main-wrapper" class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10">
            <div class="card border-0">
                <div class="card-body p-0">
                    <div class="row no-gutters mt-4">
                        <div class="col-lg-6 d-none d-lg-inline-block">
                            <div class="account-block rounded-right p-3"

                            @if(!empty($setting->login_image ?? ""))
                                style="background-image: url('{{ asset('storage/'.($setting->login_image ?? "https://cdn.pixabay.com/photo/2015/03/03/08/55/portrait-657116_960_720.jpg") ) }}')"

                            @else
                                 style="background-image: url('https://cdn.pixabay.com/photo/2015/03/03/08/55/portrait-657116_960_720.jpg')"

                                @endif
                            >
                                <div class="overlay rounded-right"></div>
                                <div class="account-testimonial">
                                    <h4 class="text-white mb-4">{{$setting->title ?? "You're on the best place for meeting new people nearby!
                                        Chat, Flirt, Socialize and have Fun!"}}</h4>
                                    <p class="lead text-white">"{{$setting->sub_title ?? "Meet amazing people nearby Waiting for you...!"}}"</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="mb-3">
                                    <h6 class="h5 mb-0 text-center">{{$setting->website_name ?? "Hush Cupid"}}</h6>

                                    <h3 class="h4 font-weight-bold text-theme text-center">SingUp</h3>
                                </div>


                                <form method="post" action="{{route('sing_up')}}">
                                    @csrf
                                    <div id="step-1">
                                        <label for="name">Your First Name</label>
                                        <input type="text" class="form-control " id="name" name="name">
                                        <label for="name">* Your Nickname</label>
                                        <input type="text" class="form-control" name="nickName" id="nickName">
                                        <label for="name">* Your Email</label>
                                        <input type="email" class="form-control" id="email">

                                        <label for="name">* Your Password</label>

                                        <input type="password" class="form-control" id="password">
                                        <br>
                                        <span class="">* Terms of Service</span> <br>
                                        <input type="checkbox" class="mb-4">
                                        I have read and agree to the Terms.
                                        <br>
                                        <span onclick="formStep1()"
                                              class="float-end btn btn-lg btn-theme d-inline">Next</span>
                                        <br>
                                    </div>


                                    <div id="step-2" style="display: none">
                                        <p>* I am a</p>

                                        <label><input type="radio" name="gender" value="male" required>Male</label>

                                        <label><input type="radio" name="gender" value="female">Female</label>

                                        <label><input type="radio" name="gender" value="other">Couple</label>

                                        <p>Looking for a</p>

                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="looking[]" required value="Female">Female
                                        </label>
                                        <label class="checkbox-inline">
                                            <input type="checkbox" name="looking[]"  value="Male">Male
                                        </label>

                                        <label class="checkbox-inline">
                                            <input type="checkbox"  name="looking[]" value="Couple">Couple
                                        </label>

                                        <div class="row mt-1">
                                            <div class="col-6 p-2">
                                                <label for="birth"> Your Date of Birth</label>
                                                <input type="date" required  name="birth" id="birth" class="form-control">
                                            </div>
                                            <div class="col-6 p-2">
                                                <label for="birth"> City</label>
                                                <input type="text"  required name="city" id="city" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mt-1">
                                            <div class="col-6 p-2">
                                                <label for="birth"> Your Country</label>
                                                <input type="text" required  name="country" id="country" class="form-control">
                                            </div>
                                            <div class="col-6 p-2">
                                                <label for="birth">* Post Code</label>
                                                <input type="text" required  name="PostCode" id="PostCode" class="form-control">
                                            </div>
                                        </div>
                                        <p>* About Me</p>
                                        <textarea name="about_me"  required id="about_me" cols="45" rows="5"></textarea>
                                        <br>
                                        <p>* Upload A Photo</p>
                                        <input type="file" name="photo" id="photo"  required >

                                        <br>
                                        <input type="submit" value="SingUp"
                                               class="float-end btn btn-lg btn-theme d-inline">
                                    </div>

                                </form>


                            </div>
                        </div>

                    </div>

                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->


            </p>

            <!-- end row -->

        </div>

        <!-- end col -->
    </div>
    <!-- Row -->

    <script>
        function formStep1() {
            let name = document.getElementById('name').value;
            let nickName = document.getElementById('nickName').value;
            let email = document.getElementById('email').value;
            let password = document.getElementById('password').value;

            if (name === "") {
                $("#name").addClass('is_invalid');
            }
            if (nickName === "") {
                $("#nickName").addClass('is_invalid');
            }

            if (email === "") {

                $("#email").addClass('is_invalid');
            }
            if (password === "") {
                $("#password").addClass('is_invalid');
            }


            if (name && nickName !== "") {
                var x = document.getElementById("step-2");
                document.getElementById("step-1").style.display = "none";
                x.style.display = "block";
            }

        }
    </script>
</div>
</body>
</html>
