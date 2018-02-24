@extends('layouts.admin', ['nbrDevis' => $nbrDevis], ['nbrContact' => $nbrContact])


@section('content')
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/adminContact">Demande</a>
        </li>
        <li class="breadcrumb-item active">Liste des demandes reçues</li>
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
                  <th>Adresse Email</th>
                  <th>Objet</th>
                  <th>Message</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Id</th>
			  	  <th>Nom</th>
                  <th>Adresse Email</th>
                  <th>Objet</th>
                  <th>Message</th>
                  <th>Actions</th>
                </tr>
              </tfoot>

              <tbody>
              @foreach($demandes as $demande)
                <tr>
                  <td>{{$demande->id}}</td>
                  <td>{{$demande->nom}}</td>
                  <td>{{$demande->email}}</td>
                  <td>{{$demande->objet}}</td>
                  <td>"..."</td>
                  <td>
                      <a href="{{ route('demandeSelect', $demande->id) }}" class="btn btn-primary btn-xs"><i class="fa fa-plus-square"></i></a>
                      <a href="{{ route('demandeSupp', $demande->id) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                  </td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
          @if (session('status') && session('status') != 'Suppresion éffectuée avec succès')
            <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button> 
              <strong><i class="fa fa-check"></i> {{(session('status'))}}</strong>
            </div>
          @elseif(session('status') && session('status') == 'Suppresion éffectuée avec succès')
            <div class="alert alert-danger alert-block">
              <button type="button" class="close" data-dismiss="alert">×</button> 
              <strong><i class="fa fa-check"></i> {{(session('status'))}}</strong>
              </div>
          @endif
@endsection
