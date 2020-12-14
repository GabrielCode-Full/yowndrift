@extends('layouts.app')

@section('content')
<div class="container mb-5 p-2 p-lg-5">
          {{-- Alerts --}}
      @if (\Session::has('danger'))
      <div id="element" class="container alert alert-danger alert-dismissible fade show mt-5" role="alert">
        <h6>{{ \Session::get('danger') }}</h6>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif

      @if (\Session::has('success'))
      <div id="element" class="container alert alert-success alert-dismissible fade show mt-5" role="alert">
        <h6>{{ \Session::get('success') }}</h6>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
      </div>
      @endif
      {{-- end of alerts --}}
    <div class="row">
       <div class="col-3">
          <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
             <a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
             {{-- <a class="nav-link" id="v-pills-account-tab" data-toggle="pill" href="#v-pills-account" role="tab" aria-controls="v-pills-account" aria-selected="false">Account</a>
             <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a> --}}
          </div>
       </div>
       <div class="col-9">
             <div class="tab-content bg-light" id="v-pills-tabContent">
                <div class="tab-pane fade show active border p-3 shadow-sm" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                @if(isset($user_information))
                   {{-- @foreach($users_information as $user_information) --}}
                    <h3 class="card-name-date text-light-blue font-weight-bold">Profile Information</h3>
                    <hr>
                      <form>
                         <div class="form-group row">
                             <label for="firstname" class="col-md-4 col-form-label text-md-right">First name</label>
                             <div class="col-md-6">
                                 <input id="firstname" type="text" class="form-control" name="firstname" value="{{$user_information->firstname}}" disabled>
                             </div>
                         </div>
 
                         <div class="form-group row">
                             <label for="lastname" class="col-md-4 col-form-label text-md-right">Last name</label>
                             <div class="col-md-6">
                                 <input id="lastname" type="text" class="form-control" name="lastname" value="{{$user_information->lastname}}" disabled>
                             </div>
                         </div>
 
                         <div class="form-group row">
                             <label for="middlename" class="col-md-4 col-form-label text-md-right">Middle name</label>
 
                             <div class="col-md-6">
                                 <input id="middlename" type="text" class="form-control" name="middlename" value="{{$user_information->middlename}}" disabled>
                             </div>
                         </div>
 
                         <div class="form-group row">
                             <label for="contact" class="col-md-4 col-form-label text-md-right">Contact</label>
                             <div class="col-md-6">
                                 <input id="contact" type="text" class="form-control" name="contact" value="{{ $user_information->contact }}" disabled>
                             </div>
                         </div>
                     </form>
                     
                     <!-- Button trigger modal -->
                     <form>
                        <div class="form-group row mb-0">
                             <div class="col-md-8 offset-md-4">
                                 <a class="btn btn-dark-green" data-toggle="modal" data-target="#exampleModalCenter">Edit profile</a>
                             </div>
                         </div>
                     </form>
                   
                     <!-- Modal -->
                     <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
                         <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                         <div class="modal-content">
                             <div class="modal-header bg-bokara-grey text-light">
                             <h6 class="modal-title" id="exampleModalLongTitle">Update your profile</h6>
                             <a href="#" class="close text-light" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true"><i class="fas fa-times"></i></span>
                             </a>
                             </div>
                             <div class="modal-body">
                                                 <form action="/account/{{$user_information->user_information_id}}" method="POST">
                                                     @method('PUT')
                                                     @csrf
                                                     <div class="form-group row">
                                                         <label for="firstname" class="col-md-4 col-form-label text-md-right">First name</label>
                         
                                                         <div class="col-md-6">
                                                             <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" required autocomplete="firstname" value="{{$user_information->firstname}}" autofocus>
                             
                                                             @error('firstname')
                                                                 <span class="invalid-feedback" role="alert">
                                                                     <strong>{{ $message }}</strong>
                                                                 </span>
                                                             @enderror
                                                         </div>
                                                     </div>
                         
                                                     <div class="form-group row">
                                                         <label for="lastname" class="col-md-4 col-form-label text-md-right">Last name</label>
                         
                                                         <div class="col-md-6">
                                                             <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" required autocomplete="lastname" value="{{$user_information->lastname}}" autofocus>
                             
                                                             @error('lastname')
                                                                 <span class="invalid-feedback" role="alert">
                                                                     <strong>{{ $message }}</strong>
                                                                 </span>
                                                             @enderror
                                                         </div>
                                                     </div>
                         
                                                     <div class="form-group row">
                                                         <label for="middlename" class="col-md-4 col-form-label text-md-right">Middle name</label>
                         
                                                         <div class="col-md-6">
                                                             <input id="middlename" type="text" class="form-control @error('middlename') is-invalid @enderror" name="middlename" required autocomplete="middlename" value="{{$user_information->middlename}}" autofocus>
                             
                                                             @error('middlename')
                                                                 <span class="invalid-feedback" role="alert">
                                                                     <strong>{{ $message }}</strong>
                                                                 </span>
                                                             @enderror
                                                         </div>
                                                     </div>
                         
                                                     <div class="form-group row">
                                                         <label for="contact" class="col-md-4 col-form-label text-md-right">Contact</label>
                         
                                                         <div class="col-md-6">
                                                             <input id="contact" type="text" class="form-control @error('contact') is-invalid @enderror" name="contact" required autocomplete="contact" value="{{$user_information->contact}}" autofocus>
                             
                                                             @error('contact')
                                                                 <span class="invalid-feedback" role="alert">
                                                                     <strong>{{ $message }}</strong>
                                                                 </span>
                                                             @enderror
                                                         </div>
                                                     </div>
                         
                                                     <div class="form-group row mb-0">
                                                         <div class="col-md-8 offset-md-4">
                                                             <button type="submit" class="btn btn-dark-green">Update profile</button>
                                                         </div>
                                                     </div>
                                                 </form>
                                            {{-- @endforeach --}}
                             </div>
                         </div>
                         </div>
                     </div>
                    @else
                    <h3 class="card-name-date text-light-blue font-weight-bold">Profile Information</h3>
                    <hr>
                    <p class="mb-3">Would you like to add your additional information?</p>
                    <a href= "/account/create"class="btn btn-blue">Add profile</a>
                   @endif
                </div>
                {{-- <div class="tab-pane fade border p-3" id="v-pills-account" role="tabpanel" aria-labelledby="v-pills-account-tab">
                    <h2 class="text-danger font-weight-bold">Delete Account</h2>
                    <hr>
                    <p>Once you delete your account, there is no going back. Please be certain.</p>
                    <form action="/account/{{ Auth::id() }}" method="POST">
                     @method('DELETE')
                         <button type="submit" class="btn btn-outline-danger">Delete your account</button>
                     @csrf
                     </form>
                 </div> --}}
                {{-- <div class="tab-pane fade border p-3" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus molestiae asperiores unde, rerum dolorem odit non iusto recusandae in quis! Enim mollitia, sed quae, facilis ea in tenetur minus nam sint explicabo qui asperiores quod, eum voluptatum! Dolorum, quos rem.</div> --}}
             </div>
          </div>
       </div>
 </div>
@endsection
