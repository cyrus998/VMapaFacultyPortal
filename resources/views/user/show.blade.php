@extends('master')

@section('content')
<div class="mt-24 flex w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800 lg:max-w-4xl">
    <div class="hidden bg-cover lg:block lg:w-1/2" style="background-image: url('https://images.unsplash.com/photo-1616628188550-808682f3926d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1887&q=80');"></div>

    <div class="w-full px-6 py-8 md:px-8 lg:w-1/2">
        <h2 class="text-2xl font-semibold text-center text-gray-700 dark:text-white">
            View User Account
        </h2>

        <p class="text-xl text-center text-gray-600 dark:text-gray-200">
            User Account Details
        </p>

        @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif


        <form>
    

        <div class="mt-4">
            <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200" for="name">Name</label>
            <input readonly type="text" name="name" value="{{ $user->name }}" class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300" />
        </div>

        <div class="mt-4">
            <div class="flex justify-between">
                <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200" for="email">Email</label>
            </div>

            <input readonly type="email" name="email" value="{{ $user->email }}" class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300" />
        </div>
        
        <div class="mt-4">
            <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200" for="facultyNumber">Faculty No:</label>
            <input readonly type="number" name="facultyNumber" value="{{ $user->facultyNumber }}" class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300" />
        </div>

        <div class="mt-4">
            <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200" for="role">Role</label>
            <input readonly type="number" name="role" value="{{ $user->role }}" class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300" />
        </div>
        </form>

    </div>
</div>
@endsection