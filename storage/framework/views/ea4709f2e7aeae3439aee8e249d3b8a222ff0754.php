<?php $__env->startSection('content'); ?>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/profilEdit/<?php echo e($user->id); ?>">Utilisateur</a>
        </li>
        <li class="breadcrumb-item active">Gestion des Utilisateurs</li>
      </ol>
    <div class="card card-register mx-auto mt-5 mb-5">

      <div class="card-header" style="margin-right:7px;"><center><img src="<?php echo e(asset('img/Rouage50.jpg')); ?>" alt="Alternative texte de l'image"/>Édition des informations du compte numéro <?php echo e($user->id); ?></center></div>
      <div class="card-body">

        <form class="form-horizontal" method="POST" action="<?php echo e(route('profilEdit', $user->id)); ?>">
            <?php echo e(csrf_field()); ?>


        <ol class="breadcrumb">
          <li class="breadcrumb-item ">Identifiants</li>
        </ol>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                <label for="name" class="control-label">Nom</label>

                    <input id="name" type="text" class="form-control" name="name" value="<?php echo e($user->name); ?>" required>

                    <?php if($errors->has('name')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('name')); ?></strong>
                        </span>
                    <?php endif; ?>
              </div>
              <div class="col-md-6<?php echo e($errors->has('prenom') ? ' has-error' : ''); ?>">
                <label for="prenom" class="control-label">Prénom</label>
                    <input id="prenom" type="text" class="form-control" name="prenom" value="<?php echo e($user->prenom); ?>" required>
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

                <input id="email" type="text" class="form-control" name="email" value="<?php echo e($user->email); ?>" required>

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

                    <input id="password" type="password" class="form-control" name="password" value="<?php echo e($user->password); ?>" required>

                    <?php if($errors->has('password')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('password')); ?></strong>
                        </span>
                    <?php endif; ?>
              </div>
              <div class="col-md-6">
                <label for="password-confirm" class="control-label">Confirmation</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="<?php echo e($user->password); ?>" required>
              </div>
            </div>
          </div><br/>

     
          <ol class="breadcrumb">
            <li class="breadcrumb-item ">Informations personelles</li>
          </ol>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6<?php echo e($errors->has('adresse') ? ' has-error' : ''); ?>">
                <label for="adresse" class="control-label">Adresse</label>

                    <input id="adresse" type="adresse" class="form-control" name="adresse" value="<?php echo e($user->adresse); ?>" required>

                    <?php if($errors->has('adresse')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('adresse')); ?></strong>
                        </span>
                    <?php endif; ?>
              </div>
              <div class="col-md-6<?php echo e($errors->has('cp') ? ' has-error' : ''); ?>">
                <label for="cp" class="control-label">Code postal</label>
                    <input id="cp" type="cp" class="form-control" name="cp" value="<?php echo e($user->cp); ?>" required>
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

                    <input id="ville" type="ville" class="form-control" name="ville" value="<?php echo e($user->ville); ?>" required>

                    <?php if($errors->has('ville')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('ville')); ?></strong>
                        </span>
                    <?php endif; ?>
              </div>
              <div class="col-md-6<?php echo e($errors->has('tel') ? ' has-error' : ''); ?>">
                <label for="tel" class="control-label">Téléphone</label>

                    <input id="tel" type="tel" class="form-control" name="tel" value="<?php echo e($user->tel); ?>" required>
                    <?php if($errors->has('tel')): ?>
                        <span class="help-block">
                            <strong><?php echo e($errors->first('tel')); ?></strong>
                        </span>
                    <?php endif; ?>
              </div>
            </div>
          </div>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">Administration</li>
      </ol>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6<?php echo e($errors->has('admin') ? ' has-error' : ''); ?>">
                <label for="admin" class="control-label">Administrateur</label>

              <select id="admin" name="admin" class="form-control">
                <option value="0" 
                  <?php if($user->admin): ?>
                    selected="1"
                  <?php endif; ?> 
                  >Non
                </option>
                <option value="1" 
                  <?php if($user->admin): ?>
                    selected="1"
                  <?php endif; ?>
                  >Oui
                </option>
              </select>

              </div>
            </div>
          </div>

          <br/>

          <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">
                Modifier
              </button>
          </div>
        </form>
        <a href="/adminUtilisateurs">Retour aux profils</a>
      </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', ['nbrDevis' => $nbrDevis], ['nbrContact' => $nbrContact], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>