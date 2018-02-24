<?php $__env->startSection('content'); ?>
	<ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/adminUtilisateurs">Utilisateurs</a>
        </li>
        <li class="breadcrumb-item active">Gestion des Utilisateurs</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header"><i class="fa fa-table"></i> Utilisateurs inscrits</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-striped data-table" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Nom</th>
                  <th>Prénom</th>
                  <th>Email</th>
                  <th>Téléphone</th>
                  <th>Administrateur</th>
			            <th>Adresse</th>
                  <th>Code postal</th>
                  <th>Ville</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Nom</th>
                  <th>Prénom</th>
                  <th>Email</th>
                  <th>Téléphone</th>
                  <th>Administrateur</th>
			            <th>Adresse</th>
                  <th>Code postal</th>
                  <th>Ville</th>
                  <th>Actions</th>
                </tr>
              </tfoot>

              <tbody>
              <?php $__currentLoopData = $utils; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $util): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($util->id); ?></td>
                  <td><?php echo e($util->name); ?></td>
                  <td><?php echo e($util->prenom); ?></td>
                  <td><?php echo e($util->email); ?></td>
                  <td><?php echo e($util->tel); ?></td>
                  <?php if($util->admin): ?>
                  <td>Oui</td>
                  <?php else: ?>
                  <td>Non</td>
                  <?php endif; ?>
                  <td><?php echo e($util->adresse); ?></td>
                  <td><?php echo e($util->cp); ?></td>
                  <td><?php echo e($util->ville); ?></td>
                  <td>
                      <a href="<?php echo e(route('profilSelect', $util->id)); ?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                      <a href="<?php echo e(route('utilSupp', $util->id)); ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
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