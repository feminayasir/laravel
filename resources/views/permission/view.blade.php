@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card">
        <div class="card-header"><h3>Permissions</h3>
        <a href="/permission/create" class="btn btn-primary float-right"><strong>New Permission</strong></a></div>
        <div class="card-body">
        <table id="example2" class="table table-bordered table-striped">
        <thead class="thead-light text-center">
        <tr>
           <th>Name</th>
           <th>Slug</th>
           <th>Action</th>
           </tr>
        </thead>
        <tbody class="text-center">
            @if($permissions)
            @foreach($permissions as $permission)
            <tr>
            <td nowrap>{{ $permission->name }}</td>
            <td nowrap>{{ $permission->slug }}</td>
            <td>
            <form action="/admin/brand/{{ $permission->id }}" method="POST">
                {{ csrf_field() }}
                {{ method_field('GET') }}
                <button type="submit" name="edit" id="title" class="btn btn-sm btn-primary"><i class="fa fa-edit text-white" data-toggle="tooltip" data-placement="bottom" title="Activate"></i></a></button>
            </form>
            <a href="javascript:;" data-toggle="modal" onclick="deleteData({{$permission->id}})" 
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
