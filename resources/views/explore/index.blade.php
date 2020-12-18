@extends('layouts.app')


@section('content')

    <div class="container p-3 my-3">
        <div class="row my-0 m-sm-3 d-flex flex-column flex-sm-row justify-content-center align-items-center">
            <div class="col-12 col-sm-6 my-3 my-sm-0">
                <div class="card" style="height: 355px;">
                    <div class="bg-blue d-flex justify-content-center align-items-center">
                        <img class="card-img-top h-50 w-50 d-block mx-auto" src="{{ asset('img/logo/technology.svg ') }}" alt="Card image cap">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title card-name-date font-weight-bold">Technology</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-blue d-block d-sm-inline">Go somewhere</a>
                    </div>
                  </div>
            </div>
            <div class="col-12 col-sm-6 my-3 my-sm-0">
                <div class="card" style="height: 355px;">
                    <div class="bg-lighty d-flex justify-content-center align-items-center">
                        <img class="card-img-top h-50 w-50 d-block mx-auto" src="{{ asset('img/logo/health.svg ') }}" alt="Card image cap">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title card-name-date font-weight-bold">Health</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-blue d-block d-sm-inline">Go somewhere</a>
                    </div>
                  </div>
            </div>
        </div>

        <div class="row my-0 m-sm-3 d-flex flex-column flex-sm-row justify-content-center align-items-center">
            <div class="col-12 col-sm-6 my-3 my-sm-0">
                <div class="card" style="height: 410px;">
                    <div class="bg-danger d-flex justify-content-center align-items-center">
                        <img class="card-img-top h-50 w-50 d-block mx-auto" src="{{ asset('img/logo/science.svg ') }}" alt="Card image cap">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title card-name-date font-weight-bold">Science</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-blue d-block d-sm-inline">Go somewhere</a>
                    </div>
                  </div>
            </div>
            <div class="col-12 col-sm-6 my-3 my-sm-0">
                <div class="card" style="height: 410px;">
                    <div class="bg-dark-green d-flex justify-content-center align-items-center">
                         <img class="card-img-top h-50 w-50 d-block mx-auto" src="{{ asset('img/logo/society.svg ') }}" alt="Card image cap">
                    </div>
                    <div class="card-body">
                      <h5 class="card-title card-name-date font-weight-bold">Society</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                      <a href="#" class="btn btn-blue d-block d-sm-inline">Go somewhere</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>

@endsection