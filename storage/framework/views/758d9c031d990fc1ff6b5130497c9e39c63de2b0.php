<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Site de plomberie spécialisé dans les produits de plomberie sanitaire pour les particuliers et les professionnels</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo e(asset('css/modern-business.css')); ?>" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  </head>

  <body>

<div id="page">

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="/"><i class="fa fa-home"></i> Accueil</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="/apropos">À propos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/services">Nos services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/devis">Devis</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contacter">Nous contacter</a>
            </li>
            <!--<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPortfolio" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Portfolio
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPortfolio">
                <a class="dropdown-item" href="portfolio-1-col.html">1 Column Portfolio</a>
                <a class="dropdown-item" href="portfolio-2-col.html">2 Column Portfolio</a>
                <a class="dropdown-item" href="portfolio-3-col.html">3 Column Portfolio</a>
                <a class="dropdown-item" href="portfolio-4-col.html">4 Column Portfolio</a>
                <a class="dropdown-item" href="portfolio-item.html">Single Portfolio Item</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Blog
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="blog-home-1.html">Blog Home 1</a>
                <a class="dropdown-item" href="blog-home-2.html">Blog Home 2</a>
                <a class="dropdown-item" href="blog-post.html">Blog Post</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Other Pages
              </a>   
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                <a class="dropdown-item" href="full-width.html">Full Width Page</a>
                <a class="dropdown-item" href="sidebar.html">Sidebar Page</a>
                <a class="dropdown-item" href="faq.html">FAQ</a>
                <a class="dropdown-item" href="404.html">404</a>
                <a class="dropdown-item" href="pricing.html">Pricing Table</a>
              </div>
            </li>-->
          </ul>
        </div>

        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            <!-- Authentication Links -->
              <?php if(auth()->guard()->guest()): ?>
                <li><a class="nav-link" href="<?php echo e(route('login')); ?>">Se connecter</a></li>
                <li><a class="nav-link" href="<?php echo e(route('register')); ?>">S'enregistrer</a></li>
              <?php else: ?>
                <li class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                    <?php echo e(Auth::user()->name); ?> <?php echo e(Auth::user()->prenom); ?> <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                    <li>
                      <a class="dropdown-item" href="<?php echo e(route('monProfil')); ?>"> 
                        <i class="fa fa-user fa-fw" aria-hidden="true"></i>&nbsp;Mon profil
                      </a>
                      <?php if(Auth::user()->admin): ?>

                      <a class="dropdown-item" href="<?php echo e(route('adminDashboard')); ?>"> 
                        <i class="fa fa-cog fa-fw" aria-hidden="true"></i>&nbsp;Administration
                      </a>
                      
                      <?php endif; ?>

                      <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                          onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out fa-fw"></i>&nbsp;Se déconnecter
                      </a>
                      <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                        <?php echo e(csrf_field()); ?>

                      </form>
                    </li>
                  </ul>
                </li>
              <?php endif; ?>   
            </li>
          </ul>
        </div>

      </div>
    </nav>

<div id="content">
  <?php echo $__env->yieldContent('content'); ?>
</div>

    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; 2018 AG2 Plomberie - Rénovation</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.bundle.min.js"></script>

</div>

  </body>

</html>