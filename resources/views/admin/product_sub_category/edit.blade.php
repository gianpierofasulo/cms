@extends('admin.admin_layouts')
@section('admin_content')
    <h1 class="h3 mb-3 text-gray-800">Edit Product Sub Category</h1>

    <form action="{{ url('admin/product_sub_category/update/'.$category->id) }}" method="post">
        @csrf
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 mt-2 font-weight-bold text-primary">Edit Sub Category</h6>
                <div class="float-right d-inline">
                    <a href="{{ route('admin.product_sub_category.index') }}" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> View All</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                   <div class="form-group">
            <label for="parent_id">Parent Category</label>
            <select name="parent_id" id="parent_id" class="form-control">
                <option value="">Select Parent Category</option>
                @foreach ($subCategory as $id => $category_name)
                    @if ($category->id != $id) <!-- Exclude the current category ID -->
                        <option value="{{ $id }}" {{ $category->parent_id == $id ? 'selected' : '' }}>{{ $category_name }}</option>
                    @endif
                @endforeach
            </select>
        </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Category Name *</label>
                    <input type="text" name="category_name" class="form-control" value="{{ $category->category_name }}" autofocus>
                </div>
            </div>
            </div>
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">SEO Information</h6>
            </div>
            <div class="card-body">

                    
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" name="seo_title" class="form-control" value="{{ $category->seo_title }}">
                </div>
           

                <div class="form-group">
                    <label for="">Meta Description</label>
                    <textarea name="seo_meta_description" class="form-control h_100" cols="30" rows="10">{{ $category->seo_meta_description }}</textarea>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>
        </div>
    </form>

@endsection
