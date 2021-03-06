@extends('layouts.app')

@section('content')
    <header class="mb-6 relative">
        <img src="/images/space.jpg" alt="" class="mb-2">

        <div class="flex justify-between items center">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{  $user->name }}</h2>
                <p>Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div>
                <a href="" class="rounded-full shadow py-2 px-4 text-black text-sm">Edit Profile</a>
                <a href="" class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-sm">Follow me</a>
            </div>
        </div>

       
    </header>

    @include ('_timeline', [
        'tweets' => $user->tweets
    ])

@endsection
