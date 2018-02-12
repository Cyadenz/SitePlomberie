<?php $__env->startSection('content'); ?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Bootstrap core CSS-->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="white"><br />
  <div class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Créer un compte</div>
      <div class="card-body">

        <form class="form-horizontal" method="POST" action="<?php echo e(route('register')); ?>">
            <?php echo e(csrf_field()); ?>


          <ol class="breadcrumb">
            <li class="breadcrumb-item ">Identifiants</li>
          </ol>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                <label for="name" class="control-label">Nom</label>

                    <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" placeholder="Entrer votre nom" required>

                    <?php if($errors->has('name')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('name')); ?></strong>
                        </span>
                    <?php endif; ?>
              </div>
              <div class="col-md-6<?php echo e($errors->has('prenom') ? ' has-error' : ''); ?>">
                <label for="prenom" class="control-label">Prénom</label>
                    <input id="prenom" type="text" class="form-control" name="prenom" value="<?php echo e(old('prenom')); ?>" placeholder="Entrer votre prénom" required>
                    <?php if($errors->has('prenom')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('prenom')); ?></strong>
                        </span>
                    <?php endif; ?>
              </div>
            </div>
          </div>

          <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
            <label for="name" class="control-label">Adresse Email</label>

                <input id="email" type="text" class="form-control" name="email" value="<?php echo e(old('email')); ?>" placeholder="Entrer votre adresse Email" required>

                <?php if($errors->has('email')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('email')); ?></strong>
                    </span>
                <?php endif; ?>
          </div>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                <label for="password" class="control-label">Mot de passe</label>

                    <input id="password" type="password" class="form-control" name="password" value="<?php echo e(old('password')); ?>" placeholder="Entrer votre mot de passe" required>

                    <?php if($errors->has('password')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('password')); ?></strong>
                        </span>
                    <?php endif; ?>
              </div>
              <div class="col-md-6">
                <label for="password-confirm" class="control-label">Confirmation</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirmer votre mot de passe" required>
              </div>
            </div>
          </div>

          <ol class="breadcrumb">
            <li class="breadcrumb-item ">Informations personelles</li>
          </ol>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6<?php echo e($errors->has('adresse') ? ' has-error' : ''); ?>">
                <label for="adresse" class="control-label">Adresse</label>

                    <input id="adresse" type="adresse" class="form-control" name="adresse" placeholder="Entrer votre adresse" required>

                    <?php if($errors->has('adresse')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('adresse')); ?></strong>
                        </span>
                    <?php endif; ?>
              </div>
              <div class="col-md-6<?php echo e($errors->has('cp') ? ' has-error' : ''); ?>">
                <label for="cp" class="control-label">Code postal</label>
                    <input id="cp" type="cp" class="form-control" name="cp" placeholder="Entrer votre code postal" required>
                    <?php if($errors->has('cp')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('cp')); ?></strong>
                        </span>
                    <?php endif; ?>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6<?php echo e($errors->has('ville') ? ' has-error' : ''); ?>">
                <label for="ville" class="control-label">Ville</label>

                    <input id="ville" type="ville" class="form-control" name="ville" placeholder="Entrer votre ville" required>

                    <?php if($errors->has('ville')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('ville')); ?></strong>
                        </span>
                    <?php endif; ?>
              </div>
              <div class="col-md-6<?php echo e($errors->has('tel') ? ' has-error' : ''); ?>">
                <label for="tel" class="control-label">Téléphone</label>

                    <input id="tel" type="tel" class="form-control" name="tel" value="<?php echo e(old('tel')); ?>" placeholder="Entrer votre numéro de téléphone" required>
                    <?php if($errors->has('tel')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('tel')); ?></strong>
                        </span>
                    <?php endif; ?>
              </div>
            </div>
          </div><br/>

          <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">
                S'enregistrer
              </button>
          </div>
        </form>

        <div class="text-center">
          <a class="d-block small mt-3" href="<?php echo e(route('login')); ?>">Connexion</a>
          <a class="d-block small" href="<?php echo e(route('oublieMdp')); ?>">Mot de pase oublié ?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>