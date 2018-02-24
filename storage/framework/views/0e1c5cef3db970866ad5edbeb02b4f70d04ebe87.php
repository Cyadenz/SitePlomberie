  <?php $__env->startSection('content'); ?>
    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Nous contacter
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/">Accueil</a>
        </li>
        <li class="breadcrumb-item active">Contact </li>
      </ol>

      <!-- Content Row -->
      <div class="row">
        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
        <div id="map"></div>
        <script>
          function initMap(){
            //Map options
            var options = {
              zoom:11,
              center:{lat:48.866667, lng:2.333333}
            }
            //Nouvelle Map
            var map = new google.maps.Map(document.getElementById('map'), options)

            //Ajout marqueur
            var marker = new google.maps.Marker({
              position:{lat:48.8750133, lng:2.370523800000001},
              map:map
            });

            var infoWindow = new google.maps.InfoWindow({
              content:'AG2 Plomberie renovation'
            });

            marker.addListener('click', function(){
              infoWindow.open(map, marker);
            });

          }
        </script>
          <!-- Embedded Google Map -->       
          <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDZbuh9uAbrRjMQAwpteykLPkzduPWxTis&callback=initMap">
</script>
        </div>
        <!-- Contact Details Column -->
        <div class="col-lg-4 mb-4">
          <h3>Détails</h3>
          <p>
            44, avenue Claude Vellefaux - 75010 PARIS
            <br>
          </p>
          <p>
            <abbr title="Téléphone">T</abbr>: 09 50 29 36 57
          </p>
          <p>
            <abbr title="Email">E</abbr>:
            <a href="mailto:name@example.com">ag2.contact@gmail.com
            </a>
          </p>
        </div>
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-lg-8 mb-4">
          <h3>Horaires d'ouverture</h3><br/>
          <ul>
            <li><strong>Lundi au jeudi :</strong> 8h15 - 12h30 et 14h - 18h30</li>
            <li><strong>Vendredi :</strong> 8h15 - 12h30 et 14h - 17h30</li>
          </ul>
        </div>
      </div>
      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-8 mb-4">
          <h3>Demande de renseignements</h3><br/>
          <form name="sentMessage" method="POST" action="<?php echo e(route('contactStore')); ?>">
            <?php echo e(csrf_field()); ?>


            <ol class="breadcrumb">
              <li class="breadcrumb-item ">Vos coordonnées <?php if(Auth::user()): ?><span class="italiquePetit"> (A été pré-rempli à partir de votre connection)</span><?php endif; ?></li>
            </ol>

            <div class="control-group form-group">
              <div class="controls">
                <label for="nom" class="form-label">&nbsp;Nom :</label>
                <div class="<?php echo e($errors->has('nom') ? ' has-error' : ''); ?>">
                <input type="text" class="form-control input-md" id="nom" name="nom" required
                <?php if(Auth::user()): ?> 
                  value="<?php echo e($user[Auth::id() - 1]->name); ?>"
                <?php else: ?> 
                  placeholder="Veuillez saisir votre nom"
                <?php endif; ?> >
                <?php if($errors->has('nom')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('nom')); ?></strong>
                    </span>
                <?php endif; ?>
              </div>
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label for="tel" class="form-label">&nbsp;Téléphone :</label>
                <div class="<?php echo e($errors->has('telephone') ? ' has-error' : ''); ?>">
                <input type="telephone" class="form-control input-md" id="telephone" name="telephone" required
                <?php if(Auth::user()): ?> 
                  value="<?php echo e($user[Auth::id() - 1]->tel); ?>"
                <?php else: ?> 
                  placeholder="Veuillez saisir votre numéro de téléphone"
                <?php endif; ?> >
                <?php if($errors->has('telephone')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('telephone')); ?></strong>
                    </span>
                <?php endif; ?>
              </div>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label for="email" class="form-label">&nbsp;Email :</label>
                <div class="<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                <input type="email" class="form-control input-md" id="email" name="email" required
                <?php if(Auth::user()): ?> 
                  value="<?php echo e($user[Auth::id() - 1]->email); ?>"
                <?php else: ?> 
                  placeholder="Veuillez saisir votre adresse Email"
                <?php endif; ?> >
                <?php if($errors->has('email')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('email')); ?></strong>
                    </span>
                <?php endif; ?>
              </div>
              </div>
            </div>

            <ol class="breadcrumb">
              <li class="breadcrumb-item ">Votre message</li>
            </ol>

            <div class="control-group form-group">
              <div class="controls">
                <div class="<?php echo e($errors->has('objet') ? ' has-error' : ''); ?>">
                <input type="text" class="form-control input-md" id="objet" placeholder="Objet" name="objet" required>
                <?php if($errors->has('objet')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('objet')); ?></strong>
                    </span>
                <?php endif; ?>
              </div>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <div class="<?php echo e($errors->has('message') ? ' has-error' : ''); ?>">
                <textarea rows="10" cols="100" class="form-control input-md" id="message" maxlength="2000" placeholder="Votre message" name="message" required></textarea>
                <?php if($errors->has('message')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('message')); ?></strong>
                    </span>
                <?php endif; ?>
              </div>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Envoyer le message</button>
          </form>
        </div>

      </div>
      <!-- /.row -->

    </div>
    
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>