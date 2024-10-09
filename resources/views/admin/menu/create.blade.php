@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">{{__('Add Menu')}}</h1>

    <form action="{{ route('admin.menu.store') }}" method="post">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">{{__('Add Menu')}}</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.menu.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> {{__('View All')}}</a>
                </div>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">{{__('Menu Name *')}}</label> <span class="shadow" style="font-size: 10px; color: red"> {{__('Make sure you enter the correct spelling, including capitalization and small letters.')}}</span>
                    <input type="text" name="menu_name" class="form-control" value="{{ old('menu_name') }}" autofocus>
                </div>
               

                <div class="form-group">
                    <label for="">{{__('Menu Status *')}}</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="menu_status" id="rr1" value="Show" checked>
                            <label class="form-check-label font-weight-normal" for="rr1">{{__('Show')}}</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="menu_status" id="rr2" value="Hide">
                            <label class="form-check-label font-weight-normal" for="rr2">{{__('Hide')}}</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-header py-3">
            </div>
            <div class="card-body">
                
                <button type="submit" class="btn btn-success">{{__('Submit')}}</button>
            </div>
        </div>
    </form>

@endsection
