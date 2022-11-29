<script src="https://cdn.tailwindcss.com"></script>


<style>
    html {
        background-image: url('https://images.unsplash.com/photo-1593588332695-cd49488a8ec8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1674&q=80');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>

<section class="relative">


    <div class="hidden sm:block sm:inset-0 sm:absolute sm:bg-gradient-to-r sm:from-white sm:to-transparent"></div>

    <div class="relative max-w-screen-xl px-4 py-32 mx-auto lg:h-screen lg:items-center lg:flex">
        <div class="max-w-xl text-center sm:text-left">
            <h1 class="text-3xl font-extrabold sm:text-5xl">
                Welcome.
                <strong class="font-extrabold text-rose-700 sm:block">
                    Victorino Mapa High School.
                </strong>
            </h1>

            <p class="max-w-lg mt-4 sm:leading-relaxed sm:text-xl">
               Official Website of Victorino Mapa High School.
            </p>
            @if (Route::has('login'))
                <div class="flex flex-wrap gap-4 mt-8 text-center">
                    @auth
                        @if(Auth::check())
                        @if (Auth::user()->role == '1')
                        <a class="block w-full px-12 py-3 text-sm font-medium text-white rounded shadow bg-rose-600 sm:w-auto active:bg-rose-500 hover:bg-rose-700 focus:outline-none focus:ring"
                            href="{{ url('/redirects') }}">
                            Manage Administrative Tools
                        </a>
                        @endif
                        @if (Auth::user()->role == '0')
                        <a class="block w-full px-12 py-3 text-sm font-medium text-white rounded shadow bg-rose-600 sm:w-auto active:bg-rose-500 hover:bg-rose-700 focus:outline-none focus:ring"
                            href="{{ url('/dashboard') }}">
                            Dashboard
                        </a>
                        @endif
                        @endif
                    @else
                        <a class="block w-full px-12 py-3 text-sm font-medium text-white rounded shadow bg-rose-600 sm:w-auto active:bg-rose-500 hover:bg-rose-700 focus:outline-none focus:ring"
                            href="{{ route('login') }}">
                            Login
                        </a>
                        @if (Route::has('register'))
                            <a class="block w-full px-12 py-3 text-sm font-medium bg-white rounded shadow text-rose-600 sm:w-auto hover:text-rose-700 active:text-rose-500 focus:outline-none focus:ring"
                                href="{{ route('register') }}">
                                Register
                            </a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
</section>
