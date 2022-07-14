<?php
defined('BASEPATH') or exit('No direct script access allowed');
$version = "V 1.0.0";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>LandingPage SUCOP</title>

	<style type="text/css">
		::selection {
			background-color: #E13300;
			color: white;
		}

		::-moz-selection {
			background-color: #E13300;
			color: white;
		}

		body {
			background-color: #fff;
			margin: 20px;
			font: 13px/20px normal Helvetica, Arial, sans-serif;
			color: #4F5155;
		}

		a {
			color: #003399;
			background-color: transparent;
			font-weight: normal;
		}

		h1 {
			color: #444;
			background-color: transparent;
			border-bottom: 1px solid #D0D0D0;
			font-size: 19px;
			font-weight: normal;
			margin: 0 0 14px 0;
			padding: 14px 15px 10px 15px;
		}

		code {
			font-family: Consolas, Monaco, Courier New, Courier, monospace;
			font-size: 12px;
			background-color: #f9f9f9;
			border: 1px solid #D0D0D0;
			color: #002166;
			display: block;
			margin: 14px 0 14px 0;
			padding: 12px 10px 12px 10px;
		}

		#body {
			margin: 0 15px 0 15px;
			background: #00416A;
			/* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #E4E5E6, #00416A);
			/* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #E4E5E6, #00416A);
			/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

		}

		p.footer {
			text-align: right;
			font-size: 11px;
			border-top: 1px solid #D0D0D0;
			line-height: 32px;
			padding: 0 10px 0 10px;
			margin: 20px 0 0 0;
		}

		.signinFrm {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 70vh;
		}

		.form {
			background-color: white;
			width: 400px;
			border-radius: 8px;
			padding: 20px 40px;
			box-shadow: 0 10px 25px rgba(92, 99, 105, .2);
		}

		.title {
			font-size: 50px;
			margin-bottom: 50px;
		}

		.inputContainer {
			position: relative;
			height: 45px;
			width: 90%;
			margin-bottom: 17px;
		}

		.input {
			position: absolute;
			top: 0px;
			left: 0px;
			height: 100%;
			width: 100%;
			border: 1px solid #DADCE0;
			border-radius: 7px;
			font-size: 16px;
			padding: 0 20px;
			outline: none;
			background: none;
			z-index: 1;
		}

		/* Hide the placeholder texts (a) */

		::placeholder {
			color: transparent;
		}

		.label {
			position: absolute;
			top: 15px;
			left: 15px;
			padding: 0 4px;
			background-color: white;
			color: #DADCE0;
			font-size: 16px;
			transition: 0.5s;
			z-index: 0;
		}

		.submitBtn {
			display: block;
			margin-left: auto;
			padding: 15px 30px;
			border: none;
			background-color: purple;
			color: white;
			border-radius: 6px;
			cursor: pointer;
			font-size: 16px;
			margin-top: 30px;
		}

		.submitBtn:hover {
			background-color: #9867C5;
			transform: translateY(-2px);
		}

		.input:focus+.label {
			top: -7px;
			left: 3px;
			z-index: 10;
			font-size: 14px;
			font-weight: 600;
			color: purple;
		}

		.input:focus {
			border: 2px solid purple;
		}

		.input:not(:placeholder-shown)+.label {
			top: -7px;
			left: 3px;
			z-index: 10;
			font-size: 14px;
			font-weight: 600;
		}

		.logo img {
			width: 25%;
			height: 15%;
		}
	</style>
</head>

<body>

	<div id="container">
		<h1>Bienvenido</h1>

		<div id="body">
			<div class="signinFrm">
				<form action="<?= base_url() ?>LandingPage/login" method="POST" class="form">
					<div class="logo"><img src="<?= base_url() ?>assets/img/logo.png" alt="Logo"></div>
					<h1 class="title">Login</h1>

					<div class="inputContainer">
						<input type="text" class="input" placeholder="a" id="usuario" name="usuario">
						<label for="" class="label">Username</label>
					</div>

					<div class="inputContainer">
						<input type="password" class="input" placeholder="a" id="clave" name="clave">
						<label for="" class="label">Password</label>
					</div>

					<input type="submit" class="submitBtn" value="Iniciar sesión">
				</form>
			</div>


		</div>

		<p class="footer">Copyright <strong> &copy; 2022</strong>. <?php echo 'Version <strong>' . $version . '</strong>' ?></p>
	</div>

</body>

</html>