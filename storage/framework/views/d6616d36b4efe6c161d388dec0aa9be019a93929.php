<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">S'enregistrer</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo e(csrf_field()); ?>




                        <div class="form-group<?php echo e($errors->has('prenom') ? ' has-error' : ''); ?>">
                            <label for="prenom" class="col-md-4 control-label">Prénom</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text" class="form-control" name="prenom" value="<?php echo e(old('prenom')); ?>" required autofocus>

                                <?php if($errors->has('prenom')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('prenom')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
                            <label for="name" class="col-md-4 control-label">Nom</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                                <?php if($errors->has('name')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('name')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="col-md-4 control-label">Adresse Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('tel') ? ' has-error' : ''); ?>">
                            <label for="tel" class="col-md-4 control-label">Téléphone</label>

                            <div class="col-md-6">
                                <input id="tel" type="tel" class="form-control" name="tel" value="<?php echo e(old('tel')); ?>" required>

                                <?php if($errors->has('tel')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('tel')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password" class="col-md-4 control-label">Mot de passe</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirmation</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>


                        <div class="form-group">
                                <!--<label class="col-md-12 control-label" style="background-color:#E6E6E6" ><center>Optionnel</center></label>-->
                        </div>


                        <div class="form-group<?php echo e($errors->has('adresse') ? ' has-error' : ''); ?>">
                            <label for="adresse" class="col-md-4 control-label">Adresse</label>

                            <div class="col-md-6">
                                <input id="adresse" type="adresse" class="form-control" name="adresse" required>

                                <?php if($errors->has('adresse')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('adresse')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('cp') ? ' has-error' : ''); ?>">
                            <label for="cp" class="col-md-4 control-label">Code postal</label>

                            <div class="col-md-6">
                                <input id="cp" type="cp" class="form-control" name="cp" required>

                                <?php if($errors->has('cp')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('cp')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('ville') ? ' has-error' : ''); ?>">
                            <label for="ville" class="col-md-4 control-label">Ville</label>

                            <div class="col-md-6">
                                <input id="ville" type="ville" class="form-control" name="ville" required>

                                <?php if($errors->has('ville')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('ville')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    S'enregistrer
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>