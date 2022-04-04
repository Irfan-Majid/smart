@extends('layouts.mainLayout')
@section('title', 'User')

@section('breadcrumb-title')
   List of  User Info
@endsection

@section('style')
    <style>
    </style>
@endsection
@section('breadcrumb-button')
    <a href="{{ route('users.create')}}" class="btn btn-out-dashed btn-sm btn-warning"><i class="fas fa-plus"></i></a>
@endsection

@section('content')
    <div class="dt-responsive table-responsive">
        <table id="simpletable" class="table table-bordered nowrap table-styling table-info table-hover">
            <thead>
            <tr>
                <th>#SL</th>
                <th>Name</th>
                <th>Email</th>
                <th>User Role</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $key => $user)
                <tr>
                    <td>{{$key  + $users->firstItem()}}</td>
                    <td class="text-left">{{$user->name}}</td>
                    <td class="text-left">{{$user->email}}</td>
                    <td>
                        @if(!empty($user->getRoleNames()))
                            @foreach($user->getRoleNames() as $v)
                                <label class="">{{ $v }}</label>
                            @endforeach
                        @endif
                    </td>
                    <td>
                        <div class="icon-btn">
                            <nobr>
                                <a href="{{ route('users.edit', $user->id) }}" data-toggle="tooltip" title="Edit" class="btn btn-outline-warning"><i class="fas fa-pen"></i></a>
                                <form action="{{ url("users/$user->id") }}" method="POST" data-toggle="tooltip" title="Delete" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm delete"><i class="fas fa-trash"></i></button>
                                </form>
                            </nobr>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>#SL</th>
                <th>Name</th>
                <th>Email</th>
                <th>User Role</th>
                <th>Action</th>
            </tr>
            </tfoot>
        </table>
    </div>

@endsection

@section('script')

@endsection