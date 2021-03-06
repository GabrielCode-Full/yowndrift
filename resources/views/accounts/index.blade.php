@extends('layouts.app')

@section('content')
<div class="container mb-5 p-2 p-lg-5 overflow-hidden">
    {{-- Alerts --}}
      @if (\Session::has('danger'))
      <div id="element" class="container alert alert-danger alert-dismissible fade show" role="alert">
        <h6>{{ \Session::get('danger') }}</h6>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif

      @if (\Session::has('success'))
      <div id="element" class="container alert alert-light alert-dismissible fade show" role="alert">
        <h6><i class="mr-1 fas fa-check-circle text-success"></i>{{ \Session::get('success') }}</h6>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          </button>
      </div>
      @endif
    {{-- Row - Tab --}}
    <div class="row d-flex flex-column flex-md-row">
        {{-- Col - Nav Pills --}}
       <div class="col-11 col-md-3 p-3 p-md-0 mx-auto">
          <div class="nav flex-column nav-pills border shadow-sm" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <a class="nav-link disabled d-flex flex-column" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><span>{{Auth::user()->name}}</span><span><small>Personal Settings</small></span></a>
             <a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
             <a class="nav-link" id="v-pills-account-tab" data-toggle="pill" href="#v-pills-account" role="tab" aria-controls="v-pills-account" aria-selected="false">Account</a>
             {{-- <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a> --}}
          </div>
       </div>

       {{-- Col - Nav Content --}}
       <div class="col-11 col-md-9 mx-auto">
             <div class="tab-content bg-light" id="v-pills-tabContent">
                {{-- first tab pane --}}
                <div class="tab-pane fade show active border p-3 shadow-sm" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                
                {{-- Display User Data if has  --}}
                @if(isset($user_information))
                    <h4 class="text-light-blue font-weight-bold">Profile Information</h4>
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
                     
                     <!-- Edit - Button trigger modal -->
                     <form>
                        <div class="form-group row mb-0">
                             <div class="col-md-8 offset-md-4">
                                 <a class="btn btn-dark-green" data-toggle="modal" data-target="#exampleModalCenter">Edit profile</a>
                             </div>
                         </div>
                     </form>
                   
                     <!-- Edit - Modal Content -->
                     <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenter" aria-hidden="true">
                         <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                         <div class="modal-content border-0">
                             <div class="modal-header bg-bokara-grey text-light border-0">
                             <h6 class="modal-title" id="exampleModalLongTitle">Update your profile</h6>
                             <a href="#" class="close text-light" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true"><i class="fas fa-times"></i></span>
                             </a>
                             </div>
                             <div class="modal-body border-0">
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
                             </div>
                         </div>
                         </div>
                     </div>
                    {{-- Display if user's profile is empty  --}}
                    @else
                    <h4 class="text-light-blue font-weight-bold">Profile Information</h4>
                    <hr>
                    <p class="mb-3">Would you like to add your additional information?</p>
                    <a href= "/account/create"class="btn btn-blue">Add profile</a>
                   @endif
                </div>
                {{-- Second tab pane --}}
                <div class="tab-pane fade border p-3 shadow-sm" id="v-pills-account" role="tabpanel" aria-labelledby="v-pills-account-tab">
                    <h4 class="text-danger font-weight-bold">Delete Account</h4>
                    <hr>
                    <p>Once you delete your account, there is no going back. Please be certain.</p>
                    <form action="/account/{{ Auth::id() }}" method="POST">
                     @method('DELETE')
                         <button type="submit" class="btn btn-outline-danger">Delete your account</button>
                     @csrf
                     </form>
                 </div>
                {{-- <div class="tab-pane fade border p-3" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab"></div> --}}
             </div>
          </div>
       </div>
 </div>
@endsection
