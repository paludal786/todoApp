<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <style>

        fieldset
	    {
		border: 1px solid #ddd !important;
		margin: 0;
		xmin-width: 0;
		padding: 10px;
		position: relative;
		border-radius:4px;
		background-color:#f5f5f5;
		padding-left:10px!important;
	    }

		legend
		{
			font-size:14px;
			font-weight:bold;
			margin-bottom: 0px;
			width: 35%;
			border: 1px solid #ddd;
			border-radius: 4px;
			padding: 5px 5px 5px 10px;
			background-color: #ffffff;
		}
        </style>
    </head>

    <body class="container">

            <fieldset class="col-md-12">
					<legend>Login</legend>

					<div class="panel panel-default">
						<div class="panel-body">
							<form action="/login" method="POST" >
                                {{ csrf_field() }}
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

				</fieldset>

				<div class="clearfix"></div>

    </body>

</html>






