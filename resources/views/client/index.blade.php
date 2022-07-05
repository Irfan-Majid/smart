@extends('layouts.mainLayout')
@section('title', 'Supplier Index')

@section('breadcrumb-title')
   List of  Supplier
@endsection

@section('style')
    <style>
    </style>
@endsection




@section('breadcrumb-button')
    <a href="{{ route('client.create')}}" class="btn btn-out-dashed btn-sm btn-warning"><i class="fas fa-plus"></i></a>
@endsection





@section('content')
    <div class="dt-responsive table-responsive">
        <table id="simpletable" class="table table-bordered nowrap table-styling table-info table-hover">
            <thead>
            <tr>
                <th>#SL</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @php
                    $status = ['Inactive','Active']
                @endphp
            @foreach($client as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td class="text-left">{{$item->name}}</td>
                    <td>
                        <div class="icon-btn">
                            <nobr>
                                <a href="{{ route('client.edit', $item->id) }}" data-toggle="tooltip" title="Edit" class="btn btn-outline-warning"><i class="fas fa-pen"></i></a>
                                <form action="{{ route('client.destroy', $item->id) }}" method="POST" data-toggle="tooltip" title="Delete" class="d-inline">
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
                <th>Action</th>
            </tr>
            </tfoot>
        </table>
    </div>

@endsection

@section('script')

@endsection
