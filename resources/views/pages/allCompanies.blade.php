@extends('layouts.index')

@section('content')

    <!-- content -->
    <main class="py-5">
      <div class="container">


        <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header card-title">
                  <div class="d-flex align-items-center">
                    <h2 class="mb-0">Mes entreprises</h2>
                  </div>
                </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6"></div>
                  <div class="col-md-6">
                    <div class="row">
                      
                      <!--
                      <div class="col">
                        <div class="input-group mb-3">
                          <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="button-addon2">
                          <div class="input-group-append">
                              <button class="btn btn-outline-secondary" type="button">
                                  <i class="fa fa-refresh"></i>
                                </button>
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">
                              <i class="fa fa-search"></i>
                            </button>
                          </div> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <table class="table table-striped table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nom</th>
                      <th scope="col">adresse</th>
                      <th scope="col">Email</th>
                      <th scope="col">site web</th>
                      <th scope="col">nbre contacts</th>
                      <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                  @if($companies->count())
                  @foreach($companies as $index => $company)
                    <tr>
                      <th scope="row">{{$index +1}}</th>
                      <td>{{$company->name}}</td>
                      <td>{{$company->adresse}}</td>
                      <td>{{$company->email}}</td>
                      <td>{{$company->website}}</td>
                      <td>0</td>
                      <td width="150">
                        <a href="{{route('company-detail',['slug'=>$company->name, 'id'=>$company->id])}}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
                      <!--  <a href="form.html" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                        <a href="#" class="btn btn-sm btn-circle btn-outline-danger" title="Delete" onclick="confirm('Are you sure?')"><i class="fa fa-times"></i></a> -->
                      </td>
                    </tr>
                  @endforeach
              @endif    
                   
                    
                  </tbody>
                </table> 

                
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
@endsection