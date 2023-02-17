@extends('layout')

@section('content')

<div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Edit Gig
        </h2>
        <p class="mb-4">Edit: {{$listing->title}}</p>
    </header>

    <form method="POST" action="/listings/{{$listing->id}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-6">
            <label for="title" class="inline-block text-lg mb-2">Title</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title"
                value="{{$listing->title}}" />
            @error('title')
            <p class="text-red-500 text-xs mb-1">{{$message}}</p>
            @enderror
        </div>



        <div class="mb-6">
            <label for="tags)" class="inline-block text-lg mb-2">
                Tags (Category)
            </label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                placeholder="Example: Electronics" value="{{$listing->tags}}" />
            @error('tags')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>



        <div class="mb-6">
            <label for="company" class="inline-block text-lg mb-2">Company Name</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company"
                value="{{$listing->company}}" />
            @error('company')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>


        <div class="mb-6">
            <label for="location" class="inline-block text-lg mb-2">Location</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location"
                value="{{$listing->location}}" />
            @error('location')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>


        <div class="mb-6">
            <label for="price" class="inline-block text-lg mb-2">Price</label>
            <input type="number" class="border border-gray-200 rounded p-2 w-full" name="price" placeholder="In USD"
                value="{{$listing->price}}" />
            @error('price')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="photo" class="inline-block text-lg mb-2">
                Photo
            </label>
            <input type="file" class="border border-gray-200 rounded p-2 w-full" name="photo"/>

            <img class="w-48 mr-6 mt-5" src="{{$listing->photo ? asset('storage/' . $listing->photo) : asset('images/KROUDI_logo_only_white_background.png')}}">


            @error('photo')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="description" class="inline-block text-lg mb-2">
                Description
            </label>
            <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="10">{{$listing->description}}</textarea>
            @error('description')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>


        <div class="mb-6">
            <button class="bg-black text-white rounded py-2 px-4 hover:bg-black">
                Update Gig
            </button>

            <a href="/" class="text-black ml-4"> Back </a>
        </div>
    </form>
</div>

@endsection
