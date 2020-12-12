@extends('layouts.app')

@section('content')
   <!-- Modal -->
<div class="modal fade" id="Write" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="WriteLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg">
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         <form action="/blog" method="POST">
           <div class="form-group">
               <input type="text" class="form-control font-weight-bold" id="title" placeholder="Title" name="title" style="border-bottom:none;">
               <textarea class="form-control" id="text-area" rows="3" name="body" style="border-top:none; border-bottom:none;"></textarea>
               <input type="text" class="form-control" id="title" placeholder="#topic" name="title" style="border-top:none;">
           </div>
           <div class="form-group">
               <button type="submit" class="btn btn-primary">Submit</button>
           </div>
         </form>
       </div>
     </div>
   </div>
 </div>

 
   <div class="container p-3 mt-3">
      <div class="row d-flex flex-row justify-content-center align-items-center">
         <div class="col-6">
            <img class="h-75 w-75" src="{{ asset('img/logo/blogging.svg') }}" alt="">
         </div>
         <div class="col-6 text-left">
            <h1 class="font-weight-bold">Share your ideas with us.</h1>
            <p class="text-muted">Explore or Give knowledge to a specific knowledge.</p>
         </div>
      </div>
   </div>
@endsection
