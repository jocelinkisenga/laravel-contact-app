@extends('layouts.index')
@section('content')
    <!-- content -->
    <main class="py-5">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-title">
                <strong>Details entreprise for {{$company->name}}</strong>
              </div>           
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group row">
                      <label for="first_name" class="col-md-3 col-form-label">name</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted">{{$company->name}}</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="last_name" class="col-md-3 col-form-label">Email</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted">{{$company->email}}</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="email" class="col-md-3 col-form-label">adresse</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted">{{$company->adresse}}</p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="phone" class="col-md-3 col-form-label">site web</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted"><a href="https://{{$company->website}}" target="_blank">{{$company->website}}</a></p>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="name" class="col-md-3 col-form-label">nombre de contact</label>
                      <div class="col-md-9">
                        <p class="form-control-plaintext text-muted">0</p>
                      </div>
                    </div>
                    
                    <hr>
                    <div class="form-group row mb-0">
                      <div class="col-md-9 offset-md-3">
                          <a href="#" class="btn btn-info">Edit</a>
                          <a href="#" class="btn btn-outline-danger">Delete</a>
                          <a href="index.html" class="btn btn-outline-secondary">Cancel</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

@endsection