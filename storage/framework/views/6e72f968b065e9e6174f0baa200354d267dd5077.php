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

<body class="white"><br /><br /><br /><br /><br /><br />
  <div class="container">
    <div class="card card-login mx-auto mt-5" >
      <div class="card-header">Se connecter</div>
      <div class="card-body">
		<form class="form-horizontal" method="POST" action="<?php echo e(route('login')); ?>">
        	<?php echo e(csrf_field()); ?>


        	<div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
            	<label for="email" class="control-label">Adresse Email</label>

                	<input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" placeholder="Entrer votre adresse Email" required autofocus>

                	<?php if($errors->has('email')): ?>
                    	<span class="help-block">
                        	<strong><?php echo e($errors->first('email')); ?></strong>
                   	</span>
                	<?php endif; ?>
        	</div>

            <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                <label for="password" class="control-label">Mot de passe</label>

                    <input id="password" type="password" class="form-control" name="password" placeholder="Entrer votre mot de passe" required>

                    <?php if($errors->has('password')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('password')); ?></strong>
                        </span>
                    <?php endif; ?>
            </div>

            <div class="form-group">
                <div class="form-check">
                    <div class="checkbox">
                        <label class="form-check-label ">
                            <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Se souvenir de moi
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">
                        Connexion
                    </button>
            </div>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="<?php echo e(route('register')); ?>">S'enregistrer</a>
          <a class="d-block small" href="<?php echo e(route('password.request')); ?>">Mot de pase oublié ?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>