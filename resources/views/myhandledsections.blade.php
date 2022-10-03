<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Handled Sections') }}
        </h2>
    </x-slot>

    {{-- content starts here --}}




    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4 w-full overflow-x-auto">

                <table class="table-fixed w-full rounded-lg shadow mt-5 ">
                    <thead class="rounded-xl">
                        <tr class="bg-gray-100 rounded-xl ">
                            {{-- <th
                                class="px-4 py-2 w-20 bg-slate-800 border-b border-gray-200 text-white text-left text-sm uppercase font-normal ">
                                No.</th> --}}
                            <th
                                class="px-4 py-2 bg-slate-800 border-b border-gray-200 text-white text-left text-sm uppercase font-normal">
                                Subject / Course Name</th>
                            <th
                                class="px-4 py-2 bg-slate-800 border-b border-gray-200 text-white text-left text-sm uppercase font-normal">
                                Course Code</th>

                            <th
                                class="px-4 py-2 bg-slate-800 border-b border-gray-200 text-white text-left text-sm uppercase font-normal">
                                Instructor (Current User)</th>

                        </tr>
                    </thead>
                    <tbody>


                        @foreach (App\Models\Subject::where('instructor', '=', auth()->user()->name)->get() as $handledsection)
                            <tr>
                                {{-- <td class="border px-4 py-2">{{ $handledsection->id }}</td> --}}
                                <td class="border px-4 py-2">{{ $handledsection->subjectname }}</td>
                                <td class="border px-4 py-2">{{ $handledsection->coursecode }}</td>
                                <td class="border px-4 py-2">{{ $handledsection->instructor }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
        </div>
    </div>

</x-app-layout>
