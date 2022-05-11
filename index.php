
<?php 
	$siteName = "Погодник"; 
?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css"
	integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <title><?php echo $siteName ?></title>
  </head>
  <body class="body">

  	<div class="preloader">
  		<span></span>
  	</div>

    <nav class="navbar navbar-expand-md sticky-top">
	  <a class="navbar-brand" href="#"><i class="fa fa-umbrella"></i> <?php echo $siteName ?></a>
	</nav>

	<div class="main">  <!-- main включает в себя основную часть сайта, погода в Москве, Питере и в Новосибирске -->
		<div class="main-container">
			<div class="row">
				<div class="col-md-4">
					<a href="citys/moscow.php" class="link-to-city" style="text-decoration: none;">
						<div class="pogodnik-card-primer" id="moscow">
						<div class="pogodnik-card-inner">
							<p class="pogodnik-card-title-primer moscow">Москва</p>
							<p><span class="pogoda-gradus-primer moscow-gradus">Загрузка</span> <i class="fa fa-sun" style="font-size: 40px;"></i></p>
							<div class="data-inner" style="opacity: 85%">
								<p>Ветер: <span class="moscow-wind"></span></p>
								<p><span class="moscow-hum"></span></p>
								<p><span class="moscow-pressure"></span></p>
							</div>
							<hr>
							<div class="pogodnik-card-desc-primer moscow-desc">
								
							</div>
						</div>
					</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="citys/sankt.php" class="link-to-city" style="text-decoration: none;">
						<div class="pogodnik-card-primer" id="sankt">
						<div class="pogodnik-card-inner">
							<p class="pogodnik-card-title-primer sankt">Санкт-Петербург</p>
							<p><span class="pogoda-gradus-primer sankt-gradus">Загрузка</span> <i class="fa fa-sun" style="font-size: 40px;"></i></p>
							<div class="data-inner" style="opacity: 85%">
								<p>Ветер: <span class="sankt-wind"></span></p>
								<p><span class="sankt-hum"></span></p>
								<p><span class="sankt-pressure"></span></p>
							</div>
							<hr>
							<div class="pogodnik-card-desc-primer sankt-desc">
								
							</div>
						</div>
					</div>
					</a>
				</div>
				<div class="col-md-4">
					<a href="citys/novosib.php" class="link-to-city" style="text-decoration: none;">
						<div class="pogodnik-card-primer" id="novosib">
						<div class="pogodnik-card-inner">
							<p class="pogodnik-card-title-primer novosib">Новосибирск</p>
							<p><span class="pogoda-gradus-primer novosib-gradus">Загрузка</span> <i class="fa fa-sun" style="font-size: 40px;"></i></p>
							<div class="data-inner" style="opacity: 85%">
								<p>Ветер: <span class="novosib-wind"></span></p>
								<p><span class="novosib-hum"></span></p>
								<p><span class="novosib-pressure"></span></p>
							</div>
							<hr>
							<div class="pogodnik-card-desc-primer novosib-desc">
								
							</div>
						</div>
					</div>
					</a>
				</div>
			</div>
		</div>
	</div>


	<div class="search-box">  <!-- А этот блок включает в себя поисковую часть сайта -->
		<div class="main-container">
			<p class="search-box-title">Посмотреть погоду в других городах мира  <i class="fa fa-snowflake ml-1" style="color: #089bff"></i></p>
			<div class="row">
				<div class="col-md-5 mb-4">
					<div class="search-form mt-3 shadow-sm">
						<input type="text" id="cityName" class="form-control" placeholder="Город">
						<div class="errors text-danger mt-2 mb-2"></div>
						<button class="btn btn-search btn-block mt-3" id="search-btn"><i class="fa fa-search"></i> Найти</button>
					</div>
				</div>
					<div class="col-md-7 mt-2 mb-5">
					
						<div class="pogodnik-card none">
							<div class="pogodnik-card-inner">
								<p class="pogodnik-card-title"></p>
								<p><span class="pogoda-gradus"></span> <i class="fa fa-sun" style="font-size: 40px; color: #ffe41c"></i></p>
								<div class="data-inner" style="opacity: 85%">
									<p>Ветер: <span class="pogoda-wind"></span></p>
									<p><span class="pogoda-hum"></span></p>
									<p><span class="pogoda-pressure"></span></p>
								</div>
								<hr>
								<div class="pogodnik-card-desc">
									<p class="desc"></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="js/main.js"></script>
  </body>
</html>