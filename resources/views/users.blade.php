@if(Auth::check())

@extends('master')

@section('content')

@if (Auth::user()->role == '1')
<div class="overflow-x-auto relative ml-3 mr-3 mt-7 rounded-xl">


    <div class="alert alert-success">
        <p></p>
    </div>


    @if ($message = Session::get('success'))
    <div class="flex w-full max-w-sm overflow-hidden mb-5 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <div class="flex items-center justify-center w-12 bg-blue-500">
            <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z" />
            </svg>
        </div>

        <div class="px-4 py-2 -mx-3">
            <div class="mx-3">
                <span class="font-semibold text-blue-500 dark:text-blue-400">Info</span>
                <p class="text-sm text-gray-600 dark:text-gray-200">{{ $message }}</p>
            </div>
        </div>
    </div>
    @endif

    <a href="{{ route('user.create') }}">
        <button class="flex items-center justify-center w-full px-2 py-1 text-white transition-colors duration-300 transform bg-gray-800 rounded-md focus:outline-none sm:w-auto sm:mx-1 hover:bg-blue-500 focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-40">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mx-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4" />
            </svg>
            <span class="mx-1">
                Create New User
            </span>
        </button>
    </a>

    <table class="w-full text-sm  text-gray-400 rounded-xl mt-3">
        <thead class="text-xs text-left text-white uppercase bg-gray-700 ">
            <tr>
                <th scope="col" class="py-3 px-6 text-center">
                    ID
                </th>
                <th scope="col" class="py-3 px-6">
                    Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Email
                </th>
                <th scope="col" class="py-3 px-6">
                    Faculty Number
                </th>
                <th scope="col" class="py-3 px-6">
                    Role
                </th>
                <th scope="col" class="py-3 px-6">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $user)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $loop->index + 1 }}
                </th>
                <td class="py-4 px-6">
                    {{ $user->name }}
                </td>
                <td class="py-4 px-6">
                    {{ $user->email }}
                </td>
                <td class="py-4 px-6">
                    {{ $user->facultyNumber }}
                </td>
                <td class="py-4 px-6">
                    {{ $user->role }}
                </td>
                <td class="py-4 px-6">

                    <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline" href="{{ route('user.show',$user->hashid) }}">Show</a>
                    <a class="font-medium text-blue-600 dark:text-blue-500 hover:underline" href="{{ route('user.edit',$user->hashid) }}">Edit</a>
                    <form action="{{ route('user.delete',$user->hashid) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {!! $data->links() !!}


    <div class="relative px-4 py-3 text-white bg-teal-700 pr-14">
        <p class="text-sm font-medium text-left sm:text-center">
          Welcome, <span class="text-teal-300 font-bold">{{ auth()->user()->name }} </span> You are an Administrator.
        </p>
    </div>
</div>

@endsection

@endif

@if (Auth::user()->role == '0')

<div class="flex items-center justify-between p-4 text-red-700 border rounded gap-4 border-red-900/10 bg-red-50" role="alert">
    <div class="flex items-center gap-4">
        <span class="p-2 text-white bg-red-600 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016zM12 9v2m0 4h.01" />
            </svg>
        </span>

        <p>
            <strong class="text-sm font-medium"> Uh-oh! </strong>

            <span class="block text-xs opacity-90">
                You do not have Admin Priviledges to access this page.
            </span>
        </p>
    </div>

    <button class="opacity-90" type="button">
        <span class="sr-only"> Close </span>

        <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
        </svg>
    </button>
</div>
@endif

@endif
