<?php 
/*index*/
function menu(){ ?>
	<nav class="navbar w-100 navbar-expand-lg">
		<div class="container">
			<a class="navbar-brand logo p-0" href="/">
				Biscoder
			</a>
			<button class="navbar-toggler menu-toggle-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="header-nav-icon"></span>
				<span class="header-nav-icon"></span>
				<span class="header-nav-icon"></span>
			</button>
			<div class="ul-cont collapse navbar-collapse ms-0 ms-lg-auto" id="navbarSupportedContent">
				<ul class="navbar-nav navbar-right ms-0 ms-lg-auto mb-2 mb-lg-0">
					<li class="nav-item mx-1">
						<a class="nav-link active" data-scroll="home" href="#home">Inicio</a>
					</li>
					<li class="nav-item mx-1">
						<a class="nav-link" href="aboutme" data-scroll="about">Sobre</a>
					</li>
					<li class="nav-item mx-1">
						<a class="nav-link" href="blog/" data-scroll="blog">Blog</a>
					</li>
					<li class="nav-item mx-1">
						<a class="nav-link" href="#contact" data-scroll="contact">Contacto</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

<?php  }?>
<!--Barra navegacion en blog-->
<?php function menublog(){ ?>
	<nav class="navbar w-100 navbar-expand-lg">
		<div class="container">
			<a class="navbar-brand logo p-0" href="/">
				Biscoder
			</a>
			<button class="navbar-toggler menu-toggle-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="header-nav-icon"></span>
				<span class="header-nav-icon"></span>
				<span class="header-nav-icon"></span>
			</button>
			<div class="ul-cont collapse navbar-collapse ms-0 ms-lg-auto" id="navbarSupportedContent">
				<ul class="navbar-nav navbar-right ms-0 ms-lg-auto mb-2 mb-lg-0">
					<li class="nav-item mx-1">
						<a class="nav-link" data-scroll="home" href="/">Inicio</a>
					</li>	
					<li class="nav-item mx-1">
						<a class="nav-link" href="../aboutme" data-scroll="about">Sobre</a>
					</li>
					<li class="nav-item mx-1">
						<a class="nav-link active" href="../blog/" data-scroll="blog">Blog</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

<?php  }?>

<!--Barra navegacion en aboutme-->
<?php function menuaboutme(){ ?>
	<nav class="navbar w-100 navbar-expand-lg">
		<div class="container">
			<a class="navbar-brand logo p-0" href="/">
				Biscoder
			</a>
			<button class="navbar-toggler menu-toggle-btn" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="header-nav-icon"></span>
				<span class="header-nav-icon"></span>
				<span class="header-nav-icon"></span>
			</button>
			<div class="ul-cont collapse navbar-collapse ms-0 ms-lg-auto" id="navbarSupportedContent">
				<ul class="navbar-nav navbar-right ms-0 ms-lg-auto mb-2 mb-lg-0">
					<li class="nav-item mx-1">
						<a class="nav-link " data-scroll="home" href="/">Inicio</a>
					</li>
					<li class="nav-item mx-1">
						<a class="nav-link active" href="aboutme" data-scroll="blog">Sobre</a>
					</li>
					
					<li class="nav-item mx-1">
						<a class="nav-link" href="blog/" data-scroll="blog">Blog</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

<?php  }?>