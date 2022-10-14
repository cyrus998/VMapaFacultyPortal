@if(Auth::check())
@if (Auth::user()->role == '1')

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Manage Users, Roles, and Positions
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-full mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 mb-5 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3"
                    role="alert">
                    <div class="flex">
                        <div>
                            <p class="text-sm">{{ session('message') }}</p>
                        </div>
                    </div>
                </div>
            @endif
            <button wire:click="create()"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Create New
                User</button>
            @if ($isOpen)
                @include('livewire.users.create')
            @endif


            <div class="flex items-left mt-5">
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

            
            <table class="table-fixed w-full rounded-lg shadow mt-5 ">

                <thead class="rounded-xl">
                    <tr class="bg-gray-100 rounded-xl ">
                        <th class="px-4 py-2 w-20">No.</th>
                        <th
                            class="px-4 py-2 w-20 bg-slate-800 border-b border-gray-200 text-white text-left text-sm uppercase font-normal ">
                            Name</th>
                        <th
                            class="px-4 py-2 w-20 bg-slate-800 border-b border-gray-200 text-white text-left text-sm uppercase font-normal ">
                            Email</th>
                        {{-- <th
                            class="px-4 py-2 w-20 bg-slate-800 border-b border-gray-200 text-white text-left text-sm uppercase font-normal ">
                            Password</th> --}}
                        <th
                            class="px-4 py-2 w-20 bg-slate-800 border-b border-gray-200 text-white text-left text-sm uppercase font-normal ">
                            Faculty Number</th>
                        <th
                            class="px-4 py-2 w-20 bg-slate-800 border-b border-gray-200 text-white text-left text-sm uppercase font-normal ">
                            Role</th>
                        <th
                            class="px-4 py-2 w-20 bg-slate-800 border-b border-gray-200 text-white text-left text-sm uppercase font-normal ">
                            Position</th>
                        <th
                            class="px-4 py-2 w-20 bg-slate-800 border-b border-gray-200 text-white text-left text-sm uppercase font-normal ">
                            Action</th>
                    </tr>
                </thead>
                <tbody>


                    @foreach ($users as $user)
                        <tr>
                            <td class="border px-4 py-2">{{ $user->id }}</td>
                            <td class="border px-4 py-2">{{ $user->name }}</td>
                            <td class="border px-4 py-2">{{ $user->email }}</td>
                            {{-- <td class="border px-4 py-2">{{ $user->password }}</td> --}}
                            <td class="border px-4 py-2">{{ $user->facultyNumber }}</td>
                            <td class="border px-4 py-2">{{ $user->role }}</td>
                            <td class="border px-4 py-2">{{ $user->position }}</td>
                            <td class="border px-4 py-2">

                                <a wire:click="edit({{ $user->id }})">
                                    <span
                                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden="true"
                                            class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                        <span class="relative"> edit </span>
                                    </span>
                                </a>
                                {{-- wire:click="delete({{ $subject->id }})" --}}
                                <a wire:click.prevent="deleteConfirmation({{ $user->id }})">
                                    <span
                                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden="true"
                                            class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                                        <span class="relative"> delete </span>
                                    </span>
                                </a>


                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mt-6">
                {{ $users->links() }}
            </div>
        </div>
    </div>
</div>


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