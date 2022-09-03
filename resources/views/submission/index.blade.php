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
    <div class="alert alert-success">
        <p>{{ $message }}</p>
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
                            <th scope="col" class="px-5 py-3 bg-slate-800 border-b border-gray-200 text-white text-left text-sm uppercase font-normal"></th>
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
                                    <a href="{{ route('submissions.edit', $submission->id) }}" class="text-indigo-600 hover:text-indigo-900"> Edit </a>
                                    <a href="{{ route('submissions.show', $submission->id) }}" class="text-indigo-600 hover:text-indigo-900"> Show </a> @csrf @method('DELETE') <button type="submit" class="text-indigo-600 hover:text-indigo-900">Delete</button>
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
@endsection
</body>