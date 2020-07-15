@extends('layouts.app')

@section('content')
<!-- section -->
<div class="innerpage_banner">
	      <div class="container">
		     <div class="row">
			    <div class="col-md-12">
				   <h2>CREATION</h2>
				</div>
			 </div>
		  </div>
	   </div>
    <!-- end section -->
    <br>
<div class="container">
    <div class="text text-right">
        <a href="{{route('etudiant.create')}}" class="btn btn-success btn-lg"><i class="fa fa-plus"> Nouveau</i></a>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="table-responsive">
            @if(session()->has('message'))
                <p class="lead text-success text-center">
                    {{ session()->get('message') }}
                </p>
                @endif
                <h1 class="font-title">Nombre d'etudiants inscris est # {{$etudiants->count()}}</h1>
					<table id="myData" class="table table-striped table table-bordered table table-hover">
						<thead>
							<tr>
								<th>Matricule</th>
								<th>Nom</th>
								<th>Prénom</th>
								<th>Formation</th>
								<th>Montant</th>
								<th>Date debut</th>
								<th>Date fin</th>
								<th>Avance</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
								@foreach($etudiants as $e)
							<tr>
								<td>{{ $e->matricule }}</td>
								<td>{{ $e->nom }}</td>
								<td>{{ $e->prenom }}</td>
								<td>{{ $e->formation }}</td>
								<td>{{ $e->montant }}</td>
                                <td>{{ $e->date_debut }}</td>
                                @if($e->date_fin > NOW())
                                <td class="text text-success">{{ $e->date_fin }}</td>
                                @else
                                <td class="text text-danger">{{ $e->date_fin }}</td>
                                @endif
								<td>{{ $e->avance }}</td>
								<td>
									<a href="{{ route('etudiant.edit', $e) }}" class="btn btn-primary fa fa-edit"> </a>
									<form action="{{ route('etudiant.destroy', $e) }}" method="post" class="inline-block">
										{{ csrf_field() }}
										{{ method_field('DELETE') }}
										<button class="btn btn-danger fa fa-trash delBtnClasse"> </button>
									</form>
									<a href="{{ route('etudiant.show', $e) }}" class="btn btn-warning fa fa-eye"> </a>
                                </td>
							</tr>
								@endforeach
						</tbody>
                    </table>
                    <hr>
                    <!-- Montant Total -->
                   <h1 class="text text-right">  Montant total : {{ $etudiants->sum('montant') }}</h1>

                     <!-- Modal Delete-->
                     <div class="modal fade" id="myModalClasseDelete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                        <h3 class="modal-title text-right" id="myModalLabel"> Suppression </h3>
                            <button type="button" class="close text text-danger" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                                <p class="alert alert-danger">Etes-vous sûre de vouloir supprimer cet etudiant?</p>
                        </div>
                        <div class="modal-footer">
                            <a href="" class="btn btn-danger glyphicon glyphicon-trash" id="deleteReferenceClasse"> Supprimer</a>
                            <button type="button" class="btn btn-default glyphicon glyphicon-remove" data-dismiss="modal"> Quitter</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection
