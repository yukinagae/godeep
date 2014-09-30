<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GoDeep</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
      <header class="navbar">
        <div class="container">
          <div class="navbar-header">
            <button class="navbar-toggle collapsed" data-target=".bs-navbar-collapse" data-toggle="collapse" type="button">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="../">GoDeep</a>
          </div>

        </div>


      </header>
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <table class="table">
              <thead>
                <tr>
                  <th>id</th>
                  <th>title</th>
                  <th>content</th>
                  <th>count</th>
                  <th>created</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                for($i = 0; $i < 10; $i++) {
                  $now = date('Y年m月d日'); 
                  echo "<tr>
                  <td>$i</td>
                  <td>title$i</td>
                  <td>あるよ</td>
                  <td>0</td>
                  <td>$now</td>
                </tr>";
              }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
  </html>
