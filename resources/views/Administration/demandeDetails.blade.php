@extends('layouts.admin', ['nbrDevis' => $nbrDevis], ['nbrContact' => $nbrContact])

@section('content')
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Utilisateurs</a>
        </li>
        <li class="breadcrumb-item active">Gestion des Utilisateurs</li>
      </ol>

      <div class="ml-2">

      <h4><i class=" ml-3 fa fa-pencil-square-o fa-2x"></i> Demande numéro {{$demande->id}}</h4>


      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="nom">Nom :</label>  
        <div class="col-md-12">
        <input id="nom" name="nom" placeholder="{{$demande->nom}}" class="form-control input-md" type="text" disabled="disabled">
                    
        </div>
      </div>

      <!-- Text input-->
      
        <label class="col-md-4 control-label" for="email">Adresse Email :</label>  
		<div class="col-auto">
		      
		      <div class="input-group mb-2">
		        <div class="input-group-prepend">
		          <div class="input-group-text">@</div>
		        </div>
		        <input type="text" class="form-control input-md" id="inlineFormInputGroup" placeholder="{{$demande->email}}" disabled="disabled">
		      </div>
		    </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="cp">Objet :</label>  
        <div class="col-md-12">
        <input id="cp" name="cp" placeholder="{{$demande->objet}}" class="form-control input-md" type="text" disabled="disabled">
                  
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label" for="desc">Message :</label>
        <div class="col-md-12">
          <textarea type="text" class="form-control" name="desc" rows="12" id="desc" disabled="disabled">{{$demande->message}}</textarea>
                    </div> 
      </div>
      <a class="ml-4" href="/adminContact">Retour</a>

          <br/>
    </div>
@endsection