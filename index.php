<!DOCTYPE html>
<html lang="pl">
  <head>
   <meta charset="UTF-8">
   <title>Proste logowania za pomocą PHP, AJAX oraz JSON - dynamiczny formularz logowania </title>
   <meta name="author" content="Dominik Ryńko - http://rynko.pl">
   <link rel="stylesheet" href="css/style.css">
   <meta name="description" content="Proste logowanie a pomocą PHP, AJAX oraz JSON. Sposób na dynamiczne logowanie bez konieczności przeładowywaia strony. Użyty został framework Twitter Boostrap.">
  </head>
 <body>
  <section> 
   <h1><a href="http://rynko.pl/logowanie-za-pomoca-php-oraz-ajax-dynamiczny-skrypt/">Logowanie za pomoca PHP oraz AJAXA</a></h1>
   <h2>Zaloguj się</h2>
    <p>Email: email@domain.com</p>
	<p>Hasło: password</p>
	
   <form action="checker.php" method="POST" class="form">
    <fieldset>
	   <dl>
	    <dt><label for="email">E-mail</label></dt>
         <dd><input type="text" id="email" placeholder="Twój E-mail" ></dd>
		<dt><label for="password">Hasło</label></dt>
         <dd><input type="password" id="password" placeholder="Hasło"></dd>
        <dt><input type="submit" value="Zaloguj się"></dt>
	   </fieldset>
      </form>
  </section>
   
   <script src="script/jquery.js"></script>
   <script src="script/script.js"></script>
 </body>
</html>
