@extends('layouts.app')

@section('content')
  
 
   <div class="container p-3 mt-1 mt-sm-3">
      <div class="row d-flex flex-row justify-content-center align-items-center">
         <div class="d-none d-sm-block col-6">
            <img class="h-75 w-75" src="{{ asset('img/logo/blogging.svg') }}" alt="A girl with a laptop posting something to social media.">
         </div>
         <div class="col-12 col-sm-6 text-center text-sm-left">
            <h1 class="h1 font-weight-bold">Built for Bloggers.</h1>
            <p class="text-muted">Write your own post and share your knowledge to everybody.</p>
            @if (Auth::guest())
              <a href="/login" class="btn btn-blue d-block d-sm-inline">Get Started</a>
            @else
              <a href="/blog" class="btn btn-blue d-block d-sm-inline">Get Started</a>
            @endif
         </div>
      </div>
   </div>
   
@endsection
