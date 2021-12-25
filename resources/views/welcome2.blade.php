<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />
	<title>HushCupid | THE PLACE TO MEET LOVELY PEOPLE!</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!-- Canonical SEO -->
    <link rel="canonical" href="https://hushcupid.com/"/>

    <meta name="keywords" content="meet meople, meet movely meople, meet meople mearby, meeting new people, the best place for meeting, place for dating, Chat, Flirt, Socialize, have fun">
    <meta name="description" content="Meet amazing people nearby Waiting for you.You're on the best place for meeting new people nearby! Chat, Flirt, Socialize and have Fun!">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="HushCupid | THE PLACE TO MEET LOVELY PEOPLE!">
    <meta itemprop="description" content="Meet amazing people nearby Waiting for you.">
    <meta itemprop="image" content="https://hushcupid.com/templates/themes/base/img/logo.png">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@hushcupid">
    <meta name="twitter:title" content="THE PLACE TO MEET LOVELY PEOPLE!">
    <meta name="twitter:description" content="Meet amazing people nearby Waiting for you.You're on the best place for meeting new people nearby! Chat, Flirt, Socialize and have Fun!">
    <meta name="twitter:creator" content="@hushcupid">
    <meta name="twitter:image" content="https://hushcupid.com/templates/themes/base/img/logo.png">

    <!-- Open Graph data -->
    <meta property="og:title" content="HushCupid | THE PLACE TO MEET LOVELY PEOPLE!" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://hushcupid.com" />
    <meta property="og:image" content="https://hushcupid.com/templates/themes/base/img/logo.png" />
    <meta property="og:description" content="HushCupid | THE PLACE TO MEET LOVELY PEOPLE! Meet amazing people nearby Waiting for you.You're on the best place for meeting new people nearby! Chat, Flirt, Socialize and have Fun!" />
    <meta property="og:site_name" content="HushCupid" />

	<!-- CSS Files -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/web/style.css')}}">
	<link href="{{asset('css/paper-bootstrap-wizard.css')}}" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="{{asset('css/demo.css')}}" rel="stylesheet" />

	<!-- Fonts and Icons -->
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	<link href="{{asset('css/themify-icons.css')}}" rel="stylesheet">
	
	</head>

	<body>
    <nav class="navbar">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="/">HushCupid</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">About <span class="sr-only">(current)</span></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="https://hushcupid.com/login" type="button" class="btn btn-primary">LOGIN</a></li>
            </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

	<div class="image-container set-full-height">

		<!--  Made With HushCupid  -->
		<a href="https://hushcupid.com/" class="made-with-pk">
			<div class="brand">HC</div>
			<div class="made-with">Made By <strong>HushCupid</strong></div>
		</a>

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-md-10 col-md-offset-1">
		            <!--      Wizard container        -->
		            <div class="row wizard-container">
                        <div class="col-md-5 text-blockl card" style="background-image: url(https://cdn.pixabay.com/photo/2015/03/03/08/55/portrait-657116_960_720.jpg)">
                            <div class="rounded-right p-3" style="padding-top: 300px; text-align: center; color: white;">
                                <div class="overlay rounded-right"></div>
                                <div class="account-testimonial" style="padding: 30px;">
                                    <h4 class="text-white mb-4">You're on the best place for meeting new people nearby!
                                        Chat, Flirt, Socialize and have Fun!</h4>
                                    <p class="lead text-white">"Meet amazing people nearby Waiting for you...!"</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7" style="padding: 0 !important;">
                            <div class="card wizard-card" data-color="orange" id="wizardProfile">
                                <form method="post" action="{{ route('members.store') }}">
                                    @csrf
                                    <div class="wizard-header text-center">
                                        <h3 class="wizard-title">Create your profile</h3>
                                        <p class="category">This information will let us know more about you.</p>
                                        @if ($errors->any())
                                        <div class="alert alert-danger">
                                            @foreach ($errors->all() as $error)
                                                <p>{{ $error }}</p>
                                            @endforeach
                                        </div>
                                        @endif

                                        @if ($message = Session::get('success'))
                                        <div class="alert alert-success">
                                            <p>{{ $message }}</p>
                                        </div>
                                        @endif
                                    </div>

                                    <div class="wizard-navigation">
                                        <div class="progress-with-circle">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="3" style="width: 21%;"></div>
                                        </div>
                                        <ul>
                                            <li>
                                                <a href="#account" data-toggle="tab">
                                                    <div class="icon-circle">
                                                        <i class="ti-user"></i>
                                                    </div>
                                                    Account
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#lookingFor" data-toggle="tab">
                                                    <div class="icon-circle">
                                                        <i class="ti-settings"></i>
                                                    </div>
                                                    Looking For
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#additional" data-toggle="tab">
                                                    <div class="icon-circle">
                                                        <i class="ti-map"></i>
                                                    </div>
                                                    Additional Info
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane" id="account">
                                            <div class="row">
                                                <div class="col-sm-10 col-sm-offset-1">
                                                    <div class="form-group">
                                                        <label>Your First Name <small>(required)</small></label>
                                                        <input name="firstName" type="text" class="form-control" placeholder="Andrew...">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Your Nickname <small>(required)</small></label>
                                                        <input name="username" type="text" class="form-control" placeholder="@andrew">
                                                    </div>
                                                </div>
                                                <div class="col-sm-10 col-sm-offset-1">
                                                    <div class="form-group">
                                                        <label>Your Email <small>(required)</small></label>
                                                        <input name="email" type="email" class="form-control" placeholder="andrew@loneelymeeet.com">
                                                    </div>
                                                </div>
                                                <div class="col-sm-10 col-sm-offset-1">
                                                    <div class="form-group">
                                                        <label>Your Password <small>(required)</small></label>
                                                        <input name="password" type="password" class="form-control" placeholder="Password">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="lookingFor">
                                            <h5 class="info-text"> I am a: </h5>
                                            <div class="row">
                                                <div class="col-sm-8 col-sm-offset-2 cc-selector-2">
                                                    <div class="col-sm-4">
                                                        <input type="radio" name="sex" value="male" id="male">
                                                        <label class="male drinkcard-cc" for="male"></label>
                                                        <!-- <div class="choice" data-toggle="wizard-radio">
                                                            <input type="radio" name="sex" value="male" checked>
                                                            <div class="card card-checkboxes card-hover-effect">
                                                                <i class="ti-user"></i>
                                                                <p>Male</p>
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="radio" name="sex" value="female" id="female">
                                                        <label class="female drinkcard-cc" for="female"></label>
                                                        <!-- <div class="choice" data-toggle="wizard-radio">
                                                            <input type="radio" name="sex" value="female">
                                                            <div class="card card-checkboxes card-hover-effect">
                                                                <i class="fa fa-female"></i>
                                                                <p>Female</p>
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input type="radio" name="sex" value="couple" id="couple">
                                                        <label class="couple drinkcard-cc" for="couple"></label>
                                                        <!-- <div class="choice" data-toggle="wizard-radio">
                                                            <input type="radio" name="sex" value="couple">
                                                            <div class="card card-checkboxes card-hover-effect">
                                                                <i class="fa fa-users"></i>
                                                                <p>Couple</p>
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <h5 class="info-text"> Looking For a: </h5>
                                            <div class="row">
                                                <div class="col-sm-8 col-sm-offset-2">
                                                    <div class="col-sm-4">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="matchSex[]" value="female">
                                                            <div class="card card-checkboxes card-hover-effect">
                                                                <i class="fa fa-female"></i>
                                                                <p>Female</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="matchSex[]" value="male">
                                                            <div class="card card-checkboxes card-hover-effect">
                                                                <i class="ti-user"></i>
                                                                <p>Male</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <div class="choice" data-toggle="wizard-checkbox">
                                                            <input type="checkbox" name="matchSex[]" value="couple">
                                                            <div class="card card-checkboxes card-hover-effect">
                                                                <i class="fa fa-users"></i>
                                                                <p>Couple</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                        <div class="tab-pane" id="additional">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <h5 class="info-text">Are you living in a nice area? </h5>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Your Birth Date <small>(required)</small></label>
                                                                <input type="date" name="birthDate" class="form-control" placeholder="242">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6" style="padding-left: 0;">
                                                            <div class="form-group">
                                                                <label>Country <small>(required)</small></label><br>
                                                                <select class="form-control" name="country" id="str_country">
                                                                    <option value="AD">Andorra</option><option value="AE">United Arab Emirates</option><option value="AF">Afghanistan</option><option value="AG">Antigua And Barbuda</option><option value="AI">Anguilla</option><option value="AL">Albania</option><option value="AM">Armenia</option><option value="AN">Netherlands Antilles</option><option value="AO">Angola</option><option value="AQ">Antarctica</option><option value="AR">Argentina</option><option value="AS">American Samoa</option><option value="AT">Austria</option><option value="AU">Australia</option><option value="AW">Aruba</option><option value="AX">Aland Islands</option><option value="AZ">Azerbaijan</option><option value="BA">Bosnia And Herzegovina</option><option value="BB">Barbados</option><option value="BD">Bangladesh</option><option value="BE">Belgium</option><option value="BF">Burkina Faso</option><option value="BG">Bulgaria</option><option value="BH">Bahrain</option><option value="BI">Burundi</option><option value="BJ">Benin</option><option value="BM">Bermuda</option><option value="BN">Brunei</option><option value="BO">Bolivia</option><option value="BR">Brazil</option><option value="BS">Bahamas</option><option value="BT">Bhutan</option><option value="BV">Bouvet Island</option><option value="BW">Botswana</option><option value="BY">Belarus</option><option value="BZ">Belize</option><option value="CA">Canada</option><option value="CC">Cocos (Keeling) Islands</option><option value="CD">Democratic Republic Of Congo (Zaire)</option><option value="CF">Central African Republic</option><option value="CG">Congo</option><option value="CH">Switzerland</option><option value="CI">Cote D'Ivorie (Ivory Coast)</option><option value="CK">Cook Islands</option><option value="CL">Chile</option><option value="CM">Cameroon</option><option value="CN">China</option><option value="CO">Columbia</option><option value="CR">Costa Rica</option><option value="CU">Cuba</option><option value="CV">Cape Verde</option><option value="CX">Christmas Island</option><option value="CY">Cyprus</option><option value="CZ">Czech Republic</option><option value="DE">Germany</option><option value="DJ">Djibouti</option><option value="DK">Denmark</option><option value="DM">Dominica</option><option value="DO">Dominican Republic</option><option value="DZ">Algeria</option><option value="EC">Ecuador</option><option value="EE">Estonia</option><option value="EG">Egypt</option><option value="EH">Western Sahara</option><option value="ER">Eritrea</option><option value="ES">Spain</option><option value="ET">Ethiopia</option><option value="FI">Finland</option><option value="FJ">Fiji</option><option value="FK">Falkland Islands (Malvinas)</option><option value="FM">Micronesia</option><option value="FO">Faroe Islands</option><option value="FR">France</option><option value="FX">France, Metropolitan</option><option value="GA">Gabon</option><option value="GD">Grenada</option><option value="GE">Georgia</option><option value="GF">French Guinea</option><option value="GH">Ghana</option><option value="GI">Gibraltar</option><option value="GL">Greenland</option><option value="GM">Gambia</option><option value="GN">Guinea</option><option value="GP">Guadeloupe</option><option value="GQ">Equatorial Guinea</option><option value="GR">Greece</option><option value="GS">South Georgia And South Sandwich Islands</option><option value="GT">Guatemala</option><option value="GU">Guam</option><option value="GW">Guinea-Bissau</option><option value="GY">Guyana</option><option value="HK">Hong Kong</option><option value="HM">Heard And McDonald Islands</option><option value="HN">Honduras</option><option value="HR">Croatia</option><option value="HT">Haiti</option><option value="HU">Hungary</option><option value="ID">Indonesia</option><option value="IE">Ireland</option><option value="IL">Israel</option><option value="IN">India</option><option value="IO">British Indian Ocean Territory</option><option value="IQ">Iraq</option><option value="IR">Iran</option><option value="IS">Iceland</option><option value="IT">Italy</option><option value="JM">Jamaica</option><option value="JO">Jordan</option><option value="JP">Japan</option><option value="KE">Kenya</option><option value="KG">Kyrgyzstan</option><option value="KH">Cambodia</option><option value="KI">Kiribati</option><option value="KM">Comoros</option><option value="KN">Saint Kitts And Nevis</option><option value="KP">North Korea</option><option value="KR">South Korea</option><option value="KW">Kuwait</option><option value="KY">Cayman Islands</option><option value="KZ">Kazakhstan</option><option value="LA">Laos</option><option value="LB">Lebanon</option><option value="LC">Saint Lucia</option><option value="LI">Liechtenstein</option><option value="LK">Sri Lanka</option><option value="LR">Liberia</option><option value="LS">Lesotho</option><option value="LT">Lithuania</option><option value="LU">Luxembourg</option><option value="LV">Latvia</option><option value="LY">Libya</option><option value="MA">Morocco</option><option value="MC">Monaco</option><option value="MD">Moldova</option><option value="ME">Montenegro</option><option value="MG">Madagascar</option><option value="MH">Marshall Islands</option><option value="MK">North Macedonia</option><option value="ML">Mali</option><option value="MM">Myanmar (Burma)</option><option value="MN">Mongolia</option><option value="MO">Macau</option><option value="MP">Northern Mariana Islands</option><option value="MQ">Martinique</option><option value="MR">Mauritania</option><option value="MS">Montserrat</option><option value="MT">Malta</option><option value="MU">Mauritius</option><option value="MV">Maldives</option><option value="MW">Malawi</option><option value="MX">Mexico</option><option value="MY">Malaysia</option><option value="MZ">Mozambique</option><option value="NA">Namibia</option><option value="NC">New Caledonia</option><option value="NE">Niger</option><option value="NF">Norfolk Island</option><option value="NG">Nigeria</option><option value="NI">Nicaragua</option><option value="NL">Netherlands</option><option value="NO">Norway</option><option value="NP">Nepal</option><option value="NR">Nauru</option><option value="NU">Niue</option><option value="NZ">New Zealand</option><option value="OM">Oman</option><option value="PA">Panama</option><option value="PE">Peru</option><option value="PF">French Polynesia</option><option value="PG">Papua New Guinea</option><option value="PH">Philippines</option><option value="PK">Pakistan</option><option value="PL">Poland</option><option value="PM">Saint Pierre And Miquelon</option><option value="PN">Pitcairn</option><option value="PR">Puerto Rico</option><option value="PT">Portugal</option><option value="PW">Palau</option><option value="PY">Paraguay</option><option value="QA">Qatar</option><option value="RE">Reunion</option><option value="RO">Romania</option><option value="RS">Serbia</option><option value="RU">Russia</option><option value="RW">Rwanda</option><option value="SA">Saudi Arabia</option><option value="SB">Solomon Islands</option><option value="SC">Seychelles</option><option value="SD">Sudan</option><option value="SE">Sweden</option><option value="SG">Singapore</option><option value="SH">Saint Helena</option><option value="SI">Slovenia</option><option value="SJ">Svalbard And Jan Mayen</option><option value="SK">Slovak Republic</option><option value="SL">Sierra Leone</option><option value="SM">San Marino</option><option value="SN">Senegal</option><option value="SO">Somalia</option><option value="SR">Suriname</option><option value="ST">Sao Tome And Principe</option><option value="SV">El Salvador</option><option value="SY">Syria</option><option value="SZ">Swaziland</option><option value="TC">Turks And Caicos Islands</option><option value="TD">Chad</option><option value="TF">French Southern Territories</option><option value="TG">Togo</option><option value="TH">Thailand</option><option value="TJ">Tajikistan</option><option value="TK">Tokelau</option><option value="TM">Turkmenistan</option><option value="TN">Tunisia</option><option value="TO">Tonga</option><option value="TP">East Timor</option><option value="TR">Turkey</option><option value="TT">Trinidad And Tobago</option><option value="TV">Tuvalu</option><option value="TW">Taiwan</option><option value="TZ">Tanzania</option><option value="UA">Ukraine</option><option value="UG">Uganda</option><option value="UK">United Kingdom</option><option value="UM">United States Minor Outlying Islands</option><option value="US" selected="selected">United States</option><option value="UY">Uruguay</option><option value="UZ">Uzbekistan</option><option value="VA">Vatican City (Holy See)</option><option value="VC">Saint Vincent And The Grenadines</option><option value="VE">Venezuela</option><option value="VG">Virgin Islands (British)</option><option value="VI">Virgin Islands (US)</option><option value="VN">Vietnam</option><option value="VU">Vanuatu</option><option value="WF">Wallis And Futuna Islands</option><option value="WS">Western Samoa</option><option value="XK">Kosovo</option><option value="YE">Yemen</option><option value="YT">Mayotte</option><option value="ZA">South Africa</option><option value="ZM">Zambia</option><option value="ZW">Zimbabwe</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label>Your City <small>(required)</small></label>
                                                                <input type="text" name="city" class="form-control" placeholder="New York">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6" style="padding-left: 0;">
                                                            <div class="form-group">
                                                                <label>Your Postal Code</label>
                                                                <input type="text" name="zipCode" class="form-control" placeholder="55407">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label>About Me</label>
                                                        <textarea type="text" name="description" class="form-control" placeholder="Describe about yourself..."></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="wizard-footer">
                                        <div class="pull-right">
                                            <input type='button' class='btn btn-next btn-fill btn-warning btn-wd' name='next' value='Next' />
                                            <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd' name='finish' value='Finish' />
                                        </div>

                                        <div class="pull-left">
                                            <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Previous' />
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </form>
                            </div>
                        </div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div><!-- end row -->
		</div> <!--  big container -->

	    <div class="footer">
	        <div class="container text-center">
	            Aleardy Have An Account? Login <a href="https://hushcupid.com/login">here.</a>
	        </div>
	    </div>
	</div>

</body>

	<!--   Core JS Files   -->
	<script src="{{asset('js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('js/jquery.bootstrap.wizard.js')}}" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="{{asset('js/paper-bootstrap-wizard.js')}}" type="text/javascript"></script>

	<!--  More information about jquery.validate here: https://jqueryvalidation.org/	 -->
	<script src="{{asset('js/jquery.validate.min.js')}}" type="text/javascript"></script>

</html>
