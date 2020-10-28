@extends('layouts.app')

@section('content')

<div class="cart card-default">
    <div class="card-header">

        {{ isset($category) ? 'Edit Category' : 'Create Category' }}
    </div>


    <div class="card-body">

        @include('layouts.partials.errors')

    <form action="{{ isset($category) ? route('categories.update', $category->id) : route('categories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($category))

            @method('PUT')

            @endif
            <div class="form-group">
                <label for="name">Name:</label>
            <input type="text" id="name" class="form-control" name="name" value="{{ isset($category) ? $category->name : '' }}">
            </div>
            @if (isset($category))

                <div class="form-group">
                <img src="{{ asset('storage/'.$category->image) }}" style="width: 100%;" alt="">
                </div>

            @endif

            <div class="form-group">

                <label for="image">Image</label>

                <input type="file" class="form-control" name="image" id="image">

            </div>
            <div class="form-group">
                <button class="btn btn-success">
                    {{ isset($category) ? 'Update Category' : 'Add Category' }}
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
