
@extends('nonuserlayout')
@section('content')
<section class="relative flex flex-wrap lg:h-screen lg:items-center mb-32">
    <div class="w-full px-4 lg:w-1/2 sm:px-6 lg:px-8 sm:py-16 lg:py-24"> 
        

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <div class="max-w-lg mx-auto text-center">
            <h1 class="text-2xl font-bold sm:text-3xl">Edit Submission</h1>
            <p class="mt-4 text-gray-500"> Here are the following requirements needed to enroll in this institution, and please do provide the correct and accurate details for the following: </p>
        </div>
        <form action="{{ route('submissions.update', $submission->hashid) }}" method="POST" enctype="multipart/form-data" class="max-w-md mx-auto mt-8 mb-0 space-y-4"> @csrf <div>
              
        @csrf
        @method('PUT')
        
        <h1 class="text-zinc-500">Name</h1>
                <div class="relative">
                    <input type="text" name="name"  value="{{ $submission->name }}" class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm" placeholder="Enter Name" />
                    <span class="absolute inset-y-0 inline-flex items-center right-4">
                        <img src="https://media.discordapp.net/attachments/971130306751000636/981174821494849556/unknown.png" width="24" alt="">
                    </span>
                </div>
            </div>
            <div>
                <h1 class="text-zinc-500">Year Level</h1>
                <div class="relative">
                    <select type="text" name="yearlevel" value="{{ $submission->yearlevel }}" class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm">
                        <option value="Grade 7">Grade 7</option>
                        <option value="Grade 8">Grade 8</option>
                        <option value="Grade 9">Grade 9</option>
                        <option value="Grade 10">Grade 10</option>
                    </select>
                </div>
            </div>
            <div>
                <h1 class="text-zinc-500">Detail</h1>
                <div class="relative">
                    <input type="text" name="detail" value="{{ $submission->detail }}" class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm" placeholder="Enter Detail" />
                    <span class="absolute inset-y-0 inline-flex items-center right-4">
                        <img src="https://media.discordapp.net/attachments/971130306751000636/981174821494849556/unknown.png" width="24" alt="">
                    </span>
                </div>
            </div>
            <div>
                <h1 class="text-zinc-500">Enter Image</h1>
                <label for="password" class="sr-only">Image</label>
                <div class="relative">
                    <input type="file" name="image" class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm" placeholder="Enter password" />
                  
                    <span class="absolute inset-y-0 inline-flex items-center right-4">
                        <img src="https://media.discordapp.net/attachments/971130306751000636/981174821494849556/unknown.png" width="24" alt="">
                    </span>
                </div>
            </div>
            <div>
                <h1 class="text-zinc-500">Submit Form 137</h1>
                <div class="relative">
                    <input type="file" name="form137" class="w-full p-4 pr-12 text-sm border-gray-200 rounded-lg shadow-sm" placeholder="Enter form137" />
                    <span class="absolute inset-y-0 inline-flex items-center right-4">
                        <img src="https://media.discordapp.net/attachments/971130306751000636/981174821494849556/unknown.png" width="24" alt="">
                    </span>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <p class="text-sm text-gray-500"></p>
                <button type="submit" class="inline-block px-5 py-3 ml-3 text-sm font-medium text-white bg-blue-500 rounded-lg"> Add New Submission </button>
            </div>
        </form>
    </div>
    <div class="relative w-full h-64 sm:h-96 lg:w-1/2 lg:h-full">
        <img class="absolute inset-0 object-cover w-full h-full" src="https://images.unsplash.com/photo-1508780709619-79562169bc64?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80" alt="" />
    </div>
    @endsection

