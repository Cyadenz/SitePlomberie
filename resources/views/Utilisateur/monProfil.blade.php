@extends('layouts.default')

@section('content')

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
    <div class="card card-register mx-auto mt-5 mb-5">

      <div class="card-header" style="margin-right:7px;"><center><img class="img" src="{{ asset('img/Rouage50.jpg') }}" alt="Alternative texte de l'image"/>Éditer les informations de votre compte</center></div>
      <div class="card-body">

        <form class="form-horizontal" method="POST" action="{{ route('monProfilEdit') }}">
            {{ csrf_field() }}

        <ol class="breadcrumb">
        	<li class="breadcrumb-item ">Identifiants</li>
      	</ol>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="control-label">Nom</label>

                    <input id="name" type="text" class="form-control" name="name" value="{{Auth::user()->name}}" required>

                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
              </div>
              <div class="col-md-6{{ $errors->has('prenom') ? ' has-error' : '' }}">
                <label for="prenom" class="control-label">Prénom</label>
                    <input id="prenom" type="text" class="form-control" name="prenom" value="{{Auth::user()->prenom}}" required>
                    @if ($errors->has('prenom'))
                        <span class="help-block">
                            <strong>{{ $errors->first('prenom') }}</strong>
                        </span>
                    @endif
              </div>
            </div>
          </div>

          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="name" class="control-label">Adresse Email</label>

                <input id="email" type="text" class="form-control" name="email" value="{{Auth::user()->email}}" required>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
          </div>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="control-label">Mot de passe</label>

                    <input id="password" type="password" class="form-control" name="password" placeholder="Entrer votre mot de passe" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
              </div>
              <div class="col-md-6">
                <label for="password-confirm" class="control-label">Confirmation</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder= "Confirmer votre mot de passe" required>
              </div>
            </div>
          </div><br/>

     
        	<ol class="breadcrumb">
        		<li class="breadcrumb-item ">Informations personelles</li>
      		</ol>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6{{ $errors->has('adresse') ? ' has-error' : '' }}">
                <label for="adresse" class="control-label">Adresse</label>

                    <input id="adresse" type="adresse" class="form-control" name="adresse" value="{{Auth::user()->adresse}}" required>

                    @if ($errors->has('adresse'))
                        <span class="help-block">
                            <strong>{{ $errors->first('adresse') }}</strong>
                        </span>
                    @endif
              </div>
              <div class="col-md-6{{ $errors->has('cp') ? ' has-error' : '' }}">
                <label for="cp" class="control-label">Code postal</label>
                    <input id="cp" type="cp" class="form-control" name="cp" value="{{Auth::user()->cp}}" required>
                    @if ($errors->has('cp'))
                        <span class="help-block">
                            <strong>{{ $errors->first('cp') }}</strong>
                        </span>
                    @endif
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6{{ $errors->has('ville') ? ' has-error' : '' }}">
                <label for="ville" class="control-label">Ville</label>

                    <input id="ville" type="ville" class="form-control" name="ville" value="{{Auth::user()->ville}}" required>

                    @if ($errors->has('ville'))
                        <span class="help-block">
                            <strong>{{ $errors->first('ville') }}</strong>
                        </span>
                    @endif
              </div>
              <div class="col-md-6{{ $errors->has('tel') ? ' has-error' : '' }}">
                <label for="tel" class="control-label">Téléphone</label>

                    <input id="tel" type="tel" class="form-control" name="tel" value="{{Auth::user()->tel}}" required>
                    @if ($errors->has('tel'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tel') }}</strong>
                        </span>
                    @endif
              </div>
            </div>
          </div><br/>

          <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block">
                Modifier
              </button>
          </div>
          @if ($errors->any())
            <div class="alert alert-danger alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button> 
            <strong>                  
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </strong>
            </div>
          @elseif(!($errors->any()) && session('status') )
            <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button> 
              <strong>{{(session('status'))}}</strong>
            </div>
          @endif
        </form>
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

@endsection