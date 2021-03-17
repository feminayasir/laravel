@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card">
        <div class="card-header"><h3>Role</h3>
        <div class="card-body">
        <form action="/role" method="POST">
          @csrf
        <div class="form-group row @if ($errors->has('name')) alert-danger @endif">
          <label for="name" class="col-4 col-form-label">Name</label> 
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

        <div class="form-group row @if ($errors->has('name')) alert-danger @endif">
          <label for="name" class="col-4 col-form-label">Permissions</label> 
          <div class="col-8">
            <div class="input-group">
              <div class="input-group-prepend">
                <div class="input-group-text">
                  <i class="fa fa-address-card"></i>
                </div>
              </div> 
              <select class="form-control" multiple name="permission_id[]" >
              @if($permissions)
              @foreach($permissions as $permission)
              <option id="permission_id" value="{{ $permission->id }}" >{{ $permission->name }}</option>
              @endforeach
              @endif
              </select>
            </div>
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
