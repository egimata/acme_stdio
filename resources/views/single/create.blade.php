@extends('layouts.app')

@section('content')

<div class="card card-default">
    <div class="card-header">

        {{ isset($single) ? 'Edit Images': 'Create Image' }}

    </div>

</div>

<div class="card-body">

    @include('layouts.partials.errors')

    <form action="{{ isset($single) ? route('single.update', $single->id) : route('single.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        @if (isset($single))

        @method('PUT')

        @endif
        <div class="form-group">

            <label for="title">Title</label>

        <input type="text" class="form-control" name="title" id="title" value="{{ isset($single) ?$single->title: '' }}">

        </div>

        {{-- <div class="form-group">

            <label for="published_at">Published at:</label>

            <input type="text" class="form-control" name="published_at" id="published_at" value="{{ isset($subpost) ?$subpost->published_at: '' }}">

        </div> --}}

        @if (isset($single))

        <div class="form-group">
        <img src="{{ asset('storage/'.$single->image) }}" style="width: 100%;" alt="">
        </div>

        @endif

        <div class="form-group">

            <label for="post">SubPost</label>
            <select name="post" class="form-control" id="post">
                @foreach($subposts as $subpost)
                    <option value="{{$subpost->id}}"

                        @if (isset($single))

                            @if ($subpost->id === $single->subpost_id)

                                selected

                            @endif

                        @endif

                        >{{$subpost->title}}</option>
                @endforeach
            </select>

        </div>


        <div class="form-group">

            <label for="image">Image</label>

            <input type="file" class="form-control" name="image" id="image">

        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">

                {{ isset($single) ? 'Update Image': 'Create Image'}}

            </button>
        </div>
    </form>
</div>

@endsection

@section('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.4/trix.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    {{-- <script>

        // flatpickr('#published_at', {

        //     enableTime: true
        // })

        $(document).ready(function() {

            $('.tags-selector').select2();

        });

    </script> --}}

@endsection

@section('css')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.4/trix.css">

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

@endsection
