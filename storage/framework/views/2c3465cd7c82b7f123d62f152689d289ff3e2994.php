<?php $__env->startSection('content'); ?>

	<ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Devis</a>
        </li>
        <li class="breadcrumb-item active">Gestion des devis</li>
      </ol>

<!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header"><i class="fa fa-table"></i> Liste des devis</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-striped data-table" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Id</th>
			  	  <th>Nom</th>
                  <th>Prénom</th>
                  <th>Adresse Email</th>
                  <th>Installation</th>
			  	  <th>Entretien</th>
                  <th>Dépannage</th>
                  <th>Date</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Nom</th>
                  <th>Prénom</th>
                  <th>Adresse Email</th>
                  <th>Installation</th>
			  	  <th>Entretien</th>
                  <th>Dépannage</th>
                  <th>Date</th>
                  <th>Actions</th>
                </tr>
              </tfoot>

              <tbody>
              <?php $__currentLoopData = $devis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $devisNum): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($devisNum->id); ?></td>
                  <td><?php echo e($devisNum->nom); ?></td>
                  <td><?php echo e($devisNum->prenom); ?></td>
                  <td><?php echo e($devisNum->email); ?></td>
          				  <?php if($devisNum->installation): ?>
                      <td>Oui</td>
                    <?php else: ?>
                      <td>Non</td>
                    <?php endif; ?>
          				  <?php if($devisNum->entretien): ?>
                      <td>Oui</td>
                    <?php else: ?>
                      <td>Non</td>
                    <?php endif; ?>
          				  <?php if($devisNum->depannage): ?>
                      <td>Oui</td>
                    <?php else: ?>
                      <td>Non</td>
                    <?php endif; ?>
                      <td><?php echo e($devisNum->dateVoulu); ?></td>
                  <td>
                      <a href="<?php echo e(route('devisSelect', $devisNum->id)); ?>" class="btn btn-primary btn-xs"><i class="fa fa-plus-square"></i></a>
                      <a href="<?php echo e(route('devisSupp', $devisNum->id)); ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                  </td>
                </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
          <?php if(session('status') && session('status') != 'Suppresion éffectuée avec succès'): ?>
            <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button> 
              <strong><i class="fa fa-check"></i> <?php echo e((session('status'))); ?></strong>
            </div>
          <?php elseif(session('status') && session('status') == 'Suppresion éffectuée avec succès'): ?>
            <div class="alert alert-danger alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button> 
              <strong><i class="fa fa-check"></i> <?php echo e((session('status'))); ?></strong>
              </div>
          <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', ['nbrDevis' => $nbrDevis], ['nbrContact' => $nbrContact], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>