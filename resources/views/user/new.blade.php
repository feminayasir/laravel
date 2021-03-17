@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card">
        <div class="card-header"><h3>Users</h3>
        <a href="/user/create" class="btn btn-primary float-right"><strong>New User</strong></a></div>
        <div class="card-body">
        <form action="/user" method="POST">
          @csrf
        <div class="form-group row @if ($errors->has('name')) alert-danger @endif">
          <label for="name" class="col-4 col-form-label">Username</label> 
          <div class="col-8">
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fa fa-address-card"></i>
                </div>
              </div> 
              <input id="name" name="name" placeholder="Name" type="text" class="form-control">
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="email" class="col-4 col-form-label">Email</label> 
          <div class="col-8">
            <input id="email" name="email" placeholder="Description" type="text" class="form-control">
          </div>
        </div> 
        <div class="form-group row">
          <label for="password" class="col-4 col-form-label">Password</label> 
          <div class="col-8">
            <input id="password" name="password" placeholder="Password" type="password" class="form-control">
          </div>
        </div> 
        <div class="form-group row">
          <label for="confirm_password" class="col-4 col-form-label">Confirm Password</label> 
          <div class="col-8">
            <input id="confirm_password" name="confirm_password" placeholder="Confirm Password" type="password" class="form-control">
          </div>
        </div> 

        <div class="form-group row">
          <label for="confirm_password" class="col-4 col-form-label">Select Role</label> 
          <div class="col-8">
          <select name="role_id[]" class="form-control" multiple>
          @if($roles)
              @foreach($roles as $role)
          <option value="{{ $role->id }}">{{ $role->name }}</option>
          @endforeach
          @endif
          </select>
            <!-- <input id="confirm_password" name="confirm_password" placeholder="Confirm Password" type="password" class="form-control"> -->
          </div>
        </div> 

        <div class="form-group row">
          <label for="confirm_password" class="col-4 col-form-label">Permission</label> 
          <div class="col-8">
            <!-- <input id="confirm_password" name="confirm_password" placeholder="Confirm Password" type="password" class="form-control"> -->
          </div>
        </div> 

        <div class="form-group row">
          <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>
     </div>
    </div>
        </div>
    </div>
</div>
@endsection
