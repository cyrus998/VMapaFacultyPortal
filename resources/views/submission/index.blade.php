@if(Auth::check())
@if (Auth::user()->role == '1')


@extends('nonusernav')
@section('content')

<body class="bg-[url('https://images.unsplash.com/photo-1586775490184-b79f0621891f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80')]">
    <div class="container mx-auto px-4 sm:px-8 max-w-full mt-5">
        <div class="pull-right ml-5">
            <a href="{{ route('submissions.create') }}">
                <button class="flex items-center px-4 py-2 font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                    <svg class="w-5 h-5 mx-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd" />
                    </svg>

                    <span class="mx-1">Add New Submission</span>
                </button>
            </a>
        </div>

        @if ($message = Session::get('success'))
        <div class="flex items-center justify-between mt-5 p-4 border rounded gap-4 text-sky-700 border-sky-900/10 bg-sky-50" role="alert">
            <div class="flex items-center gap-4">
                <span class="p-2 text-white rounded-full bg-sky-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </span>

                <p>
                    <strong class="text-sm font-medium"> Info! </strong>

                    <span class="block text-xs opacity-90">
                        {{ $message }}
                    </span>
                </p>
            </div>
            </button>
        </div>
        @endif


        <div class="py-8">
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                    <table class="min-w-full leading-normal">
                        <thead>
                            <tr>
                                <th scope="col" class="px-5 py-3 bg-slate-800 border-b border-gray-200 text-white text-left text-sm uppercase font-normal"> Applicant Name </th>
                                <th scope="col" class="px-5 py-3 bg-slate-800 border-b border-gray-200 text-white text-left text-sm uppercase font-normal"> Image </th>
                                <th scope="col" class="px-5 py-3 bg-slate-800 border-b border-gray-200 text-white text-left text-sm uppercase font-normal"> Form 137 </th>
                                <th scope="col" class="px-5 py-3 bg-slate-800 border-b border-gray-200 text-white text-left text-sm uppercase font-normal"> Details </th>
                                <th scope="col" class="px-5 py-3 bg-slate-800 border-b border-gray-200 text-white text-left text-sm uppercase font-normal"> status </th>
                                <th scope="col" class="px-5 py-3 bg-slate-800 border-b border-gray-200 text-white text-left text-sm uppercase font-normal"> Actions</th>
                            </tr>
                        </thead>
                        <tbody> @foreach ($submissions as $submission) <tr>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-left">
                                    <div class="flex items-center">
                                        <div class="ml-3">
                                            <p class="text-gray-900 whitespace-no-wrap">
                                                {{ $submission->name }}
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-left">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        <a href="/uploads/{{ $submission->image }}">
                                            <img src="/uploads/{{ $submission->image }}" width="100px">
                                        </a>
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-left">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        <a href="/uploads/{{ $submission->form137 }}">Click to View Form 137 </a>
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-left">
                                    <p class="text-gray-900 whitespace-no-wrap">
                                        {{ $submission->detail }}s
                                    </p>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-left">
                                    <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                                        <span aria-hidden="true" class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                                        <span class="relative"> active </span>
                                    </span>
                                </td>
                                <td class="px-5 py-5 border-b border-gray-200 bg-white text-left">
                                    <form action="{{ route('submissions.destroy', $submission->id) }}" method="POST">
                                        <a href="{{ route('submissions.edit', $submission->id) }}" class="text-indigo-600 hover:text-indigo-900 mr-5"> Edit </a>
                                        <!-- <a href="{{ route('submissions.show', $submission->id) }}" class="text-indigo-600 hover:text-indigo-900"> Show </a>  -->
                                        @csrf @method('DELETE') <button type="submit" class="text-indigo-600 hover:text-indigo-900">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="ml-10 mr-10 mb-16">
                {!! $submissions->links() !!}
            </div>
        </div>
    </div>
    </div>

</body>
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