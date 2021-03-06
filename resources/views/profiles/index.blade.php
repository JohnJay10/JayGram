@extends('layouts.app')

@section('content')
<div class="container" width="100" height="100">
    <div class="row">
        <div class="col-1  pt-7"></div>
        <img src="{{$user->profile->profileImage()}}" height="100" class="rounded-circle">

        <div class="col-8 pl-5 pt-3">
        <div class="d-flex justify-content-between align-items-baseline">
        <div class="d-flex align-items-center pb-3">
            <div class="h4">{{$user -> username}}</div>

             
                 <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
            

        </div>

            @can('update', $user->profile)
                <a href="/p/create/">Add New Post</a>
            @endcan
            
        </div>
                    @can('update', $user->profile)
                        <a href="/profile/{{$user->id}}/edit">Edit Profile</a>
                    @endcan
                 <div class="d-flex">
                 <div class="pr-4"><strong>{{$postCount}}</strong> posts</div>
                 <div class="pr-4"><strong>{{$followersCount}}</strong> followers</div>
                 <div class="pr-4"><strong>{{$followingCount}}</strong> following</div>
                 </div>
                 <div class="pt-4 font-weight-bold"> {{$user->profile->title}}</div>
                 <div>{{$user->profile->description}}</div>
                 <div><a href="#">{{$user->profile->url}}</div>
        </div>

    </div>

    <div class="row pt-5 pr-3 ">
        @foreach($user ->posts as $post)

        <div class="col-4  pr-4 pt-4">
        <a href="/p/{{$post->id}}">
            <img src="/storage/{{$post->image}}" class="w-100">
        </a> 

        </div>

        @endforeach
        
        

    </div>
    
</div>
@endsection
