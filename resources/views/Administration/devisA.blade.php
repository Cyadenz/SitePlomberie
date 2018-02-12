@extends('layouts.admin', ['nbrDevis' => $nbrDevis], ['nbrContact' => $nbrContact])


@section('content')

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
              @foreach($devis as $devisNum)
                <tr>
                  <td>{{$devisNum->id}}</td>
                  <td>{{$devisNum->nom}}</td>
                  <td>{{$devisNum->prenom}}</td>
                  <td>{{$devisNum->email}}</td>
          				  @if($devisNum->installation)
                      <td>Oui</td>
                    @else
                      <td>Non</td>
                    @endif
          				  @if($devisNum->entretien)
                      <td>Oui</td>
                    @else
                      <td>Non</td>
                    @endif
          				  @if($devisNum->depannage)
                      <td>Oui</td>
                    @else
                      <td>Non</td>
                    @endif
                      <td>{{$devisNum->dateVoulu}}</td>
                  <td>
                      <a href="{{ route('devisSelect', $devisNum->id) }}" class="btn btn-primary btn-xs"><i class="fa fa-plus-square"></i></a>
                      <a href="{{ route('devisSupp', $devisNum->id) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
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
