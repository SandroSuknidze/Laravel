@extends('layout')

@section('content')
    <div>
        <table class="border-collapse w-5/6 m-auto">
            <tr class="border-2">
                <th class="border-2 bg-gray-100">ID</th>
                <th class="border-2 bg-gray-100">TITLE</th>
                <th class="border-2 bg-gray-100">PRICE</th>
                <th class="border-2 bg-gray-100">IMAGE</th>
            </tr>


            

            {{-- @unless($listings->isEmpty())
            @foreach($listings as $listing)
            <tr class="border-gray-300">
                <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                    <a href="show.html">
                        {{$listing->title}}
                    </a>
                </td>
                <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                    <a
                        href="/listings/{{$listing->id}}/edit"
                        class="text-blue-400 px-6 py-2 rounded-xl"
                        ><i
                            class="fa-solid fa-pen-to-square"
                        ></i>
                        Edit</a
                    >
                </td>
                <td
                    class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                >
                <form method="POST" action="/listings/{{$listing->id}}" class="inline-block ml-5">
                    @csrf
                    @method('DELETE')
        
                    <button class="text-red-500"><i class="fa-solid fa-trash"></i> Delete</button>
                </form>
                </td>
            </tr>
            @endforeach
            @else
            <tr class="border-gray-300">
                <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                    <p class="text-center">No Listings Found</p>
                </td>
            </tr>
            @endunless --}}




            
        </table>
    </div>
@endsection