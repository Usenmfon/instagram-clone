@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <img src="{{ $user->profile->profileImage() }}" width="50" class="rounded-circle w-100">
            </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <div class="d-flex align-items-center">
                        <div class="h4">{{ $user->username }}</div>

                        <follow-button user-id="{{ $user->id }}" follows={{ $follows }}></follow-button>
                    </div>

                    @can('update', $user->profile)
                        <a href="/p/create">Add New Post</a>
                    @endcan
                </div>
                @can('update', $user->profile)
                    <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
                @endcan
                <div class="d-flex">
                    <div class="pr-5"><strong>{{ $postCount }}</strong> posts</div>
                    <div class="pr-5"><strong>{{ $followersCount }}</strong> followers</div>
                    <div class="pr-5"><strong>{{ $followingCount }}</strong> following</div>
                </div>
                <div class="pt-4 font-weight-bold"><strong>{{ $user->profile->title }}</strong></div>
                <div>{{ $user->profile->description }}</div>
                <div><a href="#">{{ $user->profile->url }}</a></div>
            </div>
        </div>
        <div>
            <div class="row pt-5">
                @foreach ($user->posts as $post)
                    <a href="/p/{{ $post->id }}">
                        <div class="col-4 pb-4"><img src="/storage/{{ $post->image }}" class="w-100"></div>
                    </a>
                @endforeach

                {{-- <div class="col-4"><img src="https://images.freeimages.com/images/large-previews/f68/bruges-1446224.jpg" class="w-100"></div>
                <div class="col-4"><img src="https://images.freeimages.com/images/large-previews/0a0/swan-1408103.jpg" class="w-100"></div> --}}
            </div>
        </div>
    </div>
@endsection
