@extends('layouts.mainLayout')
@section('title', 'Permission')

@section('breadcrumb-title')
    @if($formType == 'edit')  Edit  @else  Create  @endif
    Role
@endsection

@section('style')
    <style>
        .input-group-addon{
           // min-width: 110px;
        }
    </style>
@endsection
@section('breadcrumb-button')
    <a href="{{ route('roles.index')}}" class="btn btn-out-dashed btn-sm btn-warning"><i class="fas fa-database"></i></a>
@endsection

@section('sub-title')
    <span class="text-danger">*</span> Marked are required.
@endsection
@section('content')

        @if($formType == 'edit')
            {!! Form::open(array('url' => "roles/$role->id",'method' => 'PUT')) !!}
        @else
            {!! Form::open(array('url' => "roles",'method' => 'POST')) !!}
        @endif

         <div class="row">
             <div class="col-md-6">
                 <div class="input-group input-group-info my-3">
                     <span class="input-group-addon" id=""> Role Name<span class="text-danger"> </span></span>
                     {{Form::text('name', old('name') ? old('name') : (!empty($role->name) ? $role->name : null),
                      ['class' => 'form-control','id' => 'name', 'placeholder' => ''] )}}
                 </div>
             </div>
             <div class="col-md-6 ">
                 <div class="text-center my-3">
                     {{Form::submit('Submit', ['class'=>'btn btn-block btn-grd-info btn-round'])}}
                 </div>
             </div>
         </div><!-- end row -->
            <div class="form-group">
                <strong>Permission(s):</strong>
                <div class="row">
                    @foreach($permissions as $value)
                        <div class="col-md-3">
                            @if($formType == 'edit')
                                <label>{{ Form::checkbox('permission[]',$value->id,  in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                    {{ $value->name }}</label>
                            @else
                                <label>{{ Form::checkbox('permission[]',$value->id, false, array('class' => 'name')) }}
                                    {{ $value->name }}</label>
                            @endif

                        </div>
                    @endforeach
                </div> <!-- row -->
            </div>
        {!! Form::close() !!}
@endsection



