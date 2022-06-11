@extends('layouts.index')
@section('content')
    <!-- content -->
    <main class="py-5">
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header card-title">
                <strong>créer une entreprise</strong>
              </div>           
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                  <form action="{{route('store-company')}}" method="post" >
                  @csrf
                    <div class="form-group row">
                      <label for="name" class="col-md-3 col-form-label">Name</label>
                      <div class="col-md-9">
                        <input type="text" name="name" id="first_name" class="form-control is-invalid">
                        <div class="invalid-feedback">
                          Please choose a name.
                        </div>
                      </div>
                    </div>

                   <input type="hidden" name="user_id" value="{{auth()->user()->id}}">

                    <div class="form-group row">
                      <label for="email" class="col-md-3 col-form-label">Email</label>
                      <div class="col-md-9">
                        <input type="text" name="email" id="email" class="form-control">
                      </div>
                    </div>

                   

                    <div class="form-group row">
                      <label for="name" class="col-md-3 col-form-label">Address</label>
                      <div class="col-md-9">
                        <textarea name="address" id="address" rows="3" class="form-control"></textarea>
                      </div>
                    </div>

                     <div class="form-group row">
                      <label for="phone" class="col-md-3 col-form-label">website</label>
                      <div class="col-md-9">
                        <input type="text" name="website" id="phone" class="form-control">
                      </div>
                    </div>
                    
                    <hr>
                    <div class="form-group row mb-0">
                      <div class="col-md-9 offset-md-3">
                          <button type="submit" class="btn btn-primary">Save</button>
                          <a href="/" class="btn btn-outline-secondary">Cancel</a>
                      </div>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

 @endsection