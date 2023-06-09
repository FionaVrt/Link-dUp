<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
			crossorigin="anonymous"
		/>
		<link rel="stylesheet" href="asset/css/components/login.css">
		<title>déjà un compte</title>
	</head>
	<body>
		<header>
			<img src="asset/css/img/Logo+Link'dUp2.png" alt="logo">
		</header>
		<!-- pour le page de connection en ayant déjà un compte -->
		<form>
			<h1 id="co_1">Connection</h1>
			<div class="mb-3">
				<label for="exampleInputEmail1" class="form-label">Email address</label>
				<input
					type="email"
					class="form-control"id="exampleInputEmail1"aria-describedby="emailHelp"/>
				<div id="emailHelp" class="form-text">
					We'll never share your email with anyone else.
				</div>
			</div>
			<div class="mb-3">
				<label for="exampleInputPassword1" class="form-label">Password</label>
				<input type="password"class="form-control"id="exampleInputPassword1"/>
		</div>
				<div class="mb-3 form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1" />
				<label class="form-check-label" for="exampleCheck1">Check me out</label>
		</div>
				<button type="submit" class="btn btn-primary">Submit</button>
		</form>
		<div class="img_co">
			<img src="asset/css/img/marten-bjork-FVtG38Cjc_k-unsplash.jpg " alt="">
		</div>
		
		
		<script
		src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
		crossorigin="anonymous"
		></script>
	</body>
</html>