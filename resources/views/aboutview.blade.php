@extends('nonuserlayout')


@section('content')
<!-- 
content starts here -->
<!-- ====== About Section Start -->
<section class="pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] overflow-hidden mx-5">
    <div class="container">
        <div class="flex flex-wrap justify-between items-center -mx-4">
            <div class="w-full lg:w-6/12 px-4">
                <div class="flex items-center -mx-3 sm:-mx-4">
                    <div class="w-full xl:w-1/2 px-3 sm:px-4">
                        <div class="py-3 sm:py-4">
                            <img src="https://iili.io/ZPVyYX.jpg" alt="" class="rounded-2xl w-full" />
                        </div>
                        <div class="py-3 sm:py-4">
                            <img src="https://iili.io/ZPW9vn.jpg" alt="" class="rounded-2xl w-full" />
                        </div>
                    </div>
                    <div class="w-full xl:w-1/2 px-3 sm:px-4">
                        <div class="my-4 relative z-10">
                            <img src="https://iili.io/ZPVp2t.jpg" alt="" class="rounded-2xl w-full" />

                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
                <div class="mt-10 lg:mt-0">
                    <span class="font-semibold text-lg text-primary mb-2 block">
                        Your Journey Starts Here.
                    </span>
                    <h2 class="font-bold text-3xl sm:text-4xl text-dark mb-8">
                        Why choose Victorino Mapa HighSchool?
                    </h2>
                    <p class="text-base text-body-color mb-8">
                        It is a long established fact that a reader will be distracted
                        by the readable content of a page when looking at its layout.
                        The point of using Lorem Ipsum is that it has a more-or-less.
                    </p>
                    <p class="text-base text-body-color mb-12">
                        A domain name is one of the first steps to establishing your
                        brand. Secure a consistent brand image with a domain name that
                        matches your business.
                    </p>
                    <a href="javascript:void(0)" class="
                  py-4
                  px-10
                  lg:px-8
                  xl:px-10
                  inline-flex
                  items-center
                  justify-center
                  text-center text-white text-base
                  bg-primary
                  hover:bg-opacity-90
                  font-normal
                  rounded-lg
                  ">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="lg:flex">
        <div class="flex items-center justify-center w-full px-6 py-8 lg:h-[32rem] lg:w-1/2">
            <div class="max-w-xl">
                <h2 class="text-2xl font-semibold text-gray-800 lg:text-3xl">Victorino Mapa HighSchool <span class="text-blue-600 ">History:</span></h2>

                <p class="mt-2 text-sm text-gray-500  lg:text-base">
                    Victorino Mapa High School opened its first classes (Manila East High School) as one of the four schools in City of Manila together with Torres High School (Manila South High School) and Arellano High School (Manila North High School) in June 1923.

                </p>
                <br>
                <p class="mt-2 text-sm text-gray-500  lg:text-base">
                    Mapa Has been under the administration of principals since it was founded in June 1923. The three of these were Americans namely, John Carl, Sarah M. England and James Burns. The first Filipino principal of the School was Indolencio Madamba in 1951. In his term, the Parents-Teachers Association was organized and succession of principals took over, after Madamba retired in May 1956.
                </p>

                <div class="flex flex-col mt-6 space-y-3 lg:space-y-0 lg:flex-row">
                    <a href="#" class="block px-6 py-2.5 text-sm font-medium tracking-wider text-center text-white uppercase transition-colors duration-300 transform bg-gray-900 rounded-md hover:bg-gray-700">Get Started</a>
                    <a href="#" class="block px-6 py-2.5 text-sm font-medium tracking-wider text-center text-gray-700 uppercase transition-colors duration-300 transform bg-gray-200 rounded-md lg:mx-4 hover:bg-gray-300">Learn More</a>
                </div>
            </div>
        </div>

        <div class="w-full h-64 lg:w-1/2 lg:h-auto rounded-2xl">
            <div class="w-full rounded-2xl h-full bg-cover" style="background-image: url(https://images.unsplash.com/photo-1508394522741-82ac9c15ba69?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=748&q=80)">
                <div class="w-full h-full rounded-2xl bg-black opacity-25"></div>
            </div>
        </div>
    </div>
</section>

<!-- ====== About Section End -->

<section class="text-gray-600 body-font relative">
    <div class="absolute inset-0 bg-gray-300">
        <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15444.081061900912!2d120.992158!3d14.5979211!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa4498f1dbcf29485!2sVictorino%20Mapa%20High%20School!5e0!3m2!1sen!2sph!4v1663073039818!5m2!1sen!2sph" style=""></iframe>

    </div>

    <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data"> @csrf <div>

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

            <div class="container px-5 py-24 mx-auto flex">
                <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
                    <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Inquire</h2>


                    @if (Session::has('success'))
                    <div class="flex w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800 mb-3">
                        <div class="flex items-center justify-center w-12 bg-blue-500">
                            <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z" />
                            </svg>
                        </div>

                        <div class="px-4 py-2 -mx-3">
                            <div class="mx-3">
                                <span class="font-semibold text-blue-500 dark:text-blue-400">Inquiry successfully sent!</span>
                                <p class="text-sm text-gray-600 dark:text-gray-200">{{Session::get('success')}}</p>
                            </div>
                        </div>
                    </div>
                    @endif

                    <p class="leading-relaxed mb-5 text-gray-600">Please send us a message if there are any questions or information that you would like to know.</p>
                    <div class="relative mb-4">
                        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                        <input type="email" id="email" name="email" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        @error('email') <span class="text-red-500">{{ $message }}</span>@enderror
                    </div>
                    <div class="relative mb-4">
                        <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                        <textarea id="message" name="message" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                        @error('message') <span class="text-red-500">{{ $message }}</span>@enderror

                    </div>
                    <button class="text-white bg-blue-500 border-0 py-2 px-6 focus:outline-none hover:bg-blue-600 rounded text-lg">Submit</button>
                    <p class="text-xs text-gray-500 mt-3">Address: HXXR+5V7, Concepcion Aguila St, San Miguel, Manila, 1008 Metro Manila</p>
                </div>
            </div>
    </form>


</section>
@endsection