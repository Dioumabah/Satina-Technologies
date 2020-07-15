@extends('layouts.app')

@section('content')
<!-- section -->
<div class="innerpage_banner">
	      <div class="container">
		     <div class="row">
			    <div class="col-md-12">
				   <h2>LISTE DES FACTURES</h2>
				</div>
			 </div>
		  </div>
	   </div>
    <!-- end section -->
    <br>
<div class="container">
    <div class="text text-right">
        <a href="{{route('facture.create')}}" class="btn btn-success btn-lg"><i class="fa fa-plus"> Création de facture</i></a>
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
					<table id="myData" class="table table-striped table table-bordered table table-hover">
						<thead>
							<tr>
								<th>Client</th>
								<th>Designation</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
								@foreach($clients as $c)
							<tr>
								<td>{{ $c->prenom .' '.$c->nom}}</td>
								<td>{{ $c->object }}</td>
								<td>
									<a href="{{ route('facture.show', $c) }}" class="btn btn-warning fa fa-print"> Facture</a>
                                </td>
							</tr>
								@endforeach
						</tbody>
                    </table>
        </div>
        </div>
    </div>
</div>
@endsection
