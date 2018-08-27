<html>
<header>
	<meta charset="utf-8">
	<title>VM</title>
	<style type="text/css">
		html{
			-webkit-animation: fadein 2s; /* Safari, Chrome and Opera > 12.1 */
		       -moz-animation: fadein 2s; /* Firefox < 16 */
		        -ms-animation: fadein 2s; /* Internet Explorer */
		         -o-animation: fadein 2s; /* Opera < 12.1 */
		            animation: fadein 2s;
		}

		@keyframes fadein {
		    from { opacity: 0; }
		    to   { opacity: 1; }
		}

		/* Firefox < 16 */
		@-moz-keyframes fadein {
		    from { opacity: 0; }
		    to   { opacity: 1; }
		}

		/* Safari, Chrome and Opera > 12.1 */
		@-webkit-keyframes fadein {
		    from { opacity: 0; }
		    to   { opacity: 1; }
		}

		/* Internet Explorer */
		@-ms-keyframes fadein {
		    from { opacity: 0; }
		    to   { opacity: 1; }
		}

		/* Opera < 12.1 */
		@-o-keyframes fadein {
		    from { opacity: 0; }
		    to   { opacity: 1; }
		}}
	</style>
</header>
</html><!DOCTYPE html>
<html>
<head>
    
	<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<style type="text/css">
	*{font-family: 'Montserrat', cursive;}
	img{display: block; margin: auto; margin-top: 20px; width: 200px;}
	form{text-align: center; margin-top: 20px;}
	input[type="email"]{border: 1px solid #CCC; width: 250px; height: 25px; padding-left: 10px; border-radius: 3px;}
	input[type="password"]{border: 1px solid #CCC; width: 250px; height: 25px; padding-left: 10px; margin-top: 10px; border-radius: 3px;}
	input[type="submit"]{border: none; width: 80px; height: 30px; margin-top: 20px; border-radius: 3px;}
	input[type="submit"]:hover{background-color: #1E90FF; color: #FFF; cursor: pointer;}
	h2{text-align: center; margin-top: 20px;}
	h3{text-align: center; color: #1E90FF; margin-top: 15px;}	
	a{text-decoration: none; color: #333;}
	</style>
</head>
<body>
	<img src="img/logo.jpg"><br />
	<h2>Entra na sua conta</h2>
	<form method="POST">
		<input type="email" placeholder="Endereço email" name="email"><br />
		<input type="password" placeholder="Palavra-passe" name="pass"><br />
		<input type="submit" value="Entrar" name="entrar">
	</form>
	<h3>Ainda não tem conta?<a href="registar.php"> Crie uma hoje!</a><h3>
 <script language="JavaScript">
var palavra = "Faça novos amigos";
var velocidade = 500;
var valor = 1;
function pisca() {
if (valor == 1) {
texto.innerHTML = palavra;
valor=0;
} else {
texto.innerHTML = "";
valor=1;
}
setTimeout("pisca();",velocidade);
}
</script>
<body onload="pisca();">
<div id="texto"></div>

 </body>
</html>
