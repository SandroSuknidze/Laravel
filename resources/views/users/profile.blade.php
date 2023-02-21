@extends('layout')

@section('content')
<div class="border-gray-200 border-64 bg-gray-200 max-w-6xl mx-auto p-10 mt-24">
    <div class="flex flex-row">
        <figure class="">
            <img src="{{asset('images/KROUDI_logo_only_white_background.png')}}" alt="">
        </figure>
        <div>
            <ul class="p-10">
                <li>
                    Name: {{auth()->user()->name}}
                </li>
                <li>
                    Email: {{auth()->user()->email}}
                </li>
                <li>
                    Creation date: {{auth()->user()->created_at}}
                </li>
            </ul>
        </div>
        
    </div>
    
    
</div>









@endsection