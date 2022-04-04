@extends('layouts.mainLayout')
@section('title', 'User')

@section('breadcrumb-title')
    @if($formType == 'edit')  Edit  @else  Create  @endif
    User Info
@endsection

@section('style')
    <style>
        .input-group-addon{
            min-width: 120px;
        }
        .input-group-info .input-group-addon{
            /*background-color: #04748a!important;*/
        }
    </style>
@endsection
@section('breadcrumb-button')
    <a href="{{ route('users.index')}}" class="btn btn-out-dashed btn-sm btn-warning"><i class="fas fa-database"></i></a>
@endsection

@section('sub-title')
    <span class="text-danger">*</span> Marked are required.
@endsection
@section('content')
    @if($formType == 'create')
        {!! Form::open(array('url' => "users",'method' => 'POST')) !!}
    @else
        {!! Form::open(array('url' => "users/$user->id",'method' => 'PUT')) !!}
    @endif
         <div class="row">
            @csrf
             <div class="col-md-6 offset-md-3 pr-md-1">
                 <div class="input-group  input-group-info my-3">
                     <span class="input-group-addon" id="">User Name <span class="text-danger"> *</span></span>
                     {{Form::text('name', old('name') ? old('name') : (!empty($user->name) ? $user->name : null),
                      ['class' => 'form-control','id' => 'name', 'placeholder' => 'Enter User Name Here'] )}}
                     @error('name') <p class="text-danger">{{ $errors->first('name') }}</p> @enderror
                 </div>
                 <div class="input-group  input-group-info my-3">
                     <span class="input-group-addon" id="">User Email <span class="text-danger"> *</span></span>
                     {{Form::text('email', old('email') ? old('email') : (!empty($user->email) ? $user->email : null),
                      ['class' => 'form-control','id' => 'email', 'placeholder' => 'Enter User email Here'] )}}
                     @error('email') <p class="text-danger">{{ $errors->first('email') }}</p> @enderror
                 </div>
                 <div class="input-group  input-group-info my-3">
                     <span class="input-group-addon" id="">Password <span class="text-danger"> *</span></span>
                     {{Form::password('password', ['class' => 'form-control','id' => 'password', 'placeholder' => 'Enter User password Here'] )}}
                     @error('password') <p class="text-danger">{{ $errors->first('password') }}</p> @enderror
                 </div>
                 <div class="input-group  input-group-info my-3">
                     <span class="input-group-addon" id="">Conf. Pass  <span class="text-danger"> *</span></span>
                     {{Form::password('confirm-password',['class' => 'form-control','id' => 'confirm-password', 'placeholder' => 'Enter User password Here'] )}}
                     @error('confirm-password') <p class="text-danger">{{ $errors->first('confirm-password') }}</p> @enderror
                 </div>
                 <div class="input-group  input-group-info my-3">
                     <span class="input-group-addon" id="">User Role  <span class="text-danger"> *</span></span>
                     {{Form::select('role',$roles, old('role') ? old('role') : (!empty($user) ? $user->roles : null),
                      ['class' => 'form-control','id' => 'role', 'placeholder' => 'Select User Role'] )}}
                     @error('role') <p class="text-danger">{{ $errors->first('role') }}</p> @enderror
                 </div>
             </div>
             <div class="col-md-2 offset-md-5">
                 <div class="text-center">
                     {{Form::submit('Submit', ['class'=>'btn btn-block btn-grd-info btn-round'])}}
                 </div>
             </div>

        </div><!-- end row -->
    {!! Form::close() !!}
@endsection