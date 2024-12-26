<html>
<head>
<title>Login</title>

<link href="asset-admin/css/bootstrap.min.css" rel="stylesheet">
<link href="asset-admin/css/styles.css" rel="stylesheet">

</head>
<body>

<div class="row">
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
      <div class="login-panel panel panel-default">
        <div class="panel-heading">Login</div>
        <div class="panel-body">
          <form role="form" method="post" class="form-horizontal" id="form_login" action="loginproses.php">
            <fieldset>
              <div class="form-group">
                <input class="form-control" placeholder="username" name="username" type="username" autofocus="">
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Password" name="password" type="password" value="">
              </div>
              <div class="checkbox">
              </div>
              <input type="submit" value="Login" class="btn btn-block btn-info" name="login"/></td>
            </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>
</html>

  