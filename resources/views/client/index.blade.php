@extends('layouts.app')

@section('content')
<!-- section -->
<div class="innerpage_banner">
	      <div class="container">
		     <div class="row">
			    <div class="col-md-12">
				   <h2>LISTE DES CLIENTS</h2>
				</div>
			 </div>
		  </div>
	   </div>
    <!-- end section -->
    <br>
<div class="container">
    <div class="text text-right">
        <a href="{{route('client.create')}}" class="btn btn-success btn-lg"><i class="fa fa-plus"> Création client</i></a>
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
								<th>NOM</th>
								<th>PRENOM</th>
								<th>ADRESSE</th>
								<th>OBJECTIF</th>
								<th>TELEPHONE</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
								@foreach($clients as $c)
							<tr>
								<td>{{ $c->nom }}</td>
								<td>{{ $c->prenom }}</td>
								<td>{{ $c->adresse }}</td>
								<td>{{ $c->object }}</td>
								<td>{{ $c->tel }}</td>
								<td>
									<a href="{{ route('client.show', $c) }}" class="btn btn-warning fa fa-print"> Details</a>
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
