<?php $__env->startSection('content'); ?>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Utilisateurs</a>
        </li>
        <li class="breadcrumb-item active">Gestion des Utilisateurs</li>
      </ol>

      <div class="ml-2">

      <h4><i class=" ml-3 fa fa-pencil-square-o fa-2x"></i> Devis numéro <?php echo e($devis->id); ?></h4>


      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="nom">Nom :</label>  
        <div class="col-md-12">
        <input id="nom" name="nom" placeholder="<?php echo e($devis->nom); ?>" class="form-control input-md" type="text" disabled="disabled">
                    
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="prenom">Prénom :</label>  
        <div class="col-md-12">
        <input id="prenom" name="prenom" placeholder="<?php echo e($devis->prenom); ?>" class="form-control input-md" type="text" disabled="disabled">
                  
        </div>
      </div>

      <!-- Text input-->
      
        <label class="col-md-4 control-label" for="email">Adresse Email :</label>  
		<div class="col-auto">
		      
		      <div class="input-group mb-2">
		        <div class="input-group-prepend">
		          <div class="input-group-text">@</div>
		        </div>
		        <input type="text" class="form-control input-md" id="inlineFormInputGroup" placeholder="<?php echo e($devis->email); ?>" disabled="disabled">
		      </div>
		    </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="tel">Téléphone :</label>  
        <div class="col-md-12">
        <input id="tel" name="tel" placeholder="0<?php echo e($devis->tel); ?>" class="form-control input-md" type="text" disabled="disabled">
                  
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="adresse">Adresse :</label>  
        <div class="col-md-12">
        <input id="adresse" name="adresse" placeholder="<?php echo e($devis->adresse); ?>" class="form-control input-md" type="text" disabled="disabled">
                  
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="cp">Code Postal :</label>  
        <div class="col-md-12">
        <input id="cp" name="cp" placeholder="<?php echo e($devis->cp); ?>" class="form-control input-md" type="text" disabled="disabled">
                  
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="ville">Ville :</label>  
        <div class="col-md-12">
        <input id="ville" name="ville" placeholder="<?php echo e($devis->ville); ?>" class="form-control input-md" type="text" disabled="disabled">
                    
        </div>
      </div>


      <div class="form-group">
        <label class="col-md-4 control-label">Type de prestations :</label>
        <div class="col-md-4">

        <div class="checkbox">
          <label for="installation">
            <input id="installation" value="1" type="checkbox" <?php if($devis->installation): ?> checked="checked"<?php endif; ?> disabled="disabled"> 
            Installation
          </label>
      	</div>

        <div class="checkbox">
          <label for="entretien">
            <input id="entretien" value="1" type="checkbox" <?php if($devis->entretien): ?> checked="checked"<?php endif; ?> disabled="disabled">
            Entretien
          </label>
      	</div>

        <div class="checkbox">
          <label for="depannage">
            <input id="depannage" value="1" type="checkbox" <?php if($devis->depannage): ?> checked="checked"<?php endif; ?> disabled="disabled">
            Dépannage
          </label>
      	</div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-6 control-label" for="date">Date souhaitée de début des travaux :</label>  
        <div class="col-md-6">
        <input type="text" id="dateVoulu" name="dateVoulu" placeholder="<?php echo e($devis->dateVoulu); ?>" class="form-control input-md" disabled="disabled">
                    
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" for="desc">Description du projet :</label>
        <div class="col-md-12">
          <textarea type="text" class="form-control" name="desc" rows="10" id="desc" disabled="disabled"><?php echo e($devis->desc); ?></textarea>
                    </div> 
      </div>
      <a class="ml-4" href="/adminDevis">Retour</a>

          <br/>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', ['nbrDevis' => $nbrDevis], ['nbrContact' => $nbrContact], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>