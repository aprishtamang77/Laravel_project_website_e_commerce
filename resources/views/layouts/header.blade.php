<header>
    <div class="tin flex mt-6 ml-10 gap-x-10">
        <div class="list list-none flex gap-x-7 cursor-pointer">
            <a href="{{ asset('pages/shop') }}">Shop All</a>
            <a href="{{ asset('pages/electric') }}">Electric Scooters</a>
            <a href="{{ asset('pages/accesories') }}">Accessories</a>
            <a href="{{ asset('pages/about') }}">About</a>
            <a href="{{ asset('pages/contact') }}">Contact</a>
        </div>
        <div class="logo ml-24">
            <span>

                <a href="">
                    <img src="{{ asset('images/logo.png') }}" alt="logo of company">
                </a>
            </span>
        </div>
        <div class="searchProf flex gap-x-4 ml-72">
            {{-- {{ route('/pages/accesories') }} --}}
            <form action="" method="GET">
                @csrf
                <input type="search" placeholder="search for scooter"
                    class="searchBar border-2 solid border-slate-400 p-2 rounded-md">
            </form>
            @if (isset($searchQuery) && $searchResults->count() > 0)
                <h2>Search Results for "{{ $searchQuery }}"</h2>
                <ul>
                    @foreach ($searchResults as $scooter)
                        <li>{{ $scooter->name }}</li>
                    @endforeach
                </ul>
            @elseif (isset($searchQuery))
                <p>No scooters found matching "{{ $searchQuery }}"</p>
            @endif

            <div class="symbol bg-red-700 border-2 solid  p-2 pl-3 rounded-md hover:bg-black ">
                <span>
                    <a href="">
                        <i class="fa-solid fa-greater-than" style="color: #ffffff;"></i>
                    </a>
                </span>
            </div>
            <div class="cart">
                <span>
                    <a href="">
                        <i class="fa-solid fa-cart-shopping mt-6 fa-xl"></i>
                    </a>
                </span>
            </div>
            <div class="profile">
                <span>
                    <a href="{{ route('login') }}">
                        <i class="fa-solid fa-user mt-6 fa-xl"></i>
                    </a>

                </span>
            </div>

        </div>
    </div>
</header>
