@extends('layouts.app')

@section('content')

<div class="card card-default">
    <div class="card-header">

        {{ isset($subpost) ? 'Edit SubPost': 'Create SubPost' }}

    </div>

</div>

<div class="card-body">

    @include('layouts.partials.errors')

    <form action="{{ isset($subpost) ? route('subposts.update', $subpost->id) : route('subposts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        @if (isset($subpost))

        @method('PUT')

        @endif
        <div class="form-group">

            <label for="title">Title</label>

        <input type="text" class="form-control" name="title" id="title" value="{{ isset($subpost) ?$subpost->title: '' }}">

        </div>

        <div class="form-group">

            <label for="published_at">Published at:</label>

            <input type="text" class="form-control" name="published_at" id="published_at" value="{{ isset($subpost) ?$subpost->published_at: '' }}">

        </div>

        @if (isset($subpost))

        <div class="form-group">
        <img src="{{ asset('storage/'.$subpost->image) }}" style="width: 100%;" alt="">
        </div>

        @endif

        <div class="form-group">

            <label for="post">Post</label>
            <select name="post" class="form-control" id="post">
                @foreach($posts as $post)
                    <option value="{{$post->id}}"

                        @if (isset($subpost))

                            @if ($post->id === $subpost->post_id)

                                selected

                            @endif

                        @endif

                        >{{$post->title}}</option>
                @endforeach
            </select>

        </div>


        <div class="form-group">

            <label for="image">Image</label>

            <input type="file" class="form-control" name="image" id="image">

        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">

                {{ isset($subpost) ? 'Update SubPost': 'Create SubPost'}}

            </button>
        </div>
    </form>
</div>

@endsection

@section('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.4/trix.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <script>

        flatpickr('#published_at', {

            enableTime: true
        })

        $(document).ready(function() {

            $('.tags-selector').select2();

        });

    </script>

@endsection

@section('css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.4/trix.css">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

@endsection
