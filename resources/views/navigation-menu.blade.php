<nav class="bg-gray-900 border-gray-200 px-2 sm:px-4 py-2.5">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
        <!-- Logo -->
        {{-- For Admins --}}
        @if (Auth::user()->role == '1')
        <div class="shrink-0 flex items-center">
            <a href="/">
                <x-jet-application-mark class="block h-9 w-auto" />
            </a>
        </div>
        @endif

        {{-- For regular users --}}
        @if (Auth::user()->role == '0')
        <div class="shrink-0 flex items-center">
            <a href="{{ route('homeview') }}">
                <x-jet-application-mark class="block h-9 w-auto" />
            </a>
            <h1 class="text-white text-2xl ml-5">Victorino Mapa</h1>
        </div>
        @endif

        <div class="flex items-center md:order-2">

            <!-- Dropdown menu -->
            <div class="ml-3 relative">
                <x-jet-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        </button>
                        @else
                        <span class="inline-flex rounded-md">
                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                {{ Auth::user()->name }}

                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </span>
                        @endif
                    </x-slot>

                    <x-slot name="content">
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Manage Account') }}
                        </div>

                        <x-jet-dropdown-link href="{{ route('profile.show') }}">
                            {{ __('Profile') }} (ID: <span class="text-stone-700 font-bold">{{ auth()->user()->facultyNumber }} </span>)
                        </x-jet-dropdown-link>

                        @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                            {{ __('API Tokens') }}
                        </x-jet-dropdown-link>
                        @endif

                        <div class="border-t border-gray-100"></div>

                        {{-- For Admins --}}
                        @if (Auth::user()->role == '1')
                        <div class="pt-2 pb-3 space-y-1">

                            <x-jet-responsive-nav-link href="/users" :active="request()->routeIs('users')">
                                {{ __('Users and Roles') }}
                            </x-jet-responsive-nav-link>

                            <x-jet-responsive-nav-link href="/facultyannouncements" :active="request()->routeIs('facultyannouncements')">
                                {{ __('Faculty Announcements') }}
                            </x-jet-responsive-nav-link>

                            <x-jet-responsive-nav-link href="/publicannouncements" :active="request()->routeIs('publicannouncements')">
                                {{ __('Public Announcements') }}
                            </x-jet-responsive-nav-link>

                            <x-jet-responsive-nav-link href="/submissions" :active="request()->routeIs('submissions')">
                                {{ __('Manage Admissions') }}
                            </x-jet-responsive-nav-link>

                            <x-jet-responsive-nav-link href="/subjects" :active="request()->routeIs('subjects')">
                                {{ __('Subjects') }}
                            </x-jet-responsive-nav-link>

                            <x-jet-responsive-nav-link href="/portfolios" :active="request()->routeIs('portfolios')">
                                {{ __('Instructors Information') }}
                            </x-jet-responsive-nav-link>

                            <x-jet-responsive-nav-link href="/chart" :active="request()->routeIs('chart')">
                                {{ __('Analytics') }}
                            </x-jet-responsive-nav-link>

                            <x-jet-responsive-nav-link href="/adminchat" :active="request()->routeIs('portfolios')">
                                {{ __('Admin Chat') }}
                            </x-jet-responsive-nav-link>

                            <x-jet-responsive-nav-link href="/allcontactusmessages" :active="request()->routeIs('allcontactusmessages')">
                                {{ __('Inquiries Forms') }}
                            </x-jet-responsive-nav-link>

                            
                        </div>
                        @endif

                        {{-- For Regular Users --}}
                        @if (Auth::user()->role == '0')
                        <div class="pt-2 pb-3 space-y-1">
                            <x-jet-responsive-nav-link href="/facultyannouncements" :active="request()->routeIs('facultyannouncements')">
                                {{ __('Faculty Announcement') }}
                            </x-jet-responsive-nav-link>

                            <!-- <x-jet-responsive-nav-link href="{{ route('portfolio') }}" :active="request()->routeIs('portfolio')">
                                {{ __('My Portfolio.') }}
                            </x-jet-responsive-nav-link> -->

                            <x-jet-responsive-nav-link href="/selfinfos" :active="request()->routeIs('selfinfos')">
                                {{ __('My Personal Details.') }}
                            </x-jet-responsive-nav-link>

                            <x-jet-responsive-nav-link href="{{ route('myhandledsections') }}" :active="request()->routeIs('myhandledsections')">
                                {{ __('View My Handled Sections.') }}
                            </x-jet-responsive-nav-link>
                        </div>
                        @endif

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}" x-data>
                            @csrf

                            <x-jet-dropdown-link class="bg-red-500 rounded" href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                {{ __('Log Out') }}
                            </x-jet-dropdown-link>
                        </form>
                    </x-slot>
                </x-jet-dropdown>
            </div>
        </div>

        {{-- Main Nav Bar Non responsive --}}
        <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="mobile-menu-2">
            <ul class="flex flex-col p-4 mt-4 rounded-lg border md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 bg-gray-900  border-gray-700">
                {{-- For Admins --}}
                @if (Auth::user()->role == '1')

                <x-jet-nav-link style="color: white;" href="/users" :active="request()->routeIs('/users')">
                    {{ __('Users and Roles') }}
                </x-jet-nav-link>
                
                <x-jet-nav-link style="color: white;" href="/facultyannouncements" :active="request()->routeIs('/facultyannouncements')">
                {{ __('Faculty Announcements') }}
                </x-jet-nav-link>

                <x-jet-nav-link style="color: white;" href="/publicannouncements" :active="request()->routeIs('/publicannouncements')">
                {{ __('Public Announcements') }}
                </x-jet-nav-link>

                <x-jet-nav-link style="color: white;" href="/submissions" :active="request()->routeIs('/submissions')">
                {{ __('Manage Admissions') }}
                </x-jet-nav-link>

                <x-jet-nav-link style="color: white;" href="/subjects" :active="request()->routeIs('/subjects')">
                    {{ __('Subjects') }}
                </x-jet-nav-link>

                <x-jet-nav-link style="color: white;" href="/portfolios" :active="request()->routeIs('/portfolios')">
                    {{ __('Instructors Information') }}
                </x-jet-nav-link>

                <x-jet-nav-link style="color: white;" href="/chart" :active="request()->routeIs('/chart')">
                    {{ __('Analytics') }}
                </x-jet-nav-link>

                <x-jet-nav-link style="color: white;" href="/adminchat" :active="request()->routeIs('/adminchat')">
                    {{ __('Admin Chat') }}
                </x-jet-nav-link>

                <x-jet-nav-link style="color: white;" href="/allcontactusmessages" :active="request()->routeIs('/allcontactusmessages')">
                    {{ __('Inquiries Forms') }}
                </x-jet-nav-link>

              

                @endif

                {{-- For regular users --}}

                @if (Auth::user()->role == '0')
                <x-jet-nav-link style="color: white;" href="/facultyannouncements" :active="request()->routeIs('facultyannouncements')">
                    {{ __('News and Announcement') }}
                </x-jet-nav-link>

                <!-- <x-jet-nav-link style="color: white;" href="{{ route('portfolio') }}" :active="request()->routeIs('portfolio')">
                    {{ __('My Portfolio.') }}
                </x-jet-nav-link> -->

                <x-jet-nav-link style="color: white;" href="/selfinfos" :active="request()->routeIs('selfinfos')">
                    {{ __('My Personal Details.') }}
                </x-jet-nav-link>

                <x-jet-nav-link style="color: white;" href="{{ route('myhandledsections') }}" :active="request()->routeIs('myhandledsections')">
                    {{ __('View My Handled Sections.') }}
                </x-jet-nav-link>
                @endif
            </ul>
        </div>
    </div>

</nav>