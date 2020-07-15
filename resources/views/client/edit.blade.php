@extends('layouts.app')

@section('content')
<!-- bradcam_area_start  -->
<div class="bradcam_area breadcam_bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Register</h3>
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
                <div class="card-header">{{ __('Edit Student') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('etudiant.update', $etudiant) }}" class="form-contact contact_form">
                        @csrf
                        {{method_field('put')}}
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Matricule') }}  <span class="text text-danger">*</span></label>

                            <div class="col-md-6">
                                <input id="matricule" type="text" class="form-control @error('matricule') is-invalid @enderror" name="matricule" value=" {{ old('matricule') ? : $etudiant->matricule }}" autofocus>

                                @error('matricule')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nom" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}  <span class="text text-danger">*</span></label>

                            <div class="col-md-6">
                                <input id="nom" type="nom" class="form-control @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') ? : $etudiant->nom }}" >

                                @error('nom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="prenom" class="col-md-4 col-form-label text-md-right">{{ __('prenom') }}  <span class="text text-danger">*</span></label>

                            <div class="col-md-6">
                                <input id="prenom" type="prenom" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') ? : $etudiant->prenom }}">

                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="formation" class="col-md-4 col-form-label text-md-right">{{ __('Formation') }} <span class="text text-danger">*</span></label>

                            <div class="col-md-6">
                                <select name="formation" id="formation" class="form-control @error('formation') is-invalid @enderror" name="formation" value="{{ old('formation') ? : $etudiant->formation }}">
                                    <option value="DACTYLO">DACTYLO</option>
                                    <option value="WINDOWS">WINDOWS</option>
                                    <option value="WORD">WORD</option>
                                    <option value="EXCEL 1">EXCEL 1</option>
                                    <option value="POWER POINT">POWER POINT</option>
                                    <option value="OUTLOOK">OUTLOOK</option>
                                    <option value="PUBLISHER">PUBLISHER</option>
                                    <option value="ACCESS+MERISE">ACCESS+MERISE</option>
                                    <option value="INTIATION INTERNET">INTIATION INTERNET</option>
                                </select>
                                @error('formation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date_debut" class="col-md-4 col-form-label text-md-right">{{ __('Date Debut') }}  <span class="text text-danger">*</span></label>

                            <div class="col-md-6">
                                <input id="date_debut" type="date" class="form-control @error('date_debut') is-invalid @enderror" name="date_debut"  value="{{ old('date_debut') ? : $etudiant->date_debut }}">

                                @error('date_debut')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date_fin" class="col-md-4 col-form-label text-md-right">{{ __('Date Fin') }}  <span class="text text-danger">*</span></label>

                            <div class="col-md-6">
                                <input id="date_fin" type="date" class="form-control" name="date_fin" value="{{ old('date_fin') ? : $etudiant->date_fin }}">
                                @error('date_fin')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="montant" class="col-md-4 col-form-label text-md-right">{{ __('Monatnt') }}  <span class="text text-danger">*</span></label>

                            <div class="col-md-6">
                                <input id="montant" type="number" class="form-control" name="montant" value="{{ old('montant') ? : $etudiant->montant }}">
                                @error('montant')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="avance" class="col-md-4 col-form-label text-md-right">{{ __('Avance') }}</label>

                            <div class="col-md-6">
                                <input id="avance" type="number" class="form-control" name="avance" value="{{ old('avance') ? : $etudiant->avance }}">
                                @error('avance')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    <i class="fa fa-save"> {{ __('Editer') }}</i>
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
