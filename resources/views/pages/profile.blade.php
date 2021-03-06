@extends('layouts.index')
@section('content')
    <!-- content -->
    <main class="py-5">
      <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        Settings
                    </div>
                    <div class="list-group list-group-flush">
                        <a href="#" class="list-group-item list-group-item-action active">Profile</span></a>
                        <a href="#" class="list-group-item list-group-item-action">Account</span></a>
                        <a href="#" class="list-group-item list-group-item-action">Import & Export</span></a>
                    </div>
                </div>
            </div><!-- /.col-md-3 -->
  
          <div class="col-md-9">
            <div class="card">
              <div class="card-header card-title">
                <strong>Edit Profile</strong>
              </div>  
            <form action="{{route('profile')}}" method="post" enctype="multipart/form-data">    
            @csrf     
              <div class="card-body">
                <div class="row">
                  <div class="col-md-8">

                    <div class="form-group">
                        <label for="first_name">nom</label>
                        <input type="text" name="name" value="{{Auth::user()->name}}" id="first_name" class="form-control is-invalid">
                        <div class="invalid-feedback">
                          
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="last_name">email</label>
                        <input type="text" name="email" id="last_name" value="{{Auth::user()->email}}" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="bio">Ajouter une Biographie</label>
                        <textarea name="biographie" value="{{Auth::user()->bio}}" id="biod" rows="3" class="form-control"></textarea>
                    </div>
                  </div>
                  <div class="offset-md-1 col-md-3">
                    <div class="form-group">
                        <label for="bio">Profile picture</label>
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new img-thumbnail" style="width: 150px; height: 150px;">
                                <img src="http://via.placeholder.com/150x150"  alt="...">
                            </div>
                            <div class="fileinput-preview fileinput-exists img-thumbnail" style="max-width: 150px; max-height: 150px;"></div>
                            <div class="mt-2">
                                <span class="btn btn-outline-secondary btn-file"><span class="fileinput-new">Select image</span><span class="fileinput-exists">Change</span><input type="file" name="photo"></span>
                                <a href="#" class="btn btn-outline-secondary fileinput-exists" data-dismiss="fileinput">Remove</a>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-md-8">
                    <div class="row">
                      <div class="col-md-offset-3 col-md-6">
                        <button type="submit" class="btn btn-success">Update Profile</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </main>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="{{asset('assets/js/jasny-bootstrap.min.js')}}"></script>
    <script>
    $("#add-new-group").hide();
    $('#add-group-btn').click(function () {      
      $("#add-new-group").slideToggle(function() {
        $('#new_group').focus();
      });
      return false;
    });
    </script>
@endsection