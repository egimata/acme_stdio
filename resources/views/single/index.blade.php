@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-start mb-2">
    <a href="{{ route('single.create') }}" class="btn btn-success float-right"> Add Image to Sub-Post </a>
</div>


<div class="card cart-default">
    <div class="card-header">Sub-Posts Images</div>

    <div class="cart-body">

        {{-- if there are no posts, dont show table, show a message for empty posts --}}

        @if($single->count() > 0)
        <table class="table">

            <thead>

                <th>Image</th>
                <th>Title</th>
                <th>SubPost</th>
                <th></th>

            </thead>

            <tbody>

                @foreach($single as $item)

                    <tr>
                        <td>

                           <img src="{{ asset('storage/'.$item->image) }}" style="width: 50px; height: 50px" alt="">
                        </td>
                        <td>
                            {{ $item->title }}
                        </td>
                        <td>
                        <a href="{{ route('subposts.edit', $item->subpost->id) }}">{{ $item->subpost->title}}</a>
                        </td>
                        {{-- if not post has been trashed --}}
                        {{-- @if(!$single->trashed())
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

                        <td> --}}
                        <form action="{{ route('single.destroy', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button href="" class="btn btn-danger btn-sm">

                                {{$subpost->delete() ? 'Delete': "Restore" }}
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
