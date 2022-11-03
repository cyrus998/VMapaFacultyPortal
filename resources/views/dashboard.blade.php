<script src="https://cdn.tailwindcss.com"></script>

<x-app-layout>

    <x-slot name="header">

        @if(Auth::user()->role=="1")
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
        @endif
        @if(Auth::user()->role=="0")
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Dashboard') }}
        </h2>
        @endif
    </x-slot>

    @if(Auth::user()->role=="0")
    <section class=" lg:py-12 lg:flex lg:justify-center p-4 rounded">
        <div class=" bg-gray-800 lg:mx-8 lg:flex lg:max-w-5xl lg:shadow-lg lg:rounded-lg">
            <div class="lg:w-1/2">
                <div class="h-64 bg-cover lg:rounded-lg lg:h-full" style="background-image:url('https://images.unsplash.com/photo-1589994284978-c98238e44443?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1229&q=80')"></div>
            </div>

            <div class="max-w-xl px-6 py-12 lg:max-w-5xl lg:w-1/2">
                <h2 class="text-l font-bold text-white md:text-xl">Welcome, <span class="text-blue-600">{{ auth()->user()->name }}.</span></h2>
                <h2 class="text-2xl font-bold text-white md:text-3xl">You are an <span class="text-blue-600">Instructor.</span></h2>
                <p class="mt-4 text-white ">
                    Manage your profile, add information details, see your current handled subjects, and view all the available and latest news and announcements posted by your institution.
                </p>

                <div class="mt-8">
                    <a href="/facultyannouncements" class="px-5 py-2 font-semibold text-gray-100 transition-colors duration-300 transform bg-gray-900 rounded-md hover:bg-gray-700">Start Now</a>
                </div>
            </div>
        </div>
    </section>



    @endif

    @if(Auth::user()->role=="1")

    <section class=" lg:py-12 lg:flex lg:justify-center p-4 rounded">
        <div class=" bg-gray-800 lg:mx-8 lg:flex lg:max-w-5xl lg:shadow-lg lg:rounded-lg">
            <div class="lg:w-1/2">
                <div class="h-64 bg-cover lg:rounded-lg lg:h-full" style="background-image:url('https://images.unsplash.com/photo-1589994284978-c98238e44443?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1229&q=80')"></div>
            </div>

            <div class="max-w-xl px-6 py-12 lg:max-w-5xl lg:w-1/2">
                <h2 class="text-l font-bold text-white md:text-xl">Welcome, <span class="text-blue-600">{{ auth()->user()->name }}.</span></h2>
                <h2 class="text-2xl font-bold text-white md:text-3xl">You are an <span class="text-blue-600">Administrator.</span></h2>
                <p class="mt-4 text-white ">You may now manage, edit, and update information regarding Users, Subjects, and Others. Tools are readily available for you, you may also wish to assign roles individualy for each users.</p>


                <div class="mt-8">
                    <a href="/users" class="px-5 py-2 font-semibold text-gray-100 transition-colors duration-300 transform bg-gray-900 rounded-md hover:bg-gray-700">Start Now</a>
                </div>
            </div>
        </div>
    </section>


    @endif
</x-app-layout>