<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

</head>
<body>
 
    <h1>My Schedule</h1> <br> <br>
  
    <table class="table table-bordered">
        <tr style="background-color: #1e293b;">
            <th style="color: #ffffff;">Subject Name</th>
            <th style="color: #ffffff;">Course Code</th>
            <th style="color: #ffffff;">Instructor</th>
            <th style="color: #ffffff;">Subject Day</th>
            <th style="color: #ffffff;">Start Time</th>
            <th style="color: #ffffff;">End Time</th>
        </tr>
        @foreach (App\Models\Subject::where('instructor', '=', auth()->user()->name)->get() as $subject)
        <tr>
            <td>{{ $subject->subjectname }}</td>
            <td>{{ $subject->coursecode }}</td>
            <td>{{ $subject->instructor }}</td>
            <td>{{ $subject->subjectday }}</td>
            <td>{{ $subject->starttime }}</td>
            <td>{{ $subject->endtime }}</td>
        </tr>
        @endforeach
    </table>
  

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4 w-full overflow-x-auto">

        

            </div>
        </div>
    </div>
    <div class="page-break"></div>

    <h1>(Timetable format Schedule)</h1>

    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mt-4 px-4 py-4 w-full overflow-x-auto">
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full text-center table table-bordered">
                                <thead style="background-color: #1e293b;">
                                    <tr>
                                        <!-- <th scope="col" class="text-sm font-medium text-black px-6 py-4">
                                            Time
                                        </th> -->
                                        <th style="color: #ffffff;" scope="col" >
                                            Monday
                                        </th>
                                        <th style="color: #ffffff;" scope="col" >
                                            Tuesday
                                        </th>
                                        <th style="color: #ffffff;" scope="col" >
                                            Wednesday
                                        </th>
                                        <th style="color: #ffffff;" scope="col" >
                                            Thursday
                                        </th>
                                        <th style="color: #ffffff;" scope="col" >
                                            Friday
                                        </th>
                                        <th style="color: #ffffff;" scope="col" >
                                            Saturday
                                        </th>
                        
                                    </tr>
                                </thead class="border-b">
                                <tbody>

                                    <tr class="bg-white border-b">
                                        <!-- <td class="border px-4 py-2"></td> -->

                                        <td class="border">@foreach (App\Models\Subject::get()->where('subjectday', 'Monday')->where('instructor', '=', auth()->user()->name) as $subject)
                                            <br> {{ $subject->subjectname }} <br> {{ $subject->coursecode }} <br> {{ $subject->instructor }} <br> {{ $subject->starttime }} <br> {{ $subject->endtime }}
                                            <hr>
                                            @endforeach
                                        </td>

                                        <td class="border">@foreach (App\Models\Subject::get()->where('subjectday', 'Tuesday')->where('instructor', '=', auth()->user()->name) as $subject)
                                            <br> {{ $subject->subjectname }} <br> {{ $subject->coursecode }} <br> {{ $subject->instructor }} <br> {{ $subject->starttime }} <br> {{ $subject->endtime }}
                                            <hr>
                                            @endforeach
                                        </td>

                                        <td class="border">@foreach (App\Models\Subject::get()->where('subjectday', 'Wednesday')->where('instructor', '=', auth()->user()->name) as $subject)
                                            <br> {{ $subject->subjectname }} <br> {{ $subject->coursecode }} <br> {{ $subject->instructor }} <br> {{ $subject->starttime }} <br> {{ $subject->endtime }}
                                            <hr>
                                            @endforeach
                                        </td>

                                        <td class="border">@foreach (App\Models\Subject::get()->where('subjectday', 'Thursday')->where('instructor', '=', auth()->user()->name) as $subject)
                                            <br> {{ $subject->subjectname }} <br> {{ $subject->coursecode }} <br> {{ $subject->instructor }} <br> {{ $subject->starttime }} <br> {{ $subject->endtime }}
                                            <hr>
                                            @endforeach
                                        </td>

                                        <td class="border">@foreach (App\Models\Subject::get()->where('subjectday', 'Friday')->where('instructor', '=', auth()->user()->name) as $subject)
                                            <br> {{ $subject->subjectname }} <br> {{ $subject->coursecode }} <br> {{ $subject->instructor }} <br> {{ $subject->starttime }} <br> {{ $subject->endtime }}
                                            <hr>
                                            @endforeach
                                        </td>

                                        <td class="border">@foreach (App\Models\Subject::get()->where('subjectday', 'Saturday')->where('instructor', '=', auth()->user()->name) as $subject)
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

        
</body>
</html>

<style>
.page-break {
    page-break-after: always;
}
</style>