<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Starter Template for Bootstrap</title>
    <style>
        body {
            padding-top: 5rem;
        }

        .starter-template {
            padding: 3rem 1.5rem;
        }
    </style>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
</head>

<body>

    <nav class="navbar navbar-fixed-top navbar-dark bg-inverse">
        <a class="navbar-brand" href="#">Project name</a>
        <ul class="nav navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
            </li>
        </ul>
    </nav>

    <div class="container">

        <div class="starter-template">
            <div class="row">

                <div class="col-lg-12">

                    <form class="form-horizontal" id="forma" method="post">


                        <div class="form-group row">
                            <label class="col-xs-2 col-form-label" for="eposta">Email address</label>
                            <div class="col-xs-10">
                                <input type="text" class="form-control" name="eposta" aria-describedby="textHelp" placeholder="Enter email">
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>

                        </div>

                        <div class="form-group row">
                            <label class="col-xs-2 col-form-label" for="sifre">Password</label>
                            <div class="col-xs-10">
                                <input type="text" class="form-control" name="sifre" aria-describedby="textHelp" placeholder="Password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                                <button type="submit" class="btn btn-primary">Sign in</button>
                            </div>
                        </div>
                    </form>



                </div>

            </div>

            <div class="col-xs-12" id="sonuc"></div>
        </div>
    </div>
    <!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js"></script>


    <script>
        $("#forma").submit(function (event) {

            var d = $("#forma").serialize();
            $.ajax({
                type: 'POST',
                dataType: 'html',
                url: "ajax.php",
                data: $(this).serialize(),
                success: function (result) {
                    $("#sonuc").html(result);
                },
                beforeSend: function () {
                    $("#sonuc").html('<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i>');
                }
            });

            event.preventDefault();
        });
    </script>

</body>

</html>
