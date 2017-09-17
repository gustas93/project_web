<!DOCTYPE html>
<html lang="en">
<head>
    <title>Uzsakymu lentele</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">


</head>
<body style="background-color:#f8f8fe">

<br>
  
  <div class="row">
    <div class="col-lg-1">
    </div>
    <div class="col-lg-10">

  <nav class="navbar navbar-light bg-light justify-content-between">
    <h4 class="navbar-brand">Šiame puslapyje galite matyti padarytus užsakymus</h4>
    <form class="form-inline" method="get">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
    </form>
  </nav>

	  </div>
	</div>


  <div class="row">
    <div class="col-lg-1">
    </div>

    <div class="col-lg-10">

    <?php
        ini_set('display_errors', 'off');
        ini_set ('error_log','C:\\wamp64\\www\\error-save.txt');
        error_reporting(E_ALL);

        $link = mysqli_connect("localhost", "root", "", "praktineuzduotis_db");

        
        if (mysqli_connect_errno()) {
          printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
        }

        
        $query = "SELECT id, first_name, last_name, email, home_address, zip, phone_number, amount FROM orders ORDER BY id desc";

      $id = 'id';
      $first_name = 'first_name';
      $last_name = 'last_name';
      $email = 'email';
      $home_address = 'home_address';
      $zip = 'zip';
      $phone_number = 'phone_number';
      $amount = 'amount';
         

      if ($stmt = mysqli_prepare($link, $query)){
      mysqli_stmt_execute($stmt);

      mysqli_stmt_bind_result($stmt, $id, $first_name, $last_name, $email, $home_address, $zip, $phone_number, $amount);
      
?>
<table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>Nr.</th>
      <th>Vardas</th>
      <th>Pavardė</th>
      <th>El. Paštas</th>
      <th>Namų adresas</th>
      <th>Pašto kodas</th>
      <th>Tel nr.</th>
      <th>Kiekis</th>
    </tr>
  </thead>
  <tbody>
    <?php
      while(mysqli_stmt_fetch($stmt)){





        printf ("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>",
         $id, $first_name, $last_name, $email, $home_address, $zip, $phone_number, $amount);
        }

      mysqli_stmt_close($stmt);
      }


      mysqli_close($link);



    ?>
   
  </tbody>
</table>
    </div>
  </div>


</body>
</html>