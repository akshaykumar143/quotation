<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
</head>

<body>



    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
                <h3>Welcome</h3>
                <p>You are 30 seconds away from earning your own money!</p>
                <input type="submit" name="" value="Login" 
                data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"
                /><br />
 
                
            </div>
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Employee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">LOGIN</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Register</h3>
                        <form action="">

                            <div class="row register-form">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" required  name="name"  class="form-control" placeholder="First Name *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" required name="password" class="form-control" placeholder="Password *" value="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" required class="form-control" placeholder="Your Email *" value="" />
                                    </div>
                                    
                                    
                                    <input type="submit" name="formaction" class="btnRegister" value="Register" />
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3 class="register-heading">LOGIN</h3>
                        <form action="">
                            
                            <div class="row register-form">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" required class="form-control"  name="email"  placeholder="Email *" value="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password"  name="password"  required maxlength="10" minlength="5" class="form-control" placeholder="password *" value="" />
                                    </div>
                                    <input type="submit" name="formaction" class="btnRegister" value="Login" >
                                </div>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <style>
            .register {
                background: -webkit-linear-gradient(left, #3931af, #00c6ff);
                margin-top: 3%;
                padding: 3%;
            }

            .register-left {
                text-align: center;
                color: #fff;
                margin-top: 4%;
            }

            .register-left input {
                border: none;
                border-radius: 1.5rem;
                padding: 2%;
                width: 60%;
                background: #f8f9fa;
                font-weight: bold;
                color: #383d41;
                margin-top: 30%;
                margin-bottom: 3%;
                cursor: pointer;
            }

            .register-right {
                background: #f8f9fa;
                border-top-left-radius: 10% 50%;
                border-bottom-left-radius: 10% 50%;
            }

            .register-left img {
                margin-top: 15%;
                margin-bottom: 5%;
                width: 25%;
                -webkit-animation: mover 2s infinite alternate;
                animation: mover 1s infinite alternate;
            }

            @-webkit-keyframes mover {
                0% {
                    transform: translateY(0);
                }

                100% {
                    transform: translateY(-20px);
                }
            }

            @keyframes mover {
                0% {
                    transform: translateY(0);
                }

                100% {
                    transform: translateY(-20px);
                }
            }

            .register-left p {
                font-weight: lighter;
                padding: 12%;
                margin-top: -9%;
            }

            .register .register-form {
                padding: 10%;
                margin-top: 10%;
            }

            .btnRegister {
                float: right;
                margin-top: 10%;
                border: none;
                border-radius: 1.5rem;
                padding: 2%;
                background: #0062cc;
                color: #fff;
                font-weight: 600;
                width: 50%;
                cursor: pointer;
            }

            .register .nav-tabs {
                margin-top: 3%;
                border: none;
                background: #0062cc;
                border-radius: 1.5rem;
                width: 28%;
                float: right;
            }

            .register .nav-tabs .nav-link {
                padding: 2%;
                height: 34px;
                font-weight: 600;
                color: #fff;
                border-top-right-radius: 1.5rem;
                border-bottom-right-radius: 1.5rem;
            }

            .register .nav-tabs .nav-link:hover {
                border: none;
            }

            .register .nav-tabs .nav-link.active {
                width: 100px;
                color: #0062cc;
                border: 2px solid #0062cc;
                border-top-left-radius: 1.5rem;
                border-bottom-left-radius: 1.5rem;
            }

            .register-heading {
                text-align: center;
                margin-top: 8%;
                margin-bottom: -15%;
                color: #495057;
            }
        </style>


<script>



    $(document).on('submit', "form", function (e) {

    e.preventDefault()

    var formData = new FormData(this);
        console.log(formData);
        console.log(     $(this).serialize() )
        $.ajax({
            url: "user/login",
            type: 'POST',
            data: formData,
            success: function (response) {
alert( response);
location.reload()
            },
            contentType: false, // Set content type to false
            cache: false,
            processData: false,
        })
    })
</script>

    </div>
</body>

</html>