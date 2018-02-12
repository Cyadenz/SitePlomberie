  <?php $__env->startSection('content'); ?>
       <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Erreur 404
        <small>Page non trouvée</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/">Accueil</a>
        </li>
        <li class="breadcrumb-item active">Erreur 404</li>
      </ol>

      <div class="jumbotron">
        <p>La page que vous recherchez n'a pas été trouvée. Voici quelques liens pour vour aider à retrouver votre page.</p>
        <ul>
          <li>
            <a href="/">Accueil</a>
          </li>
          <li>
            <a href="/apropos">À propos</a>
          </li>
          <li>
            <a href="/services">Nos services</a>
          </li>
          <li>
            <a href="/devis">Devis</a>
          </li>
          <li>
            <a href="/contacter">Nous contacter</a>
          </li>

          <?php if( Auth::check() && Auth::user()->admin == 1): ?>

          <li>
            <em><?php echo e(Auth::user()->name); ?> <?php echo e(Auth::user()->prenom); ?></em>
            <ul>
              <li>
                <a href="<?php echo e(route('monProfil')); ?>">Mon profil</a>
              </li>
              <li>
                <a href="<?php echo e(route('adminDashboard')); ?>">Administration</a>
              </li>
              <li>
                <a href="<?php echo e(route('logout')); ?>"onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Se déconnecter
                </a>
              </li>
          </li>
          <?php elseif( Auth::check() ): ?>
          <li>
            <em><?php echo e(Auth::user()->name); ?> <?php echo e(Auth::user()->prenom); ?></em>
            <ul>
              <li>
                <a href="<?php echo e(route('monProfil')); ?>">Mon profil</a>
              </li>
              <li>
                <a href="<?php echo e(route('logout')); ?>"
                          onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">Se déconnecter
                </a>
              </li>
          </li>
          <?php else: ?>
          <li>
            Connexion
            <ul>
                <li><a  href="<?php echo e(route('login')); ?>">Se connecter</a></li>
                <li><a  href="<?php echo e(route('register')); ?>">S'enregistrer</a></li>
          </li>
          <?php endif; ?>

        </ul>
      </div>
      <!-- /.jumbotron -->

    </div>
    <!-- /.container -->
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>