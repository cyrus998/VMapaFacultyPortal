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