<?php $__env->startSection('content'); ?>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Informations diverses</a>
        </li>
        <li class="breadcrumb-item active">Informations liées aux Utilisateurs</li>
      </ol>
      
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', ['nbrDevis' => $nbrDevis], ['nbrContact' => $nbrContact], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>