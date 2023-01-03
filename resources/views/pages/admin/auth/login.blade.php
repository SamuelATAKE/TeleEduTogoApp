<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>TeleEduTogoApp - Authentification</title>
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
	<!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />
	<script src="assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" />
	<!-- Icons CSS -->
	<link rel="stylesheet" href="assets/css/icons.css" />
	<!-- App CSS -->
	<link rel="stylesheet" href="assets/css/app.css" />
</head>

<body class="bg-login">
	<!-- wrapper -->
	<div class="wrapper">
		<div class="section-authentication-login d-flex align-items-center justify-content-center">
			<div class="row">
				<div class="col-12 col-lg-10 mx-auto">
					<div class="card radius-15">
						<div class="row no-gutters">
							<div class="col-lg-6">
								<div class="card-body p-md-5">
									<div class="text-center">
										<img src="assets/images/logo-icon.png" width="80" alt="">
										<h3 class="mt-4 font-weight-bold">Bienvenue</h3>
									</div>
									<div class="input-group shadow-sm rounded mt-5">
										<div class="input-group-prepend">	<span class="input-group-text bg-transparent border-0 cursor-pointer"><img src="assets/images/icons/search.svg" alt="" width="16"></span>
										</div>
										<input type="button" class="form-control  border-0" value="Log in with google">
									</div>
									<div class="login-separater text-center"> <span>OU CONNECTEZ-VOUS AVEC VOTRE ADRESSE MAIL</span>
										<hr/>
									</div>
									<div class="form-group mt-4">
										<label>Adresse mail</label>
										<input type="text" class="form-control" placeholder="Entrez votre adresse mail" />
									</div>
									<div class="form-group">
										<label>Mot de passe</label>
										<input type="password" class="form-control" placeholder="Entrez votre mot de passe" />
									</div>
									<div class="form-row">
										<div class="form-group col">
											<div class="custom-control custom-switch">
												<input type="checkbox" class="custom-control-input" id="customSwitch1" checked>
												<label class="custom-control-label" for="customSwitch1">Se souvenir</label>
											</div>
										</div>
										<div class="form-group col text-right"> <a href="authentication-forgot-password.html"><i class='bx bxs-key mr-2'></i>Mot de passe oublié?</a>
										</div>
									</div>
									<div class="btn-group mt-3 w-100">
										<button type="button" class="btn btn-primary btn-block">Se connecter</button>
										<button type="button" class="btn btn-primary"><i class="lni lni-arrow-right"></i>
										</button>
									</div>
									<hr>
									<div class="text-center">
										<p class="mb-0">Vous n'avez pas de compte? <a href="authentication-register.html">Inscrivez-vous</a>
										</p>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<img src="assets/images/login-images/login-frent-img.jpg" class="card-img login-img h-100" alt="...">
							</div>
						</div>
						<!--end row-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->
</body>

</html>