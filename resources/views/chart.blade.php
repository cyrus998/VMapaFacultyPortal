@extends('master')

@section('content')

@if(Auth::check())

@if (Auth::user()->role == '1')

    <div class="relative mx-auto max-w-7xl">
        <div class="grid max-w-lg gap-12 mx-auto mt-5 lg:grid-cols-3 lg:max-w-none p-5">

            <a href="/subjects" class="relative block rounded-sm border-t-4 border-indigo-700 p-8 pb-12 shadow-xl">
                <h3 class="text-4xl font-bold">{{ $activesubjects }} <span class="text-xs text-cyan-600">as of {{ date('Y/m/d') }}</span></h3>
                </h3>
                <p class="mt-4 text-lg font-medium text-gray-500">
                    Active Subjects
                </p>

                <span class="absolute bottom-8 right-8">
                    <img class="w-16" src="https://iili.io/ZPhzLx.png" alt="">
                </span>
            </a>

            <a href="/portfolios" class="relative block rounded-sm border-t-4 border-pink-600 p-8 pb-12 shadow-xl">
                <h3 class="text-4xl font-bold">{{ $totalteachers }} <span class="text-xs text-cyan-600">as of {{ date('Y/m/d') }}</span></h3>
                </h3>
                <p class="mt-4 text-lg font-medium text-gray-500">
                    Teachers
                </p>

                <span class="absolute bottom-8 right-8">
                    <img class="w-16" src="https://iili.io/ZPhTqQ.png" alt="">
                </span>
            </a>

            <a href="/users" class="relative block rounded-sm border-t-4 border-emerald-600 p-8 pb-12 shadow-xl">
                <h3 class="text-4xl font-bold">{{ $totalusers }} <span class="text-xs text-cyan-600">as of {{ date('Y/m/d') }}</span></h3>
                <p class="mt-4 text-lg font-medium text-gray-500">
                    Total Users
                </p>

                <span class="absolute bottom-8 right-8">
                    <img class="w-16" src="https://iili.io/ZPhu1V.png" alt="">
                </span>
            </a>
        </div>
    </div>

    <h1 class="text-black-600 text-5xl font-bold text-center mt-12">Data gathered through students</h1> 
    
    <div class="grid place-items-center grid-cols-3 p-16">
        <div>
            <canvas  style="width: 350px;" id="Submission"></canvas>
        </div>
        <div>
            <canvas style="width: 350px;" id="YearLevel"></canvas>
        </div>
        <div>
            <canvas style="width: 350px;" id="City"></canvas>
        </div>
    </div>

<h1 class="text-black-600 text-5xl font-bold text-center">Data gathered through employee</h1> 
    <!-- removed place-items-center -->
    <div class="grid p-16">
        <div>
            <canvas style="padding: 0; margin: auto; display: block; width: 800px;" id="User"></canvas>
        </div>
    </div>

    <div class="flex justify-center">

<div class="flex flex-col mb-20 md:flex-row md:max-w-full rounded-lg bg-white shadow-lg m-8 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-101 hover:bg-zinc-300 duration-300">

    <div class="skill-container m-9">
        <div class="skill">
            <div class="outer">
                <div class="inner">
                    <div class="number" data-num="{{$totalcapacitypercent}}">
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px" height="160px">
                <defs>
                    <linearGradient id="GradientColor">
                        <stop offset="0%" stop-color="#206cfb" />
                        <stop offset="100%" stop-color="#206cfb" />
                    </linearGradient>
                </defs>
                <circle cx="80" cy="80" r="70" stroke-linecap="round" />
            </svg>
        </div>

    </div>
    <div class="p-6 flex flex-col justify-start">
        <h5 class="text-gray-900 text-xl font-medium mb-2">Total School Admissions</h5>
        <p class="text-gray-700 text-base mb-4">
            The data shown are the percentage of the school's enrolees, with the corresponding total capacity and room accommodation of 3000.
        </p>
        <p class="text-gray-600 text-xs">Last updated {{ date('Y/m/d') }}.</p>

        <div class="flex w-full max-w-full overflow-hidden rounded-lg shadow-md bg-gray-800 mt-5">
            <div class="flex items-center justify-center w-12 bg-blue-500">
                <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z" />
                </svg>
            </div>

            <div class="px-4 py-2 -mx-3">
                <div class="mx-3">
                    <span class="font-semibold  text-blue-400">Information:</span>
                    <p class="text-sm text-gray-200">The current number of students enrolled from Grade 7 to Grade 10 is <span class="text-blue-400 font-bold">{{$totaladmissions}}</span> <span class="text-green-400 font-bold">out of 3000.</span>! This takes up about {{$totalcapacitypercent}}% of the school's capacity.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="p-6 flex flex-col justify-start">
        <h5 class="text-gray-900 text-xl font-medium mb-2">Suggestion Analytics</h5>
        <p class="text-gray-700 text-base mb-4">
        To ensure that there are enough rooms to accommodate all the existing and incoming students, we suggest the following actions below.
        </p>
        <p class="text-gray-600 text-xs">Last updated {{ date('Y/m/d') }}.</p>

        <div class="flex w-full max-w-full overflow-hidden rounded-lg shadow-md bg-gray-800 mt-9">
            <div class="flex items-center justify-center w-12 bg-blue-500">
                <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                    <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z" />
                </svg>
            </div>

            <div class="px-4 py-2 -mx-3">
                <div class="mx-3">
                    <span class="font-semibold  text-blue-400">Suggestion:</span>
                    <p class="text-sm text-gray-200">We recommend that the total capacity left to accommodate students should only be within: <span class="text-blue-400 text-2xl font-bold">{{$totalcapacityleft}}</span> maximum students only, for this school year. However, to avoid overloading, we suggest to leave atleast a 5% margin allowance. A maximum accommodation of <span class="text-green-400 font-bold">{{$fivepercentmarginaccommodation}}</span> is preferred this school year.</p>
                </div>
            </div>
        </div>
    </div>

</div>
</div>

<!-- <h1>
Population Capacity
</h1>
<p>Total School Admissions {{$gradesevenpeople}}</p>
<p>Total School Capacity</p>
<p>{{$totalcapacitypercent}}% or {{$totaladmissions}}/3000</p>

<h1>Room allocation per year level</h1>
<p>Total Students Enrolled in 1st year: {{$gradesevenpeople}}</p>
<p>Total Students Enrolled in 2st year: {{$gradeeightpeople}}</p>
<p>Total Students Enrolled in 3st year: {{$gradeninepeople}}</p>
<p>Total Students Enrolled in 4st year: {{$gradetenpeople}}</p> -->



<script>
const numbers = document.querySelectorAll('.number');
const svgEl = document.querySelectorAll('svg circle');
const counters = Array(numbers.length);
const intervals = Array(counters.length);
counters.fill(0);

numbers.forEach((number, index) => {
    intervals[index] = setInterval(() => {
        if (counters[index] === parseInt(number.dataset.num)) {
            clearInterval(counters[index]);
        } else {
            counters[index] += 1;
            number.innerHTML = counters[index] + "%";
            svgEl[index].style.strokeDashoffset = Math.floor(472 - 440 * parseFloat(number.dataset.num / 100));
        }
    }, 20);
});
</script>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.skill-container {
    /* height: 100vh; */
    display: flex;
    align-items: center;
    justify-content: center;
}

.skill-container .skill {
    position: relative;
    margin-right: 40px;
}

.skill-container .skill .outer {
    height: 160px;
    width: 160px;
    border-radius: 50%;
    padding: 20px;
    box-shadow: 6px 6px 10px -1px rgba(0 0 0 /.15),
        -6px -6px 10px -1px rgba(255 255 255 / .7);
}

.skill-container .skill .outer .inner {
    display: flex;
    align-items: center;
    justify-content: center;
    height: 120px;
    width: 120px;
    border-radius: 50%;
    box-shadow: inset 4px 4px 6px -1px rgba(0 0 0/ .2),
        inset -4px -4px 6px -1px rgba(255 255 255 / .7),
        -.5px -.5px 0px rgba(255 255 255 / 1),
        .5px .5px 0px rgba(0 0 0 /.15),
        0px 12px 10px -10px rgba(0 0 0 / 0.05);
}

.skill-container .skill .outer .inner .number {
    font-weight: 800;
}


.skill-container .skill:nth-child(1) .outer .inner .number {
    color: #206cfb;
    font-size: 2rem;
}

.skill-container .skill:nth-child(2) .outer .inner .number {
    color: #206cfb;
    font-size: 2rem;
}

.skill-container .skill:nth-child(3) .outer .inner .number {
    color: #206cfb;
    font-size: 2rem;
}

circle {
    fill: none;
    stroke-width: 20px;
    stroke-dasharray: 472;
    stroke-dashoffset: 472;
    transition: 2s linear;
}

svg {
    position: absolute;
    top: 0;
    left: 0;
}

.skill-container .skill:nth-child(1) circle {
    stroke: #206cfb;
}

.skill-container .skill:nth-child(2) circle {
    stroke: #4fa0ff;
}

.skill-container .skill:nth-child(3) circle {
    stroke: #7811f7;
}
</style>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
<script type="text/javascript">
  
    var labelsUser =  {{ Js::from($labelsUser) }};
    var users =  {{ Js::from($dataUser) }};
    var labelsSubmission =  {{ Js::from($labelsSubmission) }};
    var submissions =  {{ Js::from($dataSubmission) }};
    var labelsYearLevel =  {{ Js::from($labelsYearLevel) }};
    var yearlevel =  {{ Js::from($dataYearLevel) }};
    var labelsCity =  {{ Js::from($labelsCity) }};
    var city =  {{ Js::from($dataCity) }};
  
    //User
    const dataUser = {
        labels: labelsUser,
        datasets: [{
            label: 'User Account',
            backgroundColor: ['rgb(255, 99, 132, 0.2)', 'rgb(54, 162, 235, 0.2)', 'rgb(255, 206, 86, 0.2)', 'rgb(75, 192, 192, 0.2)'],
            borderColor: ['rgb(255, 99, 132, 1)', 'rgb(54, 162, 235, 1)', 'rgb(255, 206, 86, 1)', 'rgb(75, 192, 192, 1)'],
            borderWidth: 1,
            data: users,
        }]
    };
  
    const configUser = {
        type: 'bar',
        data: dataUser,
        options: {
            aspectRatio: 2,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    };
  
    const User = new Chart(
        document.getElementById('User'),
        configUser
    );

    //Submissions
    const dataSubmission = {
        labels: labelsSubmission,
        datasets: [{
            label: 'Total of submitted requirements',
            backgroundColor: ['rgb(255, 99, 132, 0.2)', 'rgb(54, 162, 235, 0.2)', 'rgb(255, 206, 86, 0.2)', 'rgb(75, 192, 192, 0.2)'],
            borderColor: ['rgb(255, 99, 132, 1)', 'rgb(54, 162, 235, 1)', 'rgb(255, 206, 86, 1)', 'rgb(75, 192, 192, 1)'],
            borderWidth: 1,
            data: submissions,
        }]
    };
  
    const configSubmission = {
        type: 'line',
        data: dataSubmission,
        options: {
            aspectRatio: 1,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    };
  
    const Submission = new Chart(
        document.getElementById('Submission'),
        configSubmission
    );

    //YearLevel
    const dataYearLevel = {
        labels: labelsYearLevel,
        datasets: [{
            label: 'Total students each year',
            backgroundColor: ['rgb(255, 99, 132, 0.2)', 'rgb(54, 162, 235, 0.2)', 'rgb(255, 206, 86, 0.2)', 'rgb(75, 192, 192, 0.2)'],
            borderColor: ['rgb(255, 99, 132, 1)', 'rgb(54, 162, 235, 1)', 'rgb(255, 206, 86, 1)', 'rgb(75, 192, 192, 1)'],
            borderWidth: 1,
            data: yearlevel,
        }]
    };
  
    const configYearLevel = {
        type: 'doughnut',
        data: dataYearLevel,
        options: {
            aspectRatio: 1,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    };
  
    const YearLevel = new Chart(
        document.getElementById('YearLevel'),
        configYearLevel
    );

    //City
    const dataCity = {
        labels: labelsCity,
        datasets: [{
            label: 'Students from each city',
            backgroundColor: ['rgb(153, 102, 255, 0.2)', 'rgb(255, 159, 64, 0.2)', 'rgb(255, 206, 86, 0.2)', 'rgb(75, 192, 192, 0.2)'],
            borderColor: ['rgb(153, 102, 255, 1)', 'rgb(255, 159, 64, 1)', 'rgb(255, 206, 86, 1)', 'rgb(75, 192, 192, 1)'],
            borderWidth: 1,
            data: city,
        }]
    };
  
    const configCity = {
        type: 'line',
        data: dataCity,
        options: {
            aspectRatio: 1,
            scales: {
                y: {
                    stacked: true
                }
            }
        }
    };
  
    const City = new Chart(
        document.getElementById('City'),
        configCity
    );
  
</script>

@endif
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

@endsection