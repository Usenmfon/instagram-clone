@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <img src="https://popsql.com/static/external-logos/freecodecamp.png" width="50" class="rounded-circle">
            </div>
            <div class="col-9 pt-5">
                <div><h1>{{ $user->username }}</h1></div>
                <div class="d-flex">
                    <div class="pr-5"><strong>153</strong> posts</div>
                    <div class="pr-5"><strong>23k</strong> followers</div>
                    <div class="pr-5"><strong>212</strong> following</div>
                </div>
                <div class="pt-4 font-weight-bold"><strong>{{ $user->profile->title }}</strong></div>
                <div>{{ $user->profile->description }}</div>
                <div><a href="#">{{ $user->profile->url }}</a></div>
            </div>
        </div>
        <div>
            <div class="row pt-5">
                <div class="col-4"><img src="https://images.freeimages.com/images/large-previews/cf7/sunset-in-paris-1447018.jpg" class="w-100"></div>
                <div class="col-4"><img src="https://images.freeimages.com/images/large-previews/f68/bruges-1446224.jpg" class="w-100"></div>
                <div class="col-4"><img src="https://images.freeimages.com/images/large-previews/0a0/swan-1408103.jpg" class="w-100"></div>
            </div>
        </div>
    </div>
@endsection
