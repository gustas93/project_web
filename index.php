<!DOCTYPE html>
<html>
<head>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<meta charset="UTF-8"> 
	<title>Mini Dronų parduotuvė</title>

</head>



<body style="background-color:#f8f8fe">
<br>

<div id="top">
  <div class="row">
  	<div class="col-lg-1">
  	</div>

  	<div class="col-m-6" class ="text-right">
		<ul class="nav">
		  <li class="nav-item">
		    <a class="nav-link active" href="#about">Apie mus</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="#product">Produktas</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="#order">Užsakymo forma</a>
		  </li>
		  <li class="nav-item">
		    <a class="nav-link" href="#contact">Kontaktai</a>
		  </li>
		</ul>
    </div>		
  </div>
</div>
<br>

<h1 class="text-center"> Sveiki atvykę! </h1>
<h4 class="text-center"> Šioje svetainėje rasite <strong><em> mažiausią mini dronų</em></strong> pasirinkimą! </h4>
<img src = "img/Untitled.png" class="rounded mx-auto d-block" width="1120" height="240" />


<div id="about">
  <div class="jumbotron jumbotron-fluid">
		<div class="container">
      <h5 class="display-3">Apie mus</h5>
      <hr class="my-4">
      <p class="lead">Lietuvoje mes esame jau nuo 2010-ųjų, ir teikiame paslaugas visiems Lietuvos miestams. Pardavinejame kokybiškiausius ir labiausiai rinkos poreikius tenkinančius <strong> mini dronus</strong> -<em> "Rolling Spider quadcopter" mini drone </em>. Mūsų komandos šūkis - "Pamatyk kitu kampu". Dėl šios priežasties mes ir pardavinėjame šį produktą su puikia geriausios raiškos VGA kamera. Nors savo fizinės parduotuvės neturime, tačiau bendradarbiaujant su siuntų kompanijomis prekybą vystome visoje Lietuvoje!</p>
      <a class="nav-link" href="#order">Užsisakyk!</a>
    </div>
  </div>
</div>

<br>

<div class="row">
  <div class="col-lg-1">
  </div>

  <div class="col-lg-5">
	  <div id="product">
		  <p><strong><em> "Rolling Spider quadcopter"</strong> minidrone</em> - kaina tik <strong>9 eurai!</strong> </p>
	    <ul>
		    <li>Kiekvienam prieinama kaina;</li>
		    <li>Lengvai pilotuojamas su išmaniuju telefonu;</li> 
		    <li>Stabilus skrydis viduje ir lauke;</li>
		    <li>Lengvai prijungiami apsauginiai ratai;</li> 
		    <li>Puiki VGA tipo kamera;</li>
		    <li>Pilnas pakrovimas net per <strong>90 minučių</strong>;</li>
		    <li>Skrydžio laikas net <strong> 8 minutės</strong>!</li> 
      </ul>
    </div>
  </div>


  <div class="col-lg-4">
    <img src = "img/rolling.png" class="rounded mx-auto d-block" width="300" height="220" />
  </div>

  <div class="col-lg-1">
    <a class="nav-link" href="#order">Užsisakyk!</a>
  </div>

</div>



<div id="order">
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-3">UŽSISAKYK DABAR!</h1>
      <hr>
      <p class="lead">Užsakant būtina nurodyti savo vardą, pavardę, telefono numerį, adresą, bei kokių ir kiek dronų norėsite, kitaip prekės negalėsime pristatyti Jums palankiu adresu.</p>



      <form action="create_order.php" name="validate_form" method="post" onsubmit="return (validateForm());">
        <div class="row">
          <div class="col-lg-5">
            <div class="form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="radio" name="drone_order" value="option1" checked /> "Rolling Spider quadcopter" mini drone
            </label>
            </div>
          </div>


          <div class="col-lg-1">
	          <p class="text-right">Kiekis</p>
          </div>


          <div class="col-lg-6">
            <div class="form-check form-check-inline">
              <label class="form-check-label">
                <input class="form-check-input" name="amount" type="radio"  value="1" /> 1
              </label>
            </div>

            <div class="form-check form-check-inline">
             <label class="form-check-label">
               <input class="form-check-input" name="amount" type="radio"  value="2" /> 2
             </label>
            </div>

            <div class="form-check form-check-inline">
              <label class="form-check-label">
                <input class="form-check-input" name="amount" type="radio" value="3" /> 3
              </label>
            </div>

            <div class="form-check form-check-inline">
              <label class="form-check-label">
                <input class="form-check-input" name="amount" type="radio" value="4" /> 4
              </label>
            </div>

            <div class="form-check form-check-inline">
              <label class="form-check-label">
                <input class="form-check-input" name="amount" type="radio"  value="5" /> 5
              </label>
            </div>
          </div>
        </div>


        <h6><small>*Atsiprašome, laikinai spalvos pasirinkimas negalimas, dėl to spalva bus parinkta automatiškai atsitiktiniu būdu</small></h6>
        <br>


        <div class="row">
          <div class="col-lg-6">
            <div class="input-group">
              <span class="input-group-btn">
              </span>
              <input type="text" name="first_name" class="form-control" placeholder="Vardas"  />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="input-group">
              <input type="text" name="last_name" class="form-control" placeholder="Pavardė"  />
              <span class="input-group-btn">
              </span>
            </div>
          </div>
        </div>
        <br>

        <div class="input-group">
            <input type="email" name="email" class="form-control" placeholder="El. pašto adresas" />
              <span class="input-group-addon" />dronas@pavyzdys.com</span>
        </div>
        <br>

        <div class="input group">
        	<input type="text" name="home_address" class="form-control" placeholder="Namų adresas" />
        </div>
        <br>

        <div class="row">
          <div class="col-lg-6">
            <div class="input group">
        	    <input type="text" name="zip" class="form-control" placeholder="Pašto kodas LT-xxxxx" />
            </div>
          </div>
          <br>

          <div class="col-lg-6">
            <div class="input group">
        	    <input type="text" name="phone_number" class="form-control" placeholder="Telefono numeris +370xxxxxxxx"  />
            </div>
          </div>
        </div>


        <br>
        
        <button type="submit" value="submit" name="register" class="btn btn-primary btn-lg btn-block">UŽSAKYTI</button>
                
        <a class="nav-link" href="#top">
          <div class="nav-item">
            <button class="btn btn-secondary" type="reset">Atšaukti</button>
          </div>
        </a>
        

      </form>
    </div> <!--container div-->
  </div><!-- jumbotron div-->
</div><!-- id "order" div-->




<div id="contact">
  <div class="row">
    <div class="col-lg-1">
    </div>

    <div class="col-lg-10">
	    <p class="text-right">
	      <strong>Mūsų kontaktai:</strong><br>
	      Numeris: +3706 00 00 000<br>
	      El. paštas: dronailtu@gmail.com<br>
	      facebook: _dronailtu
      </p>
	  </div>
  </div>
</div>


</body>
<footer>
  <script type="text/javascript">
  
  function validateForm() {
     if(document.validate_form.amount.value === "")
     {
        alert("Nenurodytas kiekis!");
        return false;
     }

     else if(document.validate_form.first_name.value === "")
     {
       alert("Nenurodytas vardas!");
       document.validate_form.first_name.focus();
       return false;
     } 
     else if(document.validate_form.last_name.value === "")
     {
        alert("Nenurodyta pavardė!");
        document.validate_form.last_name.focus();
        return false;
     }
     else if(document.validate_form.email.value === "")
     {
        alert("Nenurodytas elektroninio pašto adresas!");
        document.validate_form.email.focus();
        return false;
     }
     else if(document.validate_form.home_address.value === "")
     {
        alert("Nenurodytas namų adresas!");
        document.validate_form.home_address.focus();
        return false;
     }
     else if(document.validate_form.zip.value === "")
     {
        alert("Nenurodytas pašto kodas!");
        document.validate_form.zip.focus();
        return false;
     }
     else if(document.validate_form.phone_number.value === "")
     {
        alert("Nenurodytas numeris!");
        document.validate_form.phone_number.focus();
        return false;
     }
     
     else{}

     }//function
  
  </script>
</footer>
</html>
