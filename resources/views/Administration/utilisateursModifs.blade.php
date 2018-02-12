@extends('layouts.admin', ['nbrDevis' => $nbrDevis], ['nbrContact' => $nbrContact])


@section('content')
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Utilisateurs</a>
        </li>
        <li class="breadcrumb-item active">Gestion des Utilisateurs</li>
      </ol>
    <div class="card card-register mx-auto mt-5 mb-5">

      <div class="card-header" style="margin-right:7px;"><center><img src="{{ asset('img/Rouage50.jpg') }}" alt="Alternative texte de l'image"/>Édition des informations du compte numéro {{$user->id}}</center></div>
      <div class="card-body">

        <form class="form-horizontal" method="POST" action="{{ route('profilEdit', $user->id) }}">
            {{ csrf_field() }}

        <ol class="breadcrumb">
          <li class="breadcrumb-item ">Identifiants</li>
        </ol>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name" class="control-label">Nom</label>

                    <input id="name" type="text" class="form-control" name="name" value="{{$user->name}}" required>

                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
              </div>
              <div class="col-md-6{{ $errors->has('prenom') ? ' has-error' : '' }}">
                <label for="prenom" class="control-label">Prénom</label>
                    <input id="prenom" type="text" class="form-control" name="prenom" value="{{$user->prenom}}" required>
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

                <input id="email" type="text" class="form-control" name="email" value="{{$user->email}}" required>

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

                    <input id="password" type="password" class="form-control" name="password" value="{{$user->password}}" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
              </div>
              <div class="col-md-6">
                <label for="password-confirm" class="control-label">Confirmation</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" value="{{$user->password}}" required>
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

                    <input id="adresse" type="adresse" class="form-control" name="adresse" value="{{$user->adresse}}" required>

                    @if ($errors->has('adresse'))
                        <span class="help-block">
                            <strong>{{ $errors->first('adresse') }}</strong>
                        </span>
                    @endif
              </div>
              <div class="col-md-6{{ $errors->has('cp') ? ' has-error' : '' }}">
                <label for="cp" class="control-label">Code postal</label>
                    <input id="cp" type="cp" class="form-control" name="cp" value="{{$user->cp}}" required>
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

                    <input id="ville" type="ville" class="form-control" name="ville" value="{{$user->ville}}" required>

                    @if ($errors->has('ville'))
                        <span class="help-block">
                            <strong>{{ $errors->first('ville') }}</strong>
                        </span>
                    @endif
              </div>
              <div class="col-md-6{{ $errors->has('tel') ? ' has-error' : '' }}">
                <label for="tel" class="control-label">Téléphone</label>

                    <input id="tel" type="tel" class="form-control" name="tel" value="0{{$user->tel}}" required>
                    @if ($errors->has('tel'))
                        <span class="help-block">
                            <strong>{{ $errors->first('tel') }}</strong>
                        </span>
                    @endif
              </div>
            </div>
          </div>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">Administration</li>
      </ol>

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6{{ $errors->has('admin') ? ' has-error' : '' }}">
                <label for="admin" class="control-label">Administrateur</label>

              <select id="admin" name="admin" class="form-control">
                <option value="0" 
                  @if($user->admin)
                    selected="1"
                  @endif 
                  >Non
                </option>
                <option value="1" 
                  @if($user->admin)
                    selected="1"
                  @endif
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

@endsection