<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="assets/logo/icon.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="main/style.css">


    <title>The Sultan Cafe</title>
    <style>
      body {
        padding-top: 200px;
        
      }
		</style>
  </head>
<body >
<div class="container" >
    <div class="row" .text-center>
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-body"> 
				<h2 style="text-muted"><span class="glyphicon glyphicon-certificate"></span> 
				LOGIN PENGGUNA</h2>
				
					<form action="proses-login.php" method="POST">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" required>
                    </div>

                    <input type="submit" name="kirim" value="Login" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Reset" class="btn btn-danger">
                </form>
			</div>		
			</div>
		</div>
    </div>
</div>

<script src="js/bootstrap.js"></script>
    <script src="main/main.js"></script>


</body>
</html>