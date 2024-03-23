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



    <div class=" register" style="
    min-height: 100vh;
">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
                <h3>Quotation</h3>

                <a   onclick="logout()">logout</a>

            </div>
            <div class="col-md-9 register-right">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Quotations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" 4 aria-controls="profile" aria-selected="false">New Quotation</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Quotation</h3>

                        <div class="container">
                        <table class="table" style="    margin-top: 14rem;">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Q.no</th>
                                    <th scope="col">client name</th>
                                    <th scope="col">date</th>
                                    <th scope="col">Units</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if (!empty($data)) {
                                    foreach ($data as $key => $value) { ?>
                                        <tr>
                                            <th scope="row"><?= $key + 1; ?></th>
                                            <td colspan=""><?= $value->q_no ?></td>
                                            <td colspan=""><?= $value->client_name ?></td>
                                            <td colspan=""><?= $value->date ?></td>
                                            <td colspan=""><?= implode(" , ", unserialize($value->units)) ?></td>
                                        </tr>
                                    <?php  }
                                } else { ?>
                                    <tr>
                                        <td colspan="5">No Data Found</td>
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                        </div>

                    </div>
                    <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3 class="register-heading">Add new Quotation</h3>
                        <form action="">

                            <div class="row register-form">
                                <div class="col-md-6">


                                    <div class="form-group">
                                        <label for="">Quotation number *</label>
                                        <input name="q_no" required maxlength="10" minlength="5" class="form-control" placeholder="Quotation number *" value="" />
                                    </div>

                                    <div class="form-group">
                                        <label for="">project manager Approval *</label>

                                        <select class="form-control " name="pm_approval" id="approval">
                                            <option value="0">not applicable</option>
                                            <option value="1">applicable</option>
                                        </select>
                                    </div>

                                    <div class="form-group pm" style="display: none;">
                                        <label for="">PM name *</label>
                                        <input name="pm_name" maxlength="10" minlength="5" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="">date *</label>
                                        <input name="date" type="date" required class="form-control" placeholder="Date *" value="" />
                                    </div>

                                    <div class="form-group">
                                        <label for="">Client name *</label>
                                        <input name="client_name" required maxlength="10" minlength="5" class="form-control" value="" />
                                    </div>

                                </div>
                                <div class="col-12 custom-files custom-store">
                                    <div class="custom custom-file row" style="display: flex;">
                                        <div class="col-9">
                                            <input type="file" class="custom-file-input" id="customFile" name="file[]">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                        <div class="col-2">
                                            <a class="btn btn-sm add-more">+</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 unittype">
                                    <div class="form-group">
                                        <label for="">Unit *</label>
                                        <select name="unittype" class="form-control" id="unittype">
                                            <option value="0">Single</option>
                                            <option value="1">Multiple</option>
                                        </select>
                                    </div>

                                    <div class=" custom-units row" style="display: flex;">
                                        <div class="col-9">
                                            <input class="form-control" name="units[]">
                                        </div>
                                        <div class="col-2">
                                            <a class="btn btn-sm add-units">+</a>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-6">

                                    <input type="submit" name="formaction" class="btnRegister" value="Save">
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
            /* margin-top: 3%; */
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
          function logout() {
            if (confirm("Are You Sure You want to logout ?")) {

                $.get("user/logout", () => {
                    location.reload()
                })
            }
        }


        $(".add-units").click(function(e) {
            $(".unittype").append(' <div class=" custom-unit-s row"  style="display: flex;">' +
                '<div class="col-9">' +
                ' <input  class="form-control"    name="units[]">' +
                '  </div>' +
                '<div class="col-2">' +
                '    <a class="btn btn-sm remove-units">X</a>' +
                '</div>' +
                ' </div>')
        })
        $(".add-units").hide()
        $(document).on('change', "#unittype", function(e) {
            $(this).val() == 0 ? $(".custom-unit-s").remove() : " ";
            $(this).val() == 0 ? $(".add-units").hide() : $(".add-units").show();
        })
        $(document).on('click', ".remove-units", function(e) {
            $(this).closest(".custom-unit-s").remove()
        })
        $(".add-more").click(function(e) {
            $(".custom-files").append('<div class="custom custom-file row"  style="display: flex;"><div class="col-9"><input type="file" class="custom-file-input"   name="file[]"><label class="custom-file-label" for="customFile">Choose file</label></div><div class="col-2">' +
                '<a class="btn btn-sm closethis"> X </a></div></div>')


        })
        $(document).on('click', ".closethis", function(e) {
            $(this).closest(".custom-file").remove()
        })
        $("#approval").change(function(e) {
            $(this).val() == 1 ? $(".pm").show() : $(".pm").hide();

        })

        $(document).on('submit', "form", function(e) {

            e.preventDefault()

            var formData = new FormData(this);
            console.log(formData);
            console.log($(this).serialize())
            $.ajax({
                url: "user/save_quotation",
                type: 'POST',
                data: formData,
                success: function(response) {
                    alert(response);
                    location.reload()
                },
                contentType: false, // Set content type to false
                cache: false,
                processData: false,
            })
        })

        $(document).on('change', ".custom-file-input", function(e) {

            var fileName = $(this).val().split("\\").pop();
            $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
    </script>

    </div>
</body>

</html>