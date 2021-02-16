<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- Fav Icon -->
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="./ressources/logo_icon.png"
		/>
		<!-- link bootstrap -->
		<link rel="stylesheet" href="./style/bootstrap.min.css" />
		<!-- js bootstrap -->
		<script src="./style/bootstrap.min.js" defer></script>
		<script src="./style/dropdown.js" defer></script>
		<!-- Font google -->
		<script
			src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
			integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
			crossorigin="anonymous"
		></script>
		<script
			src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
			integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
			crossorigin="anonymous"
		></script>
		<script
			src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
			integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
			crossorigin="anonymous"
		></script>
		<link rel="preconnect" href="https://fonts.gstatic.com" />
		<link
			href="https://fonts.googleapis.com/css2?family=Chakra+Petch&display=swap"
			rel="stylesheet"
		/>
		<link rel="stylesheet" href="./style/style.css" />
		<link rel="preconnect" href="https://fonts.gstatic.com" />
		<link
			href="https://fonts.googleapis.com/css2?family=Alef&family=Karma&display=swap"
			rel="stylesheet"
		/>
		<!-- Titre appli -->
		<title>Vid&o</title>
	</head>
	<body class="bg-dark">
		<!-- Barre de navigation -->
		<header>
			<nav
				class="navbar navbar-expand-md navbar-dark bg-dark"
				aria-label="barre de nav"
			>
				<div class="container-fluid">
					<!-- Logo -->
					<a class="navbar-brand" href="./index.php">
						<img
							class="w-25"
							src="./ressources/logo_blanc.png"
							alt=""
						/>
					</a>
					<button
						class="navbar-toggler"
						type="button"
						data-bs-toggle="collapse"
						data-bs-target="#navbarsExample04"
						aria-controls="navbarsExample04"
						aria-expanded="false"
						aria-label="Toggle navigation"
					>
						<span class="navbar-toggler-icon"></span>
					</button>
					<div
						class="collapse navbar-collapse justify-content-end"
						id="navbarsExample04"
					>
						<ul class="navbar-nav ml-auto mb-2 mb-md-0">
							<li class="nav-item mx-3">
								<!-- Bouton connexion -->
								<a class="nav-link" aria-current="page" href="#"
									>Connexion</a
								>
							</li>
							<li class="nav-item mx-3">
								<!-- Bouton inscription -->
								<a class="nav-link" aria-current="page" href="#"
									>Inscription</a
								>
							</li>
							<li class="nav-item mx-3">
								<!-- Bouton Gestion de profil -->
								<a class="nav-link" aria-current="page" href="#"
									>Gestion de profil</a
								>
							</li>
						</ul>
						<form>
							<!-- Barre de recherche -->
							<input
								class="form-control"
								type="text"
								placeholder="recherche"
								aria-label="Search"
							/>
						</form>
					</div>
				</div>
			</nav>
		</header>

		<main class="container-fluid mt-5">
			<div class="row">
				<!-- Menu Gauche -->
				<section class="col-lg-1 col-sm-12 px-3 position-fixed">
					<div id="section_gauche_accueil" class="btn-group-vertical">
						<!-- Bouton deroulant categorie -->
						<button
							type="button"
							class="btn btn-default dropdown-toggle"
							data-toggle="dropdown"
							aria-haspopup="true"
							aria-expanded="false"
						>
							CATEGORIES
						</button>
						<ul class="dropdown-menu">
							<li><a href="#" title="Lien 1">Cinema</a></li>
							<li><a href="#" title="Lien 2">Theatre</a></li>
							<li><a href="#" title="Lien 3">Musique</a></li>
							<li><a href="#" title="Lien 4">Chant</a></li>
							<li><a href="#" title="Lien 4">Danse</a></li>
							<li><a href="#" title="Lien 4">Mannequinat</a></li>
						</ul>
						<!-- Bouton deroulant Top10/Preference -->
						<button
							type="button"
							class="btn btn-default dropdown-toggle"
							data-toggle="dropdown"
							aria-haspopup="true"
							aria-expanded="false"
						>
							TOP 10/PREFERENCES
						</button>
						<ul class="dropdown-menu">
							<li>
								<a href="#" title="Lien 1">top 10 Cinema</a>
							</li>
							<li>
								<a href="#" title="Lien 2">top 10 Theatre</a>
							</li>
							<li>
								<a href="#" title="Lien 3">top 10 Musique</a>
							</li>
							<li><a href="#" title="Lien 4">top 10 Chant</a></li>
							<li><a href="#" title="Lien 4">top 10 Danse</a></li>
							<li>
								<a href="#" title="Lien 4"
									>top 10 Mannequinat</a
								>
							</li>
						</ul>
						<!-- Bouton deroulant LES VID&ASTES -->
						<button
							type="button"
							class="btn btn-default dropdown-toggle"
							data-toggle="dropdown"
							aria-haspopup="true"
							aria-expanded="false"
						>
							LES VID&ASTES
						</button>
						<ul class="dropdown-menu">
							<li>
								<a href="#" title="Lien 1"
									>top vid&aste Cinema</a
								>
							</li>
							<li>
								<a href="#" title="Lien 2"
									>top vid&aste Theatre</a
								>
							</li>
							<li>
								<a href="#" title="Lien 3"
									>top vid&aste Musique</a
								>
							</li>
							<li>
								<a href="#" title="Lien 4"
									>top vid&aste Chant</a
								>
							</li>
							<li>
								<a href="#" title="Lien 4"
									>top vid&aste Danse</a
								>
							</li>
							<li>
								<a href="#" title="Lien 4"
									>top vid&aste Mannequinat</a
								>
							</li>
						</ul>
					</div>
				</section>
				<!-- Carousel central -->
				<section class="col-9" id="section_droite">
					<div id="carousel">
						<div
							id="carouselExampleControls"
							class="carousel slide"
							data-bs-ride="carousel"
						>
							<div class="carousel-inner">
								<figure class="carousel-item active">
									<div
										class="carousel-caption d-none d-md-block"
									>
										<h5>CINEMA</h5>
									</div>
								</figure>
								<figure class="carousel-item">
									<img
										src="./ressources/im2.jpg"
										class="d-block w-50 justify-content-center"
										alt="..."
									/>
									<div
										class="carousel-caption d-none d-md-block"
									>
										<h5>THEATRE</h5>
									</div>
								</figure>
								<figure class="carousel-item">
									<img
										src="./ressources/im2.jpg"
										class="d-block w-50 justify-content-center"
										alt="..."
									/>
									<div
										class="carousel-caption d-none d-md-block"
									>
										<h5>DANSE</h5>
									</div>
								</figure>
								<figure class="carousel-item">
									<img
										src="./ressources/im2.jpg"
										class="d-block w-50 justify-content-center"
										alt="..."
									/>
									<div
										class="carousel-caption d-none d-md-block"
									>
										<h5>MANNEQUINNAT</h5>
									</div>
								</figure>
								<figure class="carousel-item">
									<img
										src="./ressources/im2.jpg"
										class="d-block w-50"
										alt="..."
									/>
									<div
										class="carousel-caption d-none d-md-block"
									>
										<h5>THEATRE</h5>
									</div>
								</figure>
								<figure class="carousel-item">
									<img
										src="./ressources/im3.jpg"
										class="d-block w-25 justify-content-center"
										alt="..."
									/>
									<div
										class="carousel-caption d-none d-md-block"
									>
										<h5>MUSIQUE</h5>
									</div>
								</figure>
							</div>

							<button
								id="bouton_carousel"
								class="carousel-control-prev"
								type="button"
								data-bs-target="#carouselExampleControls"
								data-bs-slide="prev"
							>
								<span
									class="carousel-control-prev-icon"
									aria-hidden="true"
								></span>
								<span class="visually-hidden">Previous</span>
							</button>

							<button
								id="bouton_carousel"
								class="carousel-control-next"
								type="button"
								data-bs-target="#carouselExampleControls"
								data-bs-slide="next"
							>
								<span
									class="carousel-control-next-icon"
									aria-hidden="true"
								></span>
								<span class="visually-hidden">Next</span>
							</button>
						</div>
					</div>
					<div id="affichage_video_accueil">
						<div id="ligne">
							<h2 >CINEMA</h2>
							<div class="container my-4">
								<hr class="my-4" />

								<!--Carousel Wrapper-->
								<div
									id="multi-item-example"
									class="carousel slide carousel-multi-item"
									data-ride="carousel"
								>
									<!--Controls-->
									
									

									<!--Indicators-->
									<ol class="carousel-indicators">
										<li
											data-target="#multi-item-example"
											data-slide-to="0"
											class="active"
										></li>
										<li
											data-target="#multi-item-example"
											data-slide-to="1"
										></li>
										<li
											data-target="#multi-item-example"
											data-slide-to="2"
										></li>
									</ol>
									<!--/.Indicators-->

									<!--Slides-->
									<div class="carousel-inner" role="listbox">
										<!--First slide-->
										<div class="carousel-item active">
											<div class="row">
												<div class="col-md-4">
													<div class="card mb-2">
														<img
															class="card-img-top"
															src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(34).jpg"
															alt="Card image cap"
														/>
														<div class="carousel-caption d-none d-md-block">
															<h5>dggd</h5>
															<p>.sdsdds</p>
														</div>
													</div>
												</div>

												<div
													class="col-md-4 clearfix d-none d-md-block"
												>
													<div class="card mb-2">
														<img
															class="card-img-top"
															src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(18).jpg"
															alt="Card image cap"
														/>
														<div class="carousel-caption d-none d-md-block">
															<h5>dggd</h5>
															<p>.sdsdds</p>
														</div>
													</div>
												</div>

												<div
													class="col-md-4 clearfix d-none d-md-block"
												>
													<div class="card mb-2">
														<img
															class="card-img-top"
															src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(35).jpg"
															alt="Card image cap"
														/>
														<div class="carousel-caption d-none d-md-block">
															<h5>dggd</h5>
															<p>.sdsdds</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--/.First slide-->

										<!--Second slide-->
										<div class="carousel-item">
											<div class="row">
												<div class="col-md-4">
													<div class="card mb-2">
														<img
															class="card-img-top"
															src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(60).jpg"
															alt="Card image cap"
														/>
														<div class="carousel-caption d-none d-md-block">
															<h5>dggd</h5>
															<p>.sdsdds</p>
														</div>
													</div>
												</div>

												<div
													class="col-md-4 clearfix d-none d-md-block"
												>
													<div class="card mb-2">
														<img
															class="card-img-top"
															src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(47).jpg"
															alt="Card image cap"
														/>
														<div class="carousel-caption d-none d-md-block">
															<h5>dggd</h5>
															<p>.sdsdds</p>
														</div>
													</div>
												</div>

												<div
													class="col-md-4 clearfix d-none d-md-block"
												>
													<div class="card mb-2">
														<img
															class="card-img-top"
															src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(48).jpg"
															alt="Card image cap"
														/>
														<div class="carousel-caption d-none d-md-block">
															<h5>dggd</h5>
															<p>.sdsdds</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--/.Second slide-->

										<!--Third slide-->
										<div class="carousel-item">
											<div class="row">
												<div class="col-md-4">
													<div class="card mb-2">
														<img
															class="card-img-top"
															src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(53).jpg"
															alt="Card image cap"
														/>
														<div class="carousel-caption d-none d-md-block">
															<h5>dggd</h5>
															<p>.sdsdds</p>
														</div>
													</div>
												</div>

												<div
													class="col-md-4 clearfix d-none d-md-block"
												>
													<div class="card mb-2">
														<img
															class="card-img-top"
															src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(45).jpg"
															alt="Card image cap"
														/>
														<div class="carousel-caption d-none d-md-block">
															<h5>dggd</h5>
															<p>.sdsdds</p>
														</div>
													</div>
												</div>

												<div
													class="col-md-4 clearfix d-none d-md-block"
												>
													<div class="card mb-2">
														<img
															class="card-img-top"
															src="https://mdbootstrap.com/img/Photos/Horizontal/Food/4-col/img%20(51).jpg"
															alt="Card image cap"
														/>
														<div class="carousel-caption d-none d-md-block">
															<h5>dggd</h5>
															<p>.sdsdds</p>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!--/.Third slide-->
									</div>
									<!--/.Slides-->
								</div>
								<!--/.Carousel Wrapper-->
							</div>
						</div>
					</div>
				</section>
			</div>
		</main>
	</body>
    <footer class="pb-0 mb-0">
        <p>copyright</p>
    </footer>
</html>
