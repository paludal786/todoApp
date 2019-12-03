<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>

    <body class="container">

        <h3>Register User</h3>

        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-md-12">
                            <form action="/register" method="POST" >
                                {{ csrf_field() }}
                                <div class="col-md-3">
                                    <label> Enter Your Name </label>
                                    <input class="form-control" name="name" type="text"/>
                              </div>
                                <div class="col-md-3">
                                      <label> Enter Your Email </label>
                                      <input class="form-control" name="email" type="email"/>
                                </div>
                                <div class="col-md-3">
                                       <label>Enter Your Password</label>
                                       <input class="form-control" name="password" type="password"/>
                                </div>
                                    <div class="col-md-3">
                                        <label></label>
                                        <button class="form-control btn btn-info">Submit</button>
                                    </div>
                            </form>
                    </div>
                </div>
            </div>
        </div>

    </body>

</html>






