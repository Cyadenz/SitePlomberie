<?php $__env->startSection('content'); ?>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/adminDashboard">Informations diverses</a>
        </li>
        <li class="breadcrumb-item active">Informations liées aux Utilisateurs</li>
      </ol>
      <p><h5><i class="fa fa-list"></i> Diverses informations</h5>
      	<hr>
      	<i class="fa fa-chevron-right mt-3"></i> Nombres d'utilisateurs inscrits : <?php echo e($nbrUsers); ?><br/><br/>
      	<i class="fa fa-chevron-right mt-3"></i> Nombres d'administrateurs inscrits: <?php echo e($nbrAdmin); ?><br/><br/>

      	<i class="fa fa-chevron-right mt-3"></i> Finalisation du site :

	<div class="progress">
  		<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 90%">90%</div><br/>
	</div>
      </p>
	  

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', ['nbrDevis' => $nbrDevis], ['nbrContact' => $nbrContact], ['devis' => $devis], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>