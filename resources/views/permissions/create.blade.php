@extends('layouts.mainLayout')
@section('title', 'Permission')

@section('breadcrumb-title')
    @if($formType == 'edit')  Edit  @else  Create  @endif
    Permission
@endsection

@section('style')
    <style>
        .input-group-addon{
           // min-width: 110px;
        }
    </style>
@endsection
@section('breadcrumb-button')
    <a href="{{ route('permissions.index')}}" class="btn btn-out-dashed btn-sm btn-warning"><i class="fas fa-database"></i></a>
@endsection

@section('sub-title')
    <span class="text-danger">*</span> Marked are required.
@endsection
@section('content')

        @if($formType == 'edit')
            {!! Form::open(array('url' => "permissions/$permission->id",'method' => 'PUT')) !!}
        @else
            {!! Form::open(array('url' => "permissions",'method' => 'POST')) !!}
        @endif

         <div class="row">
             <div class="col-md-6">
                 <div class="input-group input-group-info my-3">
                     <span class="input-group-addon" id=""> Permission Name<span class="text-danger"> </span></span>
                     {{Form::text('name', old('name') ? old('name') : (!empty($permission->name) ? $permission->name : null),
                      ['class' => 'form-control','id' => 'name', 'placeholder' => ''] )}}
                 </div>
             </div>
             <div class="col-md-6 ">
                 <div class="text-center my-3">
                     {{Form::submit('Submit', ['class'=>'btn btn-block btn-grd-info btn-round'])}}
                 </div>
             </div>
        </div><!-- end row -->
        {!! Form::close() !!}
@endsection
@section('listContent')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col ml-1">
                        <h4 class="my-2 my-md-0" style="color: #00bcd4">List of Permissions</h4>
                    </div>
                    <div class="col mr-1">
                        <div class="float-right">
{{--                            @yield('breadcrumb-button')--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-block">
                <h4 class="sub-title">
{{--                    @yield('sub-title')--}}
                </h4>
                <div class="dt-responsive table-responsive">
                    <table id="simpletable" class="table table-bordered nowrap table-styling table-info table-hover">
                        <thead>
                        <tr>
                            <th>#SL</th>
                            <th>Permission Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($permissions as $key => $data)
                            <tr>
                                <td>{{$key  + $permissions->firstItem()}}</td>
                                <td class="text-left">{{$data->name}}</td>
                                <td>
                                    <div class="icon-btn">
                                        <nobr>
                                            <a href="{{ url("permissions/$data->id/edit") }}" data-toggle="tooltip" title="Edit" class="btn btn-outline-warning"><i class="fas fa-pen"></i></a>
                                            {!! Form::open(array('url' => "permissions/$data->id",'method' => 'delete', 'class'=>'d-inline','data-toggle'=>'tooltip','title'=>'Delete')) !!}
                                            {{ Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-outline-danger btn-sm delete','onclick'=>"return confirm('Are you sure you want to delete this item?');"])}}
                                            {!! Form::close() !!}
                                        </nobr>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>#SL</th>
                            <th>Permission Name</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection


