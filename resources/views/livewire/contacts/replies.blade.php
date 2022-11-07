@if (Auth::user()->role == '1')

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Create a Test Message, or Reply to a Message Sent Via Contact Form.
    </h2>
</x-slot>
<div class="py-12">

    <div class="max-w-full mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @error('message')

            <div class="flex w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800 mb-5">
                <div class="flex items-center justify-center w-12 bg-red-500">
                    <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833 10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z" />
                    </svg>
                </div>

                <div class="px-4 py-2 -mx-3">
                    <div class="mx-3">
                        <span class="font-semibold text-red-500 dark:text-red-400">Error</span>
                        <p class="text-sm text-gray-600 dark:text-gray-200">
                            {{ $message }}
                        </p>
                    </div>
                </div>
            </div>
            @enderror

            @if (Session::has('success'))
            <div class="flex w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800 mb-3">
                <div class="flex items-center justify-center w-12 bg-blue-500">
                    <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z" />
                    </svg>
                </div>

                <div class="px-4 py-2 -mx-3">
                    <div class="mx-3">
                        <span class="font-semibold text-blue-500 dark:text-blue-400">Email Successfully Replied!</span>
                        <p class="text-sm text-gray-600 dark:text-gray-200">{{Session::get('success')}}</p>
                    </div>
                </div>
            </div>
            @endif


            @if (session()->has('message'))


            <div class="flex w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800 mb-5">
                <div class="flex items-center justify-center w-12 bg-red-500">
                    <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20 3.36667C10.8167 3.36667 3.3667 10.8167 3.3667 20C3.3667 29.1833 10.8167 36.6333 20 36.6333C29.1834 36.6333 36.6334 29.1833 36.6334 20C36.6334 10.8167 29.1834 3.36667 20 3.36667ZM19.1334 33.3333V22.9H13.3334L21.6667 6.66667V17.1H27.25L19.1334 33.3333Z" />
                    </svg>
                </div>

                <div class="px-4 py-2 -mx-3">
                    <div class="mx-3">
                        <span class="font-semibold text-red-500 dark:text-red-400">Success</span>
                        <p class="text-sm text-gray-600 dark:text-gray-200">
                            {{ session('message') }}
                        </p>
                    </div>
                </div>
            </div>

            @endif
            <button wire:click="create()" class="mb-5 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Create a Test Message.</button>
            @if($isOpen)
            @include('livewire.contacts.create')
            @endif

            @foreach($replies as $reply)
            <div class="max-w-full px-8 py-4 rounded-lg shadow-md bg-gray-800 mb-5">
                <div class="flex items-center justify-between">
                    <p hidden>{{ $reply->id }}</p>
                    <span class="text-sm font-light text-gray-400">{{ $reply->created_at }}</span>
                    <a class="px-3 py-1 text-sm font-bold text-white transition-colors duration-300 transform bg-gray-600 rounded cursor-pointer hover:bg-gray-500" tabindex="0" role="button">{{ $reply->email }}</a>
                </div>

                <div class="mt-2">
                    <a href="#" class="text-2xl font-bold text-white hover:text-gray-600 dark:hover:text-gray-200 hover:underline" tabindex="0" role="link">New Concern</a>
                    <p class="mt-2 text-gray-600 dark:text-gray-300">{{ $reply->message }}</p>
                </div>

                <div class="flex items-center justify-between mt-4">
                    <a href="#" class="text-blue-600 dark:text-blue-400 hover:underline" tabindex="0" role="link">Sent In Contacts Form</a>
                </div>

                <form action="{{ route('send.email') }}" method="post">
                    @csrf

                    @if (Session::has('error'))
                    <div class="alert alert-danger">
                        {{ Session::get('error')}}
                    </div>
                    @endif


                    <div hidden class="form-group">
                        <label for="">Email Message</label>
                        <input hidden type="text" class="form-control" name="name" placeholder="enter name" value="Victorino Mapa HighSchool">
                        <input hidden type="email" class="form-control" name="email" placeholder="enter email" value="{{ $reply->email }}">
                        <input hidden type="text" class="form-control" name="messageid" placeholder="enter email" value="{{ $reply->id }}">


                        <input type="text" class="form-control" name="subject" placeholder="enter subject" value="Reply: Victorino Mapa HighSchool">
                        @error('subject') <span class="text-white">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="" class="text-white">Message <span class="dark:text-blue-400 hover:underline">(reply to: {{ $reply->email }})</span></label>
                        <textarea name="message" placeholder="Reply to the concern: " class="mb-3 block w-full px-4 py-2 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300">{{ old('message')}}</textarea>

                    </div>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="submit">Submit Reply</button>
                </form>
                <div style="text-align: right;">
                    <!-- <button wire:click="edit({{ $reply->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button> -->
                    <button wire:click="delete({{ $reply->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                </div>


            </div>
            @endforeach


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