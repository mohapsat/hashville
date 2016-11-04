<?php
error_reporting(E_ALL);
$hash_arr = hash_algos();

// echo '<pre>';
// print_r($hash_arr);
// echo '</pre>';

 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hash Away</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="container">
      <div class="row">
          <h3 class="text-muted"></h3>
      </div>
      <div class="row">
        <div class="col-md-3">
          <form class="form" action="" method="post">
            <div class="form-group">
              <input type="text" class="expr form-control" id="expr" name="expr" placeholder="string"></input>
            </div>
            <div class="form-group">
              <input type="text" id="salt" name="salt" class="salt form-control" placeholder="salt (optional)"></input>
            </div>
            <div class="form-group">
              <select class="form-control" name="hash_method" id="hash-method">
                <!-- <option>SHA1</option>
                <option>MD5</option> -->
                <?php
                foreach ($hash_arr as $r) {
                  # code...
                  echo '<option>'.strtoupper($r).'</option> ';
                }
                 ?>
              </select>
            </div>
            <div class="form-group">
              <select class="form-control" name="response_type" id="response-type">
                <option value="json">JSON</option>
                <option value="array">OBJECT ARRAY</option>
                <option value="text">PLAIN TEXT</option>
              </select>
            </div>
            <div class="form-group">
              <input type="button" class="hashbtn btn btn-success" id="hash-btn" value="Hash">
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <textarea name="name" rows="11" cols="40" id="hash-result" placeholder="Result" class="form-control text-primary"></textarea>
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="/hashville/js/hash.js"></script>
  </body>
</html>
