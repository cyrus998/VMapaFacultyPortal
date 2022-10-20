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
                            <th
                                class="px-4 py-2 bg-slate-800 border-b border-gray-200 text-white text-left text-sm uppercase font-normal">
                                Day of the Subject</th>
                            <th
                                class="px-4 py-2 bg-slate-800 border-b border-gray-200 text-white text-left text-sm uppercase font-normal">
                                Start Time</th>
                            <th
                                class="px-4 py-2 bg-slate-800 border-b border-gray-200 text-white text-left text-sm uppercase font-normal">
                                End Time</th>    

                        </tr>
                    </thead>
                    <tbody>


                        @foreach (App\Models\Subject::where('instructor', '=', auth()->user()->name)->get() as $handledsection)
                            <tr>
                                {{-- <td class="border px-4 py-2">{{ $handledsection->id }}</td> --}}
                                <td class="border px-4 py-2">{{ $handledsection->subjectname }}</td>
                                <td class="border px-4 py-2">{{ $handledsection->coursecode }}</td>
                                <td class="border px-4 py-2">{{ $handledsection->instructor }}</td>
                                <td class="border px-4 py-2">{{ $handledsection->subjectday }}</td>
                                <td class="border px-4 py-2">{{ $handledsection->starttime }}</td>
                                <td class="border px-4 py-2">{{ $handledsection->endtime }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
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
                                        <!-- <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                            Time
                                        </th> -->
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
                                            Sunday
                                        </th>
                                    </tr>
                                </thead class="border-b">
                                <tbody>

                                    <tr class="bg-white border-b">
                                        <!-- <td class="border px-4 py-2"></td> -->

                                        <td class="border px-4 py-2">@foreach (App\Models\Subject::get()->where('subjectday', 'Monday')->where('instructor', '=', auth()->user()->name) as $subject)
                                            <br> {{ $subject->subjectname }} <br> {{ $subject->coursecode }} <br> {{ $subject->instructor }} <br> {{ $subject->starttime }} <br> {{ $subject->endtime }}
                                            <hr>
                                            @endforeach
                                        </td>

                                        <td class="border px-4 py-2">@foreach (App\Models\Subject::get()->where('subjectday', 'Tuesday')->where('instructor', '=', auth()->user()->name) as $subject)
                                            <br> {{ $subject->subjectname }} <br> {{ $subject->coursecode }} <br> {{ $subject->instructor }} <br> {{ $subject->starttime }} <br> {{ $subject->endtime }}
                                            <hr>
                                            @endforeach
                                        </td>

                                        <td class="border px-4 py-2">@foreach (App\Models\Subject::get()->where('subjectday', 'Wednesday')->where('instructor', '=', auth()->user()->name) as $subject)
                                            <br> {{ $subject->subjectname }} <br> {{ $subject->coursecode }} <br> {{ $subject->instructor }} <br> {{ $subject->starttime }} <br> {{ $subject->endtime }}
                                            <hr>
                                            @endforeach
                                        </td>

                                        <td class="border px-4 py-2">@foreach (App\Models\Subject::get()->where('subjectday', 'Thursday')->where('instructor', '=', auth()->user()->name) as $subject)
                                            <br> {{ $subject->subjectname }} <br> {{ $subject->coursecode }} <br> {{ $subject->instructor }} <br> {{ $subject->starttime }} <br> {{ $subject->endtime }}
                                            <hr>
                                            @endforeach
                                        </td>

                                        <td class="border px-4 py-2">@foreach (App\Models\Subject::get()->where('subjectday', 'Friday')->where('instructor', '=', auth()->user()->name) as $subject)
                                            <br> {{ $subject->subjectname }} <br> {{ $subject->coursecode }} <br> {{ $subject->instructor }} <br> {{ $subject->starttime }} <br> {{ $subject->endtime }}
                                            <hr>
                                            @endforeach
                                        </td>

                                        <td class="border px-4 py-2">@foreach (App\Models\Subject::get()->where('subjectday', 'Saturday')->where('instructor', '=', auth()->user()->name) as $subject)
                                            <br> {{ $subject->subjectname }} <br> {{ $subject->coursecode }} <br> {{ $subject->instructor }} <br> {{ $subject->starttime }} <br> {{ $subject->endtime }}
                                            <hr>
                                            @endforeach
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

</x-app-layout>
