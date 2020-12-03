@extends('layout.main')

@section('content')


  <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100 p-t-50 p-b-90">
               

            <form class="login100-form validate-form flex-sb flex-w" method="POST" action="{{ route('register') }}">
                        @csrf
                    <span class="login100-form-title p-b-51">
                        Register
                    </span>

                    <!--   Champ de l'adresse mail -->

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
                    
                            
                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} input100" name="name" value="{{ old('name') }}" required autofocus placeholder="Nom et Prénom">

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif

                <span class="focus-input100"></span>
                                        </div>


                     
                    
                    
<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">

                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} input100" name="email" value="{{ old('email') }}" required placeholder="Adresse Email">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif



                                 <span class="focus-input100"></span>
                                        </div>




            <!--This div above will be used for phone number  -->
                    
                       <div class="wrap-input100  m-b-16" data-validate = "Numero de téléphone obligatoire">

                    <input id="phone" type="text" class="input100" required placeholder="Numéro de telephone " name="phone">
                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" style="color:#a54279">
                                        <strong>
                                       
                                             {{ $errors->first('phone') }}
                                        
                                        </strong>
                                    </span>
                                @endif

                    <span class="focus-input100"></span>
                        </div>



                    <!--   Champ du mot de passe -->

                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
                        
                       
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} input100" name="password" required placeholder="Mot de passe">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif




                       <span class="focus-input100"></span>
                    </div> 

                    <!--   Champ de la verification du mot de passe -->


                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
                  
                       

                         <input id="password-confirm" type="password" class="form-control input100" name="password_confirmation" required placeholder="Confirmer votre mot de passe ">


                       <span class="focus-input100"></span>
                    </div>


                    <!-- Things above are just to delete maybe for the register stuff -->
                   

                   

                    <div class="container-login100-form-btn m-t-17">
                        <button class="login100-form-btn">
                            Register 
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    

    <div id="dropDownSelect1"></div>
    
<!--===============================================================================================-->
    <script src="hosslogin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="hosslogin/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="hosslogin/vendor/bootstrap/js/popper.js"></script>
    <script src="hosslogin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="hosslogin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="hosslogin/vendor/daterangepicker/moment.min.js"></script>
    <script src="hosslogin/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="hosslogin/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="hosslogin/js/main.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="hosslogin/images/icons/favicon.ico"/>
<!--===============================================================================================-->

<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="hosslogin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="hosslogin/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="hosslogin/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="hosslogin/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="hosslogin/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="hosslogin/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="hosslogin/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->



    <link rel="stylesheet" type="text/css" href="hosslogin/css/util.css">


    <link rel="stylesheet" type="text/css" href="hosslogin/css/main.css">
<!--===============================================================================================-->







@endsection
