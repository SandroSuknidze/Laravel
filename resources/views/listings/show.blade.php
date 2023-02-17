@extends('layout')

@section('content')

@include('partials._search')




<div class="border-2 border-gray-100 m-4 rounded-lg bg-gray-100">
    <div class="text-center mt-24 align-items-center">
        <img src="{{$listing->photo ? asset('storage/' . $listing->photo) : asset('images/KROUDI_logo_only_white_background.png')}}"
            class="m-auto">
        <h3 class="text-2xl font-medium">{{$listing['title']}}</h2>
            <p class="font-black py-2">{{$listing['company']}}</p>
            <p class="text-white py-2 pb-6 text-xs"><span class="bg-black rounded-lg p-1">{{$listing['tags']}}</span>
            </p>
            {{-- <p class="fa-solid fa-location-dot font-bold py-2"> {{$listing['location']}}</p> --}}
            <hr>
            <h1 class="font-black text-4xl my-4">Item Description</h1>
            <p class="my-16">{{$listing['description']}}</p>
    </div>
    {{-- <x-card class="mt-4 p-2 space-x-6">
        <a href="/listings/{{$listing->id}}/edit" ><i class="fa-solid fa-pencil"></i> Edit</a>
        
        <form method="POST" action="/listings/{{$listing->id}}" class="inline-block ml-5">
            @csrf
            @method('DELETE')

            <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
        </form>
    </x-card> --}}

</div>


@endsection
