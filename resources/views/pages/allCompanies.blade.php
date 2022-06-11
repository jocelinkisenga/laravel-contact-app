@extends('layouts.index')

@section('content')

    <!-- content -->
    <main class="py-5">
      <div class="container">

@auth
        <div class="row">
          <div class="col-md-12">
            <div class="card">
                <div class="card-header card-title">
                  <div class="d-flex align-items-center">
                    <h2 class="mb-0">Mes contacts</h2>
                    <div class="ml-auto">
                      <a href="{{route('create-contact')}}" class="btn btn-success mr-2"><i class="fa fa-plus-circle"></i> créer un contact</a>
                    </div>
                    <div class="ml-auto">
                      <a href="{{route('create-company')}}" class="btn btn-primary"><i class="fa fa-plus-circle"></i> créer une entreprise</a>
                    </div>
                  </div>
                </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6"></div>
                  <div class="col-md-6">
                    <div class="row">
                      <div class="col">
                        <select id="filter_company_id" name="company_id" class="custom-select">
                          
                        @foreach($companies as $id => $name)
                          <option {{$id == request('company_id') ? 'selected' : ''}} value="{{$id}}">{{$name}}</option>
                        @endforeach
                        </select>
                      </div>
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
                      <th scope="col">prénom</th>
                      <th scope="col">Email</th>
                      <th scope="col">entreprise</th>
                      <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                  @if($contacts->count())
                  @foreach($contacts as $index => $contact)
                    <tr>
                      <th scope="row">{{$index +1}}</th>
                      <td>{{$contact->first_name}}</td>
                      <td>{{$contact->last_name}}</td>
                      <td>{{$contact->email}}</td>
                      <td>{{$contact->company->name}}</td>
                      <td width="150">
                        <a href="{{route('contact-detail',['slug'=>$contact->first_name, 'id'=>$contact->id])}}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
                      <!--  <a href="form.html" class="btn btn-sm btn-circle btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></a>
                        <a href="#" class="btn btn-sm btn-circle btn-outline-danger" title="Delete" onclick="confirm('Are you sure?')"><i class="fa fa-times"></i></a> -->
                      </td>
                    </tr>
                  @endforeach
                @endif    
                   
                    
                  </tbody>
                </table> 

                {{$contacts->appends(request()->only('company_id'))->links()}}
              </div>
            </div>
          </div>
        </div>
@else
         <!-- content -->
         <div class="row">
           <h1> Bienvenu sur <strong class="text-primary">contacts app</strong></h1>
           <p class="mt-4"> créer votre entrprise et gérer de manière elegante tous vos contacts, <a href="{{route('login')}}">connectez-vous </a>pour créer votre entreprise et y ajouter vos contacts ou <a href="{{route('register')}}">créer votre compte </a> </p>
         </div>
@endauth
      </div>
    </main>
@endsection