<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> profile</title>
    <!-- Custom fonts for this template-->
     <link href="{{asset('/customAuth/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{'/customAuth/css/sb-admin-2.min.css'}}" rel="stylesheet">

</head>

<body class="bg-gradient">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-box-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Enter your details</h1>
                            </div>
                            <form class="user" method="POST" action="{{url('home')}}">
                                @csrf
                                @if(session()->has('message'))
                                    <div class="alert alert-success">
                                     {{ session()->get('message') }}
                                     </div>
                                @endif
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="email" class="form-control form-control-user" name="profile_email"
                                            placeholder="Please enter your registered email id">
                                        <span class="text-danger">{{$errors->first('profile_email')}}</span>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control form-control-user" name="phone_number"
                                            placeholder="Phone Number">
                                            <span class="text-danger">{{$errors->first('phone_number')}}</span>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="address"
                                        placeholder="Address">
                                        <span class="text-danger">{{$errors->first('address')}}</span>

                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user"
                                            name="state" placeholder="State">
                                            <span class="text-danger">{{$errors->first('state')}}</span>

                                    </div>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control form-control-user"
                                            name="pincode" placeholder="Pincode">
                                            <span class="text-danger">{{$errors->first('pincode')}}</span>

                                    </div>
                                    <div class="mx-auto" style="width: 530px; margin-top:10px;">
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                    {{ __('Submit') }}
                                    </button>  
                                    <hr>
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

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>