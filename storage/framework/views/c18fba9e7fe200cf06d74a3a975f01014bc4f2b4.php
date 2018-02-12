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
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Réinitialisation du mot de passe</div>
      <div class="card-body">
        <div class="text-center mt-4 mb-5">
          <h4>Mot de passe oublié</h4>
          <p>Entrer votre adresse Email et nous vous enverons les instructions à suivre pour réinitialiser votre mot de passe</p>
        </div>
        <form method="POST" action="<?php echo e(route('login')); ?>">
          <?php echo e(csrf_field()); ?>

          <div class="form-group">
            <input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Entrer votre adresse Email">
          </div>
          <button type="submit" class="btn btn-primary btn-block">
              Réinitialisation du mot de passe
          </button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="<?php echo e(route('register')); ?>">S'enregistrer</a>
          <a class="d-block small" href="<?php echo e(route('login')); ?>">Connexion</a>
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