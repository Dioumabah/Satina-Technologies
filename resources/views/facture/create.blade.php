@extends('layouts.app')

@section('content')
<!-- bradcam_area_start  -->
<div class="bradcam_area breadcam_bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Facture</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->
    <br><br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Création de la facture') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('facture.store') }}" class="form-contact contact_form">
                        @csrf


                        <div class="form-group row">
                            <label for="client_id" class="col-md-4 col-form-label text-md-right">{{ __('Client') }}  <span class="text text-danger">*</span></label>

                            <div class="col-md-6">
                            <select  class="form-control" name="client_id">
                                @foreach($clients as $clt)
                                    <option value="{{$clt->id}}">{{ $clt->prenom .' '. $clt->nom }}</option>
                                @endforeach
                            </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="designation" class="col-md-4 col-form-label text-md-right">{{ __('Désignation') }}  <span class="text text-danger">*</span></label>

                            <div class="col-md-6">
                                <input id="designation" type="text" class="form-control @error('designation') is-invalid @enderror" name="designation" value="{{ old('designation') }}" >

                                @error('designation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="cout" class="col-md-4 col-form-label text-md-right">{{ __('Quantite') }}  <span class="text text-danger">*</span></label>

                            <div class="col-md-6">
                                <input id="quantite" type="number" class="form-control @error('quantite') is-invalid @enderror" name="quantite" value="{{ old('quantite') }}" name="quantite">
                                @error('quantite')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="prix" class="col-md-4 col-form-label text-md-right">{{ __('Prix unitaire') }}  <span class="text text-danger">*</span></label>

                            <div class="col-md-6">
                                <input id="prix" type="number" class="form-control @error('prix') is-invalid @enderror" name="prix" value="{{ old('prix') }}" name="prix">
                                @error('prix')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    <i class="fa fa-save"> {{ __('Enregistrer') }}</i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
