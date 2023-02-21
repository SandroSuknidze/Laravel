<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{asset('images/KROUDI_logo_only_big.png')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Kroudi</title>
</head>

<body class="mb-48">
    <nav class="flex justify-between items-center mb-4">
        <a href="/"><img class="w-24 ml-4" src="{{asset('images/KROUDI_logo_only.png')}}" alt="logo" class="logo"></a>
        <ul class="flex space-x-6 mr-6 text-lg">
            @auth
            <li>
                <span class="font-bold"> Hello Kroudier {{auth()->user()->name}}</span>
            </li>
            <li>
                <a href="/listings/create"><i class="fa-sharp fa-solid fa-plus"></i> Create Gig</a>
            </li>
            <li>
                <a href="/users/profile"><i class="fa-sharp fa-solid fa-user"></i> Profile</a>
            </li>
            <li>
                <a href="/users/wishlist"><i class="fa-sharp fa-solid fa-shopping-cart"></i> Wishlist</a>
            </li>
            <li>
                <a href="/listings/manage"><i class="fa-solid fa-gear"></i> Manage Gigs</a>
            </li>
            <li>
                <form class="inline" method="POST" action="/logout">
                    @csrf
                    <button type="submit">
                        <i class="fa-solid fa-door-closed"></i> Logout
                    </button>
                </form>
            </li>


            @else
            {{-- <li>
                <a href="/listings/create"><i class="fa-sharp fa-solid fa-plus"></i> Create Gig</a>
            </li> --}}
            <li>
                <a href="/register"><i class="fa-solid fa-user-plus"></i> Register</a>
            </li>
            <li>
                <a href="/login"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a>
            </li>
            @endauth
        </ul>
    </nav>

    @yield('content')

    <x-flash-message/>
</body>

</html>
