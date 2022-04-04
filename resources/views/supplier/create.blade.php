@extends('layouts.mainLayout')
@section('title', 'Permission')

@section('breadcrumb-title')
    @if($formType == 'edit')  Edit  @else  Create  @endif
    Supplier
@endsection

@section('style')
    <style>
        .input-group-addon{
           // min-width: 110px;
        }
    </style>
@endsection


@section('breadcrumb-button')
    <a href="{{ route('supplier.index')}}" class="btn btn-out-dashed btn-sm btn-warning"><i class="fas fa-database"></i></a>
@endsection



@section('sub-title')
    <span class="text-danger">*</span> Marked are required.
@endsection


@section('content')

        @if($formType == 'edit')
            {!! Form::open(array('route' => array('supplier.update',$supplier->id), 'method' => 'PUT')) !!}
        @else
            {!! Form::open(array('url' => "supplier",'method' => 'POST')) !!}
        @endif

        <div class="row">
            @csrf
             <div class="col-md-6 offset-md-3 pr-md-1">
                 <div class="input-group  input-group-info my-3">
                     <span class="input-group-addon" id="">Supplier Name <span class="text-danger"> *</span></span>
                     {{Form::text('name', old('name') ? old('name') : (!empty($supplier->name) ? $supplier->name : null),
                      ['class' => 'form-control','id' => 'name', 'placeholder' => 'Enter Supplier Name Here'] )}}

                 </div>
                 <div>
                    @error('name') <p class="text-danger">{{ $errors->first('name') }}</p> @enderror
                 </div>
                 <div class="input-group  input-group-info my-3">
                     <span class="input-group-addon" id="">Supplier Address<span class="text-danger"> *</span></span>
                     {{Form::text('address', old('address') ? old('address') : (!empty($supplier->address) ? $supplier->address : null),
                      ['class' => 'form-control','id' => 'address', 'placeholder' => 'Enter Supplier Address Here'] )}}

                 </div>
                 <div>
                    @error('address') <p class="text-danger">{{ $errors->first('address') }}</p> @enderror
                 </div>
                 <div class="input-group  input-group-info my-3">
                     <span class="input-group-addon" id="">Supplier Contact<span class="text-danger"> *</span></span>
                     {{Form::text('contact', old('contact') ? old('contact') : (!empty($supplier->contact) ? $supplier->contact : null),
                     ['class' => 'form-control','id' => 'address', 'placeholder' => 'Enter Supplier Address Here'] )}}
                 </div>
                 <div>
                    @error('contact') <p class="text-danger">{{ $errors->first('contact') }}</p> @enderror
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



