  <?php $__env->startSection('content'); ?>
        <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Devis</h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/">Accueil</a>
        </li>
        <li class="breadcrumb-item active">Devis</li>
      </ol>
      <div>
        <img class="devis" src="<?php echo e(asset('img/devis.png')); ?>" alt="Outils">
      </div>

      <div class="row">
        <div class="col-lg-8 mb-4" >
        <form class="form-horizontal" method="POST" action="<?php echo e(route('devisStore')); ?>">
                  <?php echo e(csrf_field()); ?>


            <fieldset>
            <!-- Form Name -->

            <ol class="breadcrumb mt-3">
                  <li class="breadcrumb-item ">Vos coordonnées <?php if(Auth::user()): ?><span class="italiquePetit"> (A été pré-rempli à partir de votre connection)</span><?php endif; ?></li>
                </ol>

            <!-- Text input-->
            <div class="form-group">
              <label class="control-label" for="nom">Nom :</label>  
              <div class="<?php echo e($errors->has('nom') ? ' has-error' : ''); ?>">
              <input id="nom" name="nom" class="form-control input-md" type="text" required
                <?php if(Auth::user()): ?> 
                  value="<?php echo e($user[Auth::id() - 1]->name); ?>"
                <?php else: ?> 
                  placeholder="Veuillez saisir votre nom"
                <?php endif; ?>>

                <?php if($errors->has('nom')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('nom')); ?></strong>
                    </span>
                <?php endif; ?>
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class=" control-label" for="prenom">Prénom :</label>  
              <div class="<?php echo e($errors->has('prenom') ? ' has-error' : ''); ?>">
              <input id="prenom" name="prenom" class="form-control input-md" type="text" required
              <?php if(Auth::user()): ?> 
                value="<?php echo e($user[Auth::id() - 1]->prenom); ?>"
              <?php else: ?> 
                placeholder="Veuillez saisir votre prénom"
              <?php endif; ?>>

              <?php if($errors->has('prenom')): ?>
                              <span class="help-block">
                                  <strong><?php echo e($errors->first('prenom')); ?></strong>
                              </span>
                          <?php endif; ?>
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class=" control-label" for="email">Adresse Email :</label>  
              <div class="<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
              <input id="email" name="email" class="form-control input-md" type="text" required
              <?php if(Auth::user()): ?> 
                value="<?php echo e($user[Auth::id() - 1]->email); ?>"
              <?php else: ?> 
                placeholder="Veuillez saisir votre adresse Email"
              <?php endif; ?>>

              <?php if($errors->has('email')): ?>
                              <span class="help-block">
                                  <strong><?php echo e($errors->first('email')); ?></strong>
                              </span>
                          <?php endif; ?>
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class=" control-label" for="tel">Téléphone :</label>  
              <div class="<?php echo e($errors->has('tel') ? ' has-error' : ''); ?>">
              <input id="tel" name="tel" class="form-control input-md" type="text" required
              <?php if(Auth::user()): ?> 
                value="0<?php echo e($user[Auth::id() - 1]->tel); ?>"
              <?php else: ?> 
                placeholder="Veuillez saisir votre numéro de téléphone"
              <?php endif; ?>>

              <?php if($errors->has('tel')): ?>
                              <span class="help-block">
                                  <strong><?php echo e($errors->first('tel')); ?></strong>
                              </span>
                          <?php endif; ?>
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class=" control-label" for="adresse">Adresse :</label>  
              <div class="<?php echo e($errors->has('adresse') ? ' has-error' : ''); ?>">
              <input id="adresse" name="adresse" class="form-control input-md" type="text" required
              <?php if(Auth::user()): ?> 
                value="<?php echo e($user[Auth::id() - 1]->adresse); ?>"
              <?php else: ?> 
                placeholder="Veuillez saisir votre adresse"
              <?php endif; ?>>

              <?php if($errors->has('adresse')): ?>
                              <span class="help-block">
                                  <strong><?php echo e($errors->first('adresse')); ?></strong>
                              </span>
                          <?php endif; ?>
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class=" control-label" for="cp">Code Postal :</label>  
              <div class="<?php echo e($errors->has('cp') ? ' has-error' : ''); ?>">
              <input id="cp" name="cp" class="form-control input-md" type="text" required
              <?php if(Auth::user()): ?> 
                value="<?php echo e($user[Auth::id() - 1]->cp); ?>"
              <?php else: ?> 
                placeholder="Veuillez saisir votre code postal"
              <?php endif; ?>>

              <?php if($errors->has('cp')): ?>
                              <span class="help-block">
                                  <strong><?php echo e($errors->first('cp')); ?></strong>
                              </span>
                          <?php endif; ?>
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class=" control-label" for="ville">Ville :</label>  
              <div class="<?php echo e($errors->has('ville') ? ' has-error' : ''); ?>">
              <input id="ville" name="ville" class="form-control input-md" type="text" required
              <?php if(Auth::user()): ?> 
                value="<?php echo e($user[Auth::id() - 1]->ville); ?>"
              <?php else: ?> 
                placeholder="Veuillez saisir votre ville"
              <?php endif; ?>>

                <?php if($errors->has('ville')): ?>
                  <span class="help-block">
                      <strong><?php echo e($errors->first('ville')); ?></strong>
                  </span>
                <?php endif; ?>
                
              </div>
            </div>

          <ol class="breadcrumb">
                  <li class="breadcrumb-item ">Vos directives pour le devis</li>
                </ol>

            <div class="form-group">
              <label class=" control-label">Type de prestations :</label>
              <div class="">

              <div class="checkbox">
                <label for="installation">
                  <input name="installation" id="installation" value="1" type="checkbox">
                  Installation
                </label>
              </div>

              <div class="checkbox">
                <label for="entretien">
                  <input name="entretien" id="entretien" value="1" type="checkbox">
                  Entretien
                </label>
              </div>

              <div class="checkbox">
                <label for="depannage">
                  <input name="depannage" id="depannage" value="1" type="checkbox">
                  Dépannage
                </label>
              </div>
              </div>
            </div>


            <div class="form-group">
              <label class="control-label" for="date">Date souhaitée de début des travaux :</label>  
              <input type="date" id="dateVoulu" name="dateVoulu" class="form-control input-md" required>
                <?php if($errors->has('dateVoulu')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('dateVoulu')); ?></strong>
                    </span>
                  <?php endif; ?>
                
            </div>

            <div class="form-group">
              <label class=" control-label" for="desc">Description du projet :</label>
              <div class="<?php echo e($errors->has('desc') ? ' has-error' : ''); ?>">
                <textarea class="form-control" name="desc" rows="8" id="desc" placeholder="Veuilllez nous décrire votre projet avec le plus de détails possibles" required></textarea>
                  <?php if($errors->has('desc')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('desc')); ?></strong>
                    </span>
                  <?php endif; ?>
              </div> 
            </div>

            <!-- Button -->
            <div class="form-group">
              <label class=" control-label"></label>
                <button  type="submit" class="btn btn-primary">
                  Envoyer
                </button>
            </div>
            </fieldset>
            </form>
        </div>

      </div>
      <!-- /.row -->

    </div>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>