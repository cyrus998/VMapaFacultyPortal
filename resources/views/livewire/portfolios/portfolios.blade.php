<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Manage Portfolios
    </h2>
</x-slot>

<div class="py-12">
    @if (session()->has('message'))
        <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3"
            role="alert">
            <div class="flex">
                <div>
                    <p class="text-sm">{{ session('message') }}</p>
                </div>
            </div>
        </div>
    @endif
    {{-- <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Create New Post</button> --}}
    @if ($isOpen)
        @include('livewire.portfolios.create')
    @endif

    @if (Auth::user()->role == '0')
        @foreach ($portfolios->where('name', '=', auth()->user()->name) as $portfolio)
            <div class="justify-center items-center">
                <div
                    class="max-w-lg flex flex-col bg-white relative overflow-hidden rounded-lg border border-gray-100 p-8">
                    <span
                        class="absolute inset-x-0 bottom-0 h-2 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"></span>

                    <div class="justify-between sm:flex">
                        <div>
                            <h5 class="text-xl font-bold text-gray-900">
                                {{ $portfolio->name }}
                            </h5>

                            <a class="text-sm text-sky-700" wire:click="edit({{ $portfolio->id }})">Click to
                                edit.</a>

                            <p class="mt-1 text-xs font-medium text-gray-600">Faculty Number:
                                {{ $portfolio->facultyNumber }} </p>
                        </div>

                        <div class="ml-3 hidden flex-shrink-0 sm:block">
                            <img alt="Paul Clapton"
                                src="https://scontent.fmnl4-6.fna.fbcdn.net/v/t39.30808-6/285338919_2570940529705391_3275412470095003612_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=a_0Rt7dwskMAX_ampdW&tn=5upIBBEiU4HR_pbP&_nc_ht=scontent.fmnl4-6.fna&oh=00_AT9nA0N6XS9W-77EBoZp2pvoN3XxxVAdpxzYH9KM2Qyhqg&oe=6341022F"
                                class="h-16 w-16 rounded-full object-cover shadow-sm" />
                        </div>
                    </div>

                    <div class="flex items-center mt-4 text-gray-700">
                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M3.00977 5.83789C3.00977 5.28561 3.45748 4.83789 4.00977 4.83789H20C20.5523 4.83789 21 5.28561 21 5.83789V17.1621C21 18.2667 20.1046 19.1621 19 19.1621H5C3.89543 19.1621 3 18.2667 3 17.1621V6.16211C3 6.11449 3.00333 6.06765 3.00977 6.0218V5.83789ZM5 8.06165V17.1621H19V8.06199L14.1215 12.9405C12.9499 14.1121 11.0504 14.1121 9.87885 12.9405L5 8.06165ZM6.57232 6.80554H17.428L12.7073 11.5263C12.3168 11.9168 11.6836 11.9168 11.2931 11.5263L6.57232 6.80554Z" />
                        </svg>
                        <h1 class="px-2 text-sm">Address: </h1>
                    </div>

                    <div class="sm:pr-8">
                        <p class="text-sm text-gray-500">
                            {{ $portfolio->address }}
                        </p>
                    </div>

                    <p class="flex items-start -mx-2 mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mx-2 text-blue-500 dark:text-blue-400"
                            fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>

                        <span class="text-sm text-gray-500">{{ $portfolio->email }}</span>
                    </p>

                    <div class="mt-4 sm:pr-8">
                        <p class="text-sm text-gray-500">
                            {{ $portfolio->aboutme }}
                        </p>
                    </div>

                    <dl class="mt-6 flex">
                        <div class="flex flex-col-reverse">
                            <svg class="h-4 w-4 text-indigo-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                            </svg>
                            <div class="sm:ml-3 mt-1.5 sm:mt-0">
                                <dt class="text-gray-500">Subject Expertise:
                                    {{ $portfolio->subjectexpertise }} </dt>
                                <dd class="font-medium"></dd>
                            </div>
                        </div>

                        <div class="flex flex-col-reverse ml-5">
                            <svg class="h-4 w-4 text-indigo-700" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                            </svg>
                            <div class="sm:ml-3 mt-1.5 sm:mt-0">
                                <dt class="text-gray-500"> Mobile No. : {{ $portfolio->contactnumber }}</dt>
                                <dd class="font-medium"></dd>
                            </div>
                        </div>
                    </dl>
                </div>
            </div>
        @endforeach
    @endif


    @if (Auth::check())
        @if (Auth::user()->role == '1')


            <div class="max-w-full mx-auto sm:px-6 lg:px-8 ">

                <div class="flex mt-5 justify-center items-center">
                    <div class="flex border-2 rounded">
                        <input wire:model="term" type="text" class="px-4 py-2 w-80" placeholder="Search...">
                        <button class="flex items-center justify-center px-4 border-l">
                            <svg class="w-6 h-6 text-gray-600" fill="currentColor" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M16.32 14.9l5.39 5.4a1 1 0 0 1-1.42 1.4l-5.38-5.38a8 8 0 1 1 1.41-1.41zM10 16a6 6 0 1 0 0-12 6 6 0 0 0 0 12z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-8 mt-5 md:grid-cols-2 lg:grid-cols-3">

                    @foreach ($portfolios->where('position', 'teacher') as $portfolio)
                        <div class="card1 flex-col px-4 ">
                            <div
                                class="max-w-lg flex flex-col bg-white relative overflow-hidden rounded-lg border border-gray-100 p-8">
                                <span
                                    class="absolute inset-x-0 bottom-0 h-2 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"></span>

                                <div class="justify-between sm:flex">
                                    <div>
                                        <h5 class="text-xl font-bold text-gray-900">
                                            {{ $portfolio->name }}
                                        </h5>

                                        <a class="text-sm text-sky-700" wire:click="edit({{ $portfolio->id }})">Click
                                            to
                                            edit.</a>

                                        <p class="mt-1 text-xs font-medium text-gray-600">Faculty Number:
                                            {{ $portfolio->facultyNumber }} </p>
                                    </div>

                                    <div class="ml-3 hidden flex-shrink-0 sm:block">
                                        <img alt="Paul Clapton"
                                            src="https://scontent.fmnl4-6.fna.fbcdn.net/v/t39.30808-6/285338919_2570940529705391_3275412470095003612_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=a_0Rt7dwskMAX_ampdW&tn=5upIBBEiU4HR_pbP&_nc_ht=scontent.fmnl4-6.fna&oh=00_AT9nA0N6XS9W-77EBoZp2pvoN3XxxVAdpxzYH9KM2Qyhqg&oe=6341022F"
                                            class="h-16 w-16 rounded-full object-cover shadow-sm" />
                                    </div>
                                </div>

                                <div class="flex items-center mt-4 text-gray-700">
                                    <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M3.00977 5.83789C3.00977 5.28561 3.45748 4.83789 4.00977 4.83789H20C20.5523 4.83789 21 5.28561 21 5.83789V17.1621C21 18.2667 20.1046 19.1621 19 19.1621H5C3.89543 19.1621 3 18.2667 3 17.1621V6.16211C3 6.11449 3.00333 6.06765 3.00977 6.0218V5.83789ZM5 8.06165V17.1621H19V8.06199L14.1215 12.9405C12.9499 14.1121 11.0504 14.1121 9.87885 12.9405L5 8.06165ZM6.57232 6.80554H17.428L12.7073 11.5263C12.3168 11.9168 11.6836 11.9168 11.2931 11.5263L6.57232 6.80554Z" />
                                    </svg>
                                    <h1 class="px-2 text-sm">Address: </h1>
                                </div>

                                <div class="sm:pr-8">
                                    <p class="text-sm text-gray-500">
                                        {{ $portfolio->address }}
                                    </p>
                                </div>

                                <p class="flex items-start -mx-2 mt-2">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-6 h-6 mx-2 text-blue-500 dark:text-blue-400" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>

                                    <span class="text-sm text-gray-500">{{ $portfolio->email }}</span>
                                </p>

                                <div class="mt-4 sm:pr-8">
                                    <p class="text-sm text-gray-500">
                                        {{ $portfolio->aboutme }}
                                    </p>
                                </div>

                                <dl class="mt-6 flex">
                                    <div class="flex flex-col-reverse">
                                        <svg class="h-4 w-4 text-indigo-700" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                                        </svg>
                                        <div class="sm:ml-3 mt-1.5 sm:mt-0">
                                            <dt class="text-gray-500">Subject Expertise:
                                                {{ $portfolio->subjectexpertise }} </dt>
                                            <dd class="font-medium"></dd>
                                        </div>
                                    </div>

                                    <div class="flex flex-col-reverse ml-5">
                                        <svg class="h-4 w-4 text-indigo-700" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                        </svg>
                                        <div class="sm:ml-3 mt-1.5 sm:mt-0">
                                            <dt class="text-gray-500"> Mobile No. : {{ $portfolio->contactnumber }}
                                            </dt>
                                            <dd class="font-medium"></dd>
                                        </div>
                                    </div>
                                </dl>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="mt-6">
                    {{ $portfolios->links() }}
                </div>

                <div class="bg-white mt-5 shadow-xl sm:rounded-lg px-4 py-4 overflow-hidden overflow-x-auto">

                    <table class="table-fixed w-full">
                        <thead>

                            <tr class="bg-gray-800 text-white rounded">
                                {{-- <th class="px-4 py-2 w-20">No.</th> --}}
                                <th class="px-4 py-2">Faculty Number</th>
                                <th class="px-4 py-2">Name</th>
                                <th class="px-4 py-2">Contact Number</th>
                                <th class="px-4 py-2">Address</th>
                                <th class="px-4 py-2">About Me</th>
                                <th class="px-4 py-2">Subject Expertise</th>
                                <th class="px-4 py-2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($portfolios->where('position', 'teacher') as $portfolio)
                                <tr>
                                    {{-- <td class="border px-4 py-2">{{ $portfolio->id }}</td> --}}
                                    <td class="border px-4 py-2">{{ $portfolio->facultyNumber }}</td>
                                    <td class="border px-4 py-2">{{ $portfolio->name }}</td>
                                    <td class="border px-4 py-2">{{ $portfolio->contactnumber }}</td>
                                    <td class="border px-4 py-2">{{ $portfolio->address }}</td>
                                    <td class="border px-4 py-2">{{ $portfolio->aboutme }}</td>
                                    <td class="border px-4 py-2">{{ $portfolio->subjectexpertise }}</td>
                                    <td class="border px-4 py-2">
                                        <button wire:click="edit({{ $portfolio->id }})"
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
</div>



@endif

{{-- @if (Auth::user()->role == '0') --}}


{{-- @endif --}}

@endif
