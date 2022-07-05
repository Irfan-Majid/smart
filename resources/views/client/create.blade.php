@extends('layouts.mainLayout')
@section('title', 'Client')

@section('breadcrumb-title')
    @if($formType == 'edit')  Edit  @else  Create  @endif
    Client
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
            {!! Form::open(array('route' => array('client.update',$client->id), 'method' => 'PUT')) !!}
        @else
            {!! Form::open(array('url' => "client",'method' => 'POST')) !!}
        @endif
        @if ($formType == 'edit' && $client->is_saved == 0)
            <input type="hidden" name="draft_id" value="{{ $client->id }}">
        @endif

        <div class="row">
            @csrf
             <div class="col-md-6 offset-md-3 pr-md-1">
                 <div class="input-group  input-group-info my-3">
                     <span class="input-group-addon" id="">Client Name<span class="text-danger"> *</span></span>
                     {{Form::text('name', old('name') ? old('name') : (!empty($client->name) ? $client->name : null),
                      ['class' => 'form-control','id' => 'name', 'placeholder' => 'Enter Supplier Name Here'] )}}

                 </div>
                 <div>
                    @error('name') <p class="text-danger">{{ $errors->first('name') }}</p> @enderror
                 </div>
                 <div class="input-group  input-group-info my-3">
                     <span class="input-group-addon" id="">Client Address1<span class="text-danger"> *</span></span>
                     {{Form::text('address[]', old('address') ? old('address') : (!empty($client->address) ? $client->address : null),
                      ['class' => 'form-control','id' => 'address', 'placeholder' => 'Enter Supplier Address Here'] )}}

                 </div>
                 <div>
                    @error('address') <p class="text-danger">{{ $errors->first('address') }}</p> @enderror
                 </div>
                 <div class="input-group  input-group-info my-3">
                     <span class="input-group-addon" id="">Client Contact1<span class="text-danger"> *</span></span>
                     {{Form::text('contact[]', old('contact') ? old('contact') : (!empty($client->contact) ? $client->contact : null),
                     ['class' => 'form-control','id' => 'contact', 'placeholder' => 'Enter Supplier Address Here'] )}}
                 </div>
                 <div>
                    @error('contact') <p class="text-danger">{{ $errors->first('contact') }}</p> @enderror
                 </div>
                 <div class="input-group  input-group-info my-3">
                    <span class="input-group-addon" id="">Client Address2<span class="text-danger"> *</span></span>
                    {{Form::text('address[]', old('address') ? old('address') : (!empty($client->address) ? $client->address : null),
                    ['class' => 'form-control','id' => 'address', 'placeholder' => 'Enter Supplier Address 2 Here'] )}}
                </div>
                <div>
                   @error('contact') <p class="text-danger">{{ $errors->first('contact') }}</p> @enderror
                </div>
                <div class="input-group  input-group-info my-3">
                    <span class="input-group-addon" id="">Client Contact2<span class="text-danger"> *</span></span>
                    {{Form::text('contact[]', old('contact') ? old('contact') : (!empty($client->contact) ? $client->contact : null),
                    ['class' => 'form-control','id' => 'contact2', 'placeholder' => 'Enter Supplier Contact 2 Here'] )}}
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
@section('script')
<script>
    var CSRF_TOKEN = "{{ csrf_token() }}";
    $(document).ready(function() {
        $(document).bind('keydown', function(e) {
            if(e.ctrlKey && (e.which == 83)) {
                e.preventDefault();
                var x = $('input[name!=_method]', 'form').serialize();
                console.log(x); 
                 $.ajax({
                            url: "{{ route('ajaxCall') }}",
                            type: 'post',
                            dataType: "json",
                            async: false,
                            data: x,
                           
                            success: function(data) {
                                console.log(data);
                            }
                    });
            }
            });
    })
   
</script>
@endsection



