@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card">
        <div class="card-header"><h3>Users</h3>
        <a href="/user/create" class="btn btn-primary float-right"><strong>New User</strong></a></div>
        <div class="card-body">
        <table id="example2" class="table table-bordered table-striped">
        <thead class="thead-light text-center">
        <tr>
           <th>Name</th>
           <th>Code</th>
           <th>Roles</th>
           <th>Action</th>
           </tr>
        </thead>
        <tbody class="text-center">
            @if($users)
            @foreach($users as $user)
            <tr>
            <td nowrap>{{ $user->name }}</td>
            <td nowrap>{{ $user->email }}</td>
            <td nowrap>
            @if($user->roles != null)
             @foreach($user->roles as $role)
             {{ $role->name }} <br>
             @endforeach
            @endif</td>
            <td>
            <form action="/admin/brand/{{ $user->id }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('GET') }}
                <button type="submit" name="edit" id="title" class="btn btn-sm btn-primary"><i class="fa fa-edit text-white" data-toggle="tooltip" data-placement="bottom" title="Activate"></i></a></button>
            </form>
            <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$user->id}})" 
                    data-target="#DeleteModal" class="btn btn-sm btn-primary"  style="margin-top:5px;"><i class="fa fa-trash"></i></a>
            </td>
            </tr>
            @endforeach
            @endif
        </tbody>
        <tfoot>
            <tr>
            <th></th>
            <th></th>
            <th></th>
            </tr>
        </tfoot>
        </table>
     </div>
    </div>
        </div>
    </div>
</div>
@endsection
