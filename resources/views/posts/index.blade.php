@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-start mb-2">
    <a href="{{ route('posts.create') }}" class="btn btn-success float-right"> Add Post </a>
</div>
<img src="public\storage\posts\x2aRctGfPurFEf8ALdesOtm4oLxPihash17S1QEA.jpeg" alt="">

<div class="card cart-default">
    <div class="card-header">Posts</div>

    <div class="cart-body">

        <table class="table">

            <thead>

                <th>Image</th>
                <th>Title</th>

            </thead>

            <tbody>
                <td>

                    {{-- imazhi karit statiki qe nuk me hapet fare tja qm --}}
                    <img src="{{asset('public\storage\posts\x2aRctGfPurFEf8ALdesOtm4oLxPihash17S1QEA.jpeg')}}" alt="">
                 </td>

                @foreach($posts as $post)

                    <tr>
                        <td>
                            {{-- dinamiku rakut qe duhet tqisi imazhin ,,,shko ke postsController.php esht funksioni --}}
                           <img src="{{ asset($post->image) }}" alt="">
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
