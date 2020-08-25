@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-start mb-2">
    <a href="{{ route('posts.create') }}" class="btn btn-success float-right"> Add Post </a>
</div>


<div class="card cart-default">
    <div class="card-header">Posts</div>

    <div class="cart-body">

        <table class="table">

            <thead>

                <th>Image</th>
                <th>Title</th>

            </thead>

            <tbody>

                @foreach($posts as $post)

                    <tr>
                        <td>
                           <img src=" {{ $post->image }}" alt="">
                        </td>
                        <td>
                            {{ $post->title }}
                        </td>
                    </tr>

                @endforeach

            </tbody>

        </table>

    </div>
</div>

@endsection
