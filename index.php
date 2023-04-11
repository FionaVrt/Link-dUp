<!DOCTYPE html>
	<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="asset/css/style.css">
		
		<title>Link'dUp</title>
	</head>
	<body>
		<!-- Barre de recherche -->
		<nav>
		<img src="asset/css/img/Logo+Link'dUp2.png" class="logo" />
		<div class="i_nav">
			<input type="search" placeholder="Recherche" />
		<div class="parametre"><a href="parametre.php"><img src="asset/css/img/gear.svg" alt="parametre"></a></div>
		<button id="log"><a href="login.php">login</a></button>
		<button id="singn"><a href="Sign up.php">Inscription</a></button>
		</div>	
		</nav>
		<!-- modal pour l'inscription/connexion -->
		<div class="modal" id="modal">
			Veuillez vous inscrire ou vous connecter pour continuer.
		  </div>
		<section id="block">
			<div class="accueil">
			<div class="accueil-image">
				<img src="asset/css/img/house.svg" alt="Accueil" />
			</div>
			<div class="accueil-texte">
			<p>Accueil</p>
			</div>
		</div>
			<div class="messages">
			<div class="messages-image">
				<img src="asset/css/img/chat.svg" alt="Messages" />
			</div>
			<div class="message-texte">
				<p>Messages</p>
			</div>
		</div>
			<div class="profil">
			<div class="profil-image">
			<img src="asset/css/img/person-circle.svg" alt="profil" />
			</div>
			<div class="profil-texte">
			<a href="profil.php">Profil</a>
			</div>
		</div>
		</section>
		<!-- pour la liste de tag -->
		<div id="tag-list">
			<button class="tag-btn" data-tag="tag1">Tag 1</button>
			<button class="tag-btn" data-tag="tag2">Tag 2</button>
			<button class="tag-btn" data-tag="tag3">Tag 3</button>
		</div>
		<!-- Pour les post -->
		<div class="post tag1">
			<div class="card">
				<div class="card-header">
					<div class="card-header-image-round">
						<img src="asset/css/img/stefan-stefancik-QXevDflbl8A-uns.jpg" alt="">
					</div>
					<div class="card-header-name">
						<p id="p_user">@fio1145</p>
					</div>
				</div>
				<div class="card-body">
					<img src="" alt="publication">
					<p class="card-body-description">
					<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic similique dolore non nisi? Incidunt similique
						earum soluta, quam, minima ratione porro necessitatibus harum, unde at nulla mollitia? Eos, aliquid quo.</p>
					</p>
					<div class="card-body-actions">
						<button class="card-body-action-like"><img src="asset/css/img/suit-heart.svg" alt=""></button>
						<button class="card-body-action-reset">Reset</button>
					</div>
				</div>
			</div><br>
		</div>
		<div class="post tag2">
			<div class="card">
				<div class="card-header">
					<div class="card-header-image-round">
						<img src="asset/css/img/stefan-stefancik-QXevDflbl8A-uns.jpg" alt="">
					</div>
					<div class="card-header-name">
						<p id="p_user">@fio1145</p>
					</div>
				</div>
				<div class="card-body">
					<img src="" alt="publication">
					<p class="card-body-description">
					<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic similique dolore non nisi? Incidunt similique
						earum soluta, quam, minima ratione porro necessitatibus harum, unde at nulla mollitia? Eos, aliquid quo.</p>
					</p>
					<div class="card-body-actions">
						<button class="card-body-action-like"><img src="asset/css/img/suit-heart.svg" alt=""></button>
						<button class="card-body-action-reset">Reset</button>
					</div>
				</div>
			</div><br>
		</div>
		<div class="post tag3">
			<div class="card">
				<div class="card-header">
					<div class="card-header-image-round">
						<img src="asset/css/img/stefan-stefancik-QXevDflbl8A-uns.jpg" alt="">
					</div>
					<div class="card-header-name">
						<p id="p_user">@fio1145</p>
					</div>
				</div>
				<div class="card-body">
					<img src="" alt="publication">
					<p class="card-body-description">
					<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic similique dolore non nisi? Incidunt similique
						earum soluta, quam, minima ratione porro necessitatibus harum, unde at nulla mollitia? Eos, aliquid quo.</p>
					</p>
					<div class="card-body-actions">
						<button class="card-body-action-like"><img src="asset/css/img/suit-heart.svg" alt=""></button>
						<button class="card-body-action-reset">Reset</button>
					</div>
				</div>
			</div><br>
		</div>
		
		<!-- Modal pour supprimier un post -->
		<button id="delete-button"><img src="asset/css/img/trash3.svg" alt=""></button>
		<div id="confirmation-panel">
			<p>Êtes-vous sur de vouloir supprimmer?</p>
			<button id="confirm-button">Oui</button>
			<button id="cancel-button">Non</button>
		</div>
		</div>
		<!-- flotant modal -->
		<div class="modal-container">

			<div class="overlay modal-trigger"></div>

			<div class="modal" role="dialog" aria-labelledby="modalTitle" aria-describedby="dialogDesc">
			
				<h1 id="modalTitle">Nouveau poste</h1>
				<form action="post"> 
						<div class="i">
							<label for="img">Image:</label>
					        <input type="file"id="img" name="img">
						</div>
						<div>
							<label for="description">description:</label>
							<input type="text"id="description">
						</div>	
				<div>
					<label for="pet-select">Choix de tag:</label>
					<select name="tag" id="tag-select">
					<option value="">--Fait un choix de Tag--</option>
					<option value="lifestyle">lifestyle</option>
					<option value="voyage">Voyage</option>
					<option value="jeux">jeux vidéo</option>
					<option value="">Tecnologie</option>
				</select>
					<button>Publier</button>
				</div>
			</form>
			</div>
		</div>

		<button class="modal-btn modal-trigger"><img src="asset/css/img/plus.svg" alt=""></button>
		<script src="asset/js/inscrit-toi.js"></script>
		<script src="asset/js/localstorage.js"></script>
		<script src="asset/js/supp.js"></script>
		<script src="asset/js/modal.js"></script>
		<script src="asset/js/sidenav.js"></script>
		<script src="asset/js/filtre.js"></script>
	</body>
	</html>
