@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-start mb-2">
    <a href="{{ route('subposts.create') }}" class="btn btn-success float-right"> Add SubPost </a>
</div>


<div class="card cart-default">
    <div class="card-header">SubPosts</div>

    <div class="cart-body">

        {{-- if there are no posts, dont show table, show a message for empty posts --}}

        @if($subposts->count() > 0)
        <table class="table">

            <thead>

                <th>Image</th>
                <th>Title</th>
                <th>Post</th>
                <th></th>

            </thead>

            <tbody>

                @foreach($subposts as $subpost)

                    <tr>
                        <td>

                           <img src="{{ asset('storage/'.$subpost->image) }}" style="width: 50px; height: 50px" alt="">
                        </td>
                        <td>
                            {{ $subpost->title }}
                        </td>
                        <td>
                        <a href="{{ route('posts.edit', $subpost->post->id) }}">{{ $subpost->post->title}}</a>
                        </td>
                        {{-- if not post has been trashed --}}
                        @if(!$subpost->trashed())
                            <td>
                            <a href="{{ route('subposts.edit', $subpost->id) }}" class="btn btn-info btn-sm">Edit</a>
                            </td>

                        @else

                        <td>

                            <form action="{{ route('restore-subposts', $subpost->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-info btn-sm">Restore</button>
                            </form>

                        </td>

                        @endif

                        <td>
                        <form action="{{ route('subposts.destroy', $subpost->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button href="" class="btn btn-danger btn-sm">

                                {{$subpost->trashed() ? 'Delete': 'Trash' }}
                            </button>
                        </form>
                        </td>
                    </tr>

                @endforeach

            </tbody>

        </table>
        @else
        <h3 class="text-center">No Available Posts</h3>
        @endif
    </div>
</div>

@endsection
