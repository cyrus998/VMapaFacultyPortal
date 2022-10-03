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
                            <td class="border px-4 py-2">
                                <a wire:click="edit({{ $subject->id }})">
                                    <span
                                        class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden="true"
                                            class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                        <span class="relative"> edit </span>
                                    </span>
                                </a>

                                <a wire:click="delete({{ $subject->id }})">
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
                {{ $subjects->links() }}
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
