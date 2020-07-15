@extends('layouts.app', ['title'=>'Contact'])

@section('content')
<!-- section -->
<div class="innerpage_banner">
	      <div class="container">
		     <div class="row">
			    <div class="col-md-12">
				   <h2>CONTACT</h2>
				</div>
			 </div>
		  </div>
	   </div>
    <!-- end section -->

    <!-- section -->
	<div id="contact" class="contact-box">
		<div class="container">

			<div class="row">

				<div class="col-lg-7 col-sm-7 col-xs-12">
				  <div class="contact-block">
                  <form id="contactform" action="{{route('contact_path')}}" method="post"  name="contactform" >
                        {{csrf_field()}}
                            <div class="row row-fluid">
                            <div class="col-md-12">
							<div class="form-group">
                                <label for="name" class="control-label">Name</label>
                                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}" require placeholder="Enter your name" autocomplete="name" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                            </div>
                                <div class="col-md-12">
							    <div class="form-group">
                                <label for="email" class="control-label">Email</label>
                                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" require placeholder="Email">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                </div>
                            <div class="col-md-12">
							<div class="form-group">
                                <label for="message" class="control-label sr-only">Message</label>
                                    <textarea name="message" cols="10" rows="10" class="form-control @error('message') is-invalid @enderror"  require placeholder="Message">{{old('message')}}</textarea>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                            </div>
                            <div class="col-md-4 submit-button text-center">
							<div class="form-group">
                                    <button type="submit" value="SEND" id="submit" class="btn btn-common btn-block fa fa-send"> Envoyer</button>
                                </div>
                            </div>
                            </div>
                        </form>
				  </div>
                </div>
            </div>
        </div>
    </div>
@stop
