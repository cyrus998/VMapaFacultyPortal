@if(Auth::check())
@if (Auth::user()->role == '1')

<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Manage Subjects
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-full mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4 w-full overflow-x-auto">
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
            <button wire:click="create()"
                class="bg-blue-500 hover:bg-blue-700 mt-3 text-white font-bold py-2 px-4 rounded my-3">Create New
                Subject</button>
            @if ($isOpen)
                @include('livewire.subjects.create')
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
                        <th
                            class="px-4 py-2 w-20 bg-slate-800 border-b border-gray-200 text-white text-left text-sm uppercase font-normal ">
                            No.</th>
                        <th
                            class="px-4 py-2 bg-slate-800 border-b border-gray-200 text-white text-left text-sm uppercase font-normal">
                            Subject / Course Name</th>
                        <th
                            class="px-4 py-2 bg-slate-800 border-b border-gray-200 text-white text-left text-sm uppercase font-normal">
                            Course Code</th>

                        <th
                            class="px-4 py-2 bg-slate-800 border-b border-gray-200 text-white text-left text-sm uppercase font-normal">
                            Instructor</th>
                        <th
                            class="px-4 py-2 bg-slate-800 border-b border-gray-200 text-white text-left text-sm uppercase font-normal">
                            Day of the Subject</th>
                        <th
                            class="px-4 py-2 bg-slate-800 border-b border-gray-200 text-white text-left text-sm uppercase font-normal">
                            Start Time</th>
                        <th
                            class="px-4 py-2 bg-slate-800 border-b border-gray-200 text-white text-left text-sm uppercase font-normal">
                            End Time</th>
                        <th
                            class="px-4 py-2 bg-slate-800 border-b border-gray-200 text-white text-left text-sm uppercase font-normal">
                            Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subjects as $subject)
                        <tr>
                            <td class="border px-4 py-2">{{ $subject->id }}</td>
                            <td class="border px-4 py-2">{{ $subject->subjectname }}</td>
                            <td class="border px-4 py-2">{{ $subject->coursecode }}</td>
                            <td class="border px-4 py-2">{{ $subject->instructor }}</td>
                            <td class="border px-4 py-2">{{ $subject->subjectday }}</td>
                            <td class="border px-4 py-2">{{ $subject->starttime }}</td>
                            <td class="border px-4 py-2">{{ $subject->endtime }}</td>
                            <td class="border px-4 py-2">

                                <a wire:click="edit({{ $subject->id }})">
                                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="-2 -2 25 25" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path></svg>
                                        <span class="sr-only">Edit</span>
                                    </button>
                                </a>
                                {{-- wire:click="delete({{ $subject->id }})" --}}
                                <a wire:click.prevent='deleteConfirmation({{$subject->id}})'>
                                    <button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-red-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                        <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewBox="-3 -3 30 30" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M 10 2 L 9 3 L 3 3 L 3 5 L 21 5 L 21 3 L 15 3 L 14 2 L 10 2 z M 4.3652344 7 L 5.8925781 20.263672 C 6.0245781 21.253672 6.877 22 7.875 22 L 16.123047 22 C 17.121047 22 17.974422 21.254859 18.107422 20.255859 L 19.634766 7 L 4.3652344 7 z"></path></svg>
                                        <span class="sr-only">Delete</span>
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mt-6">
                {{ $subjects->links() }}
            </div>

        </div>

        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mt-4 px-4 py-4 w-full overflow-x-auto">
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full text-center">
                            <thead class="border-b bg-gray-800">
                                <tr>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Time
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Monday
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Tuesday
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Wednesday
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Thursday
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Friday
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Saturday
                                </th>
                                <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                    Suday
                                </th>
                                </tr>
                            </thead class="border-b">
                            <tbody>
                                <tr class="bg-white border-b">
                                    <td class="border px-4 py-2">{{ $subject->subjectday }}</td>
                                    <td class="border px-4 py-2">{{ $subject->subjectname }} <br> {{ $subject->coursecode }} <br> {{ $subject->instructor }} <br> {{ $subject->starttime }} <br> {{ $subject->endtime }}</td>
                                    <td class="border px-4 py-2"></td>
                                    <td class="border px-4 py-2"></td>
                                    <td class="border px-4 py-2"></td>
                                    <td class="border px-4 py-2"></td>
                                    <td class="border px-4 py-2"></td>
                                    <td class="border px-4 py-2"></td>
                                </tr>
                            </tbody>
                            </table>
                        </div>
                    </div>
                </div>
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
