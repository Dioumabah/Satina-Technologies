@extends('layouts.app')

@section('content')
<!-- section -->
<div class="innerpage_banner">
	      <div class="container">
		     <div class="row">
			    <div class="col-md-12">
				   <h2>DETAILS</h2>
				</div>
			 </div>
		  </div>
	   </div>
    <!-- end section -->
    <br>
<div class="container">
    <div class="text text-right">
        <a href="{{route('etudiant.index')}}" class="btn btn-success btn-lg"><i class="fa fa-arrow-left"> Retour</i></a>
    </div>
    <br>
        <div class="col-md-12">
        <div class="row">
		    <div class="thumbnail">
		        <div class="caption" id="sectionAimprimer">
                    <div>
                        <h1><img src="{{asset('images/satina.jpg')}}" height="50px" width="50px" />&nbsp;<strong>SATINA TECHNOLOGIES</strong></h1>
                        <label for=""><h5 class="fa fa-phone"> +224 622 41 28 03/622 43 78 27 Site web: www.satinatech.com</h5></label><br>
                        <label for=""><h5>Rép.Guinée/Ratoma/Sonfonia Gare</h5></label>
                    </div>
                    <div class="text text-right">
                        <label><h3> Date : {{NOW()->format('d/m/y  H:i')}}</h3></label><br>
                        <strong><h1 class="text text-danger">N°_ {{$etudiant->id}}</h1></strong>
                    </div>
                    <hr>
                    <div>
                        <h1><label style="text-transform: uppercase">Reçu</label> de :  {{$etudiant->prenom . ' ' . $etudiant->nom}} </h1>
                    </div>
                    <div class="text text-right">
                        <h1><strong>Montant en Chiffres : {{$etudiant->montant}} GNF</strong></h1>
                    </div>
                    <div class="">
                        <h1>Montant en Lettre : ......................................................................................................................

                        </h1>
                    </div>

                    <div>
                        <h1>Formation en : {{$etudiant->formation}} </h1>
                    </div>
                    <div>
                        <h1>Avance  : {{$etudiant->avance}} </h1>
                    </div>
                    <div class="text text-center">
                        <h1>Reste à payer </h1>
                    </div>

                <div>
                    <h3>Le Client</h3>
                    <h3 class="text text-right">Le Gérant</h3> <br>
                    <hr>
                </div>
                </div>

                <button href="#" onClick="imprimer('sectionAimprimer')" class="btn btn-success btn-lg">
		    	<i class="fa fa-print"> Imprimer</i></button>
                <!--  -->
            </div>
        </div>
        </div>
</div>
@endsection
