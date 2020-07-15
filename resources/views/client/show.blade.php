@extends('layouts.app')

@section('content')
<!-- section -->
<div class="innerpage_banner">
	      <div class="container">
		     <div class="row">
			    <div class="col-md-12">
				   <h2>FACTURE</h2>
				</div>
			 </div>
		  </div>
	   </div>
    <!-- end section -->
    <br>
<div class="container">
    <div class="text text-right">
        <a href="{{route('facture.index')}}" class="btn btn-success btn-lg"><i class="fa fa-arrow-left"> Retour</i></a>
    </div>
    <br>
        <div class="col-md-12">
        <div class="row">
		    <div class="thumbnail">
                <div class="caption" id="sectionAimprimer">
                    <div class="text text-right">
                    <img src="{{asset('images/satina.jpg')}}" height="50px" width="50px" />
                    </div>
                    <div>
                        <h1><strong> TECHNOLOGIES</strong></h1>
                        <p>
                            Sis à Sonfonia Marché/Commune de Ratoma <br>
                            <i class="text text-primary">
                                Vente, installation et maintenance des équipements informatiques et réseaux,
                                mise en place d'infrastructure <br> pour les entreprises, conception des
                                sites web (statiques et dynamiques), conception des applications Web, Desktop et <br> Android

                            </i>
                        </p>
                    </div>
                    <hr class="bg bg-primary">
                    <div class="text text-right">
                        <h3> Conakry le : {{NOW()->format('d/m/y  H:i')}}</h3>
                    </div>
                    <div>
                        <h3> <strong> LE CLIENT </strong> : {{ $facture->client }}</h3>
                    </div>
                    <div class="text text-center">
                        <h1><strong> FACTURE N° ST- {{ $facture->id }} / {{ NOW()->format('m/y')}} </strong></h1>
                        <p>( {{ $facture->designation }} )</p>
                    </div>
                    <div>
                        <p>Merci de nous avoir choisi et veillez retrouver ci-dessous nos
                            meilleurs conditions.
                        </p>
                    </div>
                    <table class="table  table-bordered">
                            <thead>
                                <tr>
                                    <th>Client</th>
                                    <th>Designation</th>
                                    <th>Coût</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $facture->client }}</td>
                                    <td>{{ $facture->designation }}</td>
                                    <td>{{ $facture->cout }}</td>
                                </tr>
                            </tbody>
                        </table>

                </div>

                <button href="#" onClick="imprimer('sectionAimprimer')" class="btn btn-success btn-lg">
		    	<i class="fa fa-print"> Imprimer</i></button>
                <!--  -->
            </div>
        </div>
        </div>
</div>
@endsection
