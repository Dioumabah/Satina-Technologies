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
                        <h1 class="font-title"><strong> SATINA TECHNOLOGIES</strong></h1>
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
                        <h3> Conakry le : {{NOW()->format('d/m/y  H:i')}}</h3><br><br>
                    </div>
                    <div>
                        <h3 style="text-transform: uppercase;"> <strong> LE CLIENT </strong> : {{ $clients->prenom .' '. $clients->nom }}</h3><br>
                    </div>
                    <div class="text text-center">
                        <h1 class="font-title"><strong> FACTURE N° ST - {{ NOW()->format('m').''.$clients->id}} / {{ NOW()->format('m/y')}} </strong></h1>
                        <p>( {{ $clients->object }} )</p>
                    </div>
                    <div>
                        <p>Merci de nous avoir choisi et veillez retrouver ci-dessous nos
                            meilleurs conditions.
                        </p>
                    </div>
                    @if($clients->factures)
                    <table class="table  table-bordered">
                            <thead>
                                <tr class=" bmd-color bmd-color-text">
                                    <th>Designation</th>
                                    <th>Quantite</th>
                                    <th>Prix unitaire</th>
                                    <th>Prix total</th>
                                </tr>
                            </thead>
                            <tbody>
                             @foreach($facture as $f)
                                @if($f->client_id==$clients->id)
                                <tr>
                                    <td>{{ $f->designation }}</td>
                                    <td>{{ $f->quantite}}</td>
                                    <td>{{ $f->prix .' '.'GNF' }}</td>
                                    <td>{{ $f->quantite * $f->prix .' '.'GNF' }}</td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                        <hr>
                        @endif
                        @if(!($f->client_id==$clients->id))
                        MONTANT TOTAL <strong class="text text-right">{{$facture->sum('cout').' '.'GNF'}}</strong><br><br>
                        @endif
                        <div>
                            <h2><strong> Mode de payement à l'ordre de SATINA Technologies </strong></h2><br><br>
                        </div>
                        <div>
                            <p>
                                Nous sommes à votre disposition pour tout complément d'informations <br>
                                Nous vous prions d'agréer, chers clients nos sincères salutations.
                            </p><br><br>
                            <h2 class="text text-right">LE PRESTATAIRE</h2>
                        </div>
                        <br><br><br><br><br><br>
                        <div class="text text-center">
                            <p>
                                RCCM/ GN.TCC.2019. B.0 1775 NIF: <br>
                                Contact: 624 110 384
                            </p>
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
