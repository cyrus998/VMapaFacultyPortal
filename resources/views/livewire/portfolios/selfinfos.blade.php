<div class="max-w-full mx-auto">
    <div class="m-2 p-2">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                @if (Auth::user()->role == '0')
                    @foreach ($selfinfos->where('name', '=', auth()->user()->name) as $selfinfo)
                        <div class="flex flex-row mt-5 justify-center items-center">
                            <div class="card1 l px-4">
                                <div
                                    class="max-w-lg flex flex-col bg-white relative overflow-hidden rounded-lg border border-gray-100 p-8">
                                    <span
                                        class="absolute inset-x-0 bottom-0 h-2 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"></span>

                                    <div class="justify-between sm:flex">
                                        <div>
                                            <h5 class="text-xl font-bold text-gray-900">
                                                {{ $selfinfo->name }}
                                            </h5>

                                            <a class="text-sm text-sky-700"
                                                wire:click="showEditPostModal({{ $selfinfo->id }})">Click
                                                to
                                                edit.</a>

                                            <p class="mt-1 text-xs font-medium text-gray-600">Faculty Number:
                                                {{ $selfinfo->facultyNumber }} </p>
                                        </div>

                                        <div class="ml-3 hidden flex-shrink-0 sm:block">
                                            <img alt="insert image" src="{{ Storage::url($selfinfo->image) }}"
                                                class="h-16 w-16 rounded-full object-cover shadow-sm" />
                                        </div>
                                    </div>

                                    <div class="flex items-center mt-4 text-gray-700">
                                        <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M3.00977 5.83789C3.00977 5.28561 3.45748 4.83789 4.00977 4.83789H20C20.5523 4.83789 21 5.28561 21 5.83789V17.1621C21 18.2667 20.1046 19.1621 19 19.1621H5C3.89543 19.1621 3 18.2667 3 17.1621V6.16211C3 6.11449 3.00333 6.06765 3.00977 6.0218V5.83789ZM5 8.06165V17.1621H19V8.06199L14.1215 12.9405C12.9499 14.1121 11.0504 14.1121 9.87885 12.9405L5 8.06165ZM6.57232 6.80554H17.428L12.7073 11.5263C12.3168 11.9168 11.6836 11.9168 11.2931 11.5263L6.57232 6.80554Z" />
                                        </svg>
                                        <h1 class="px-2 text-sm">Address: </h1>
                                    </div>

                                    <div class="sm:pr-8">
                                        <p class="text-sm text-gray-500">
                                            {{ $selfinfo->address }}
                                        </p>
                                    </div>

                                    <p class="flex items-start -mx-2 mt-2">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="w-6 h-6 mx-2 text-blue-500 dark:text-blue-400" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                        </svg>

                                        <span class="text-sm text-gray-500">{{ $selfinfo->email }}</span>
                                    </p>

                                    <div class="mt-4 sm:pr-8">
                                        <p class="text-sm text-gray-500">
                                            {{ $selfinfo->aboutme }}
                                        </p>
                                    </div>

                                    <dl class="mt-6 flex">
                                        <div class="flex flex-col-reverse">
                                            <svg class="h-4 w-4 text-indigo-700" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M8 14v3m4-3v3m4-3v3M3 21h18M3 10h18M3 7l9-4 9 4M4 10h16v11H4V10z" />
                                            </svg>
                                            <div class="sm:ml-3 mt-1.5 sm:mt-0">
                                                <dt class="text-gray-500">Subject Expertise:
                                                    {{ $selfinfo->subjectexpertise }} </dt>
                                                <dd class="font-medium"></dd>
                                            </div>
                                        </div>

                                        <div class="flex flex-col-reverse ml-5">
                                            <svg class="h-4 w-4 text-indigo-700" xmlns="http://www.w3.org/2000/svg"
                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                            </svg>
                                            <div class="sm:ml-3 mt-1.5 sm:mt-0">
                                                <dt class="text-gray-500"> Mobile No. : {{ $selfinfo->contactnumber }}
                                                </dt>
                                                <dd class="font-medium"></dd>
                                            </div>
                                        </div>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>

    </div>
    <div>
        <x-jet-dialog-modal wire:model="showingPostModal">
            @if ($isEditMode)
                <x-slot name="title">Update Information</x-slot>
            @else
                <x-slot name="title">Add Info</x-slot>
            @endif
            <x-slot name="content">
                <div class="space-y-8 divide-y divide-gray-200 w-full mt-10">
                    <form enctype="multipart/form-data">
                        <div class="sm:col-span-6 mt-2">
                            <label for="title" class="block text-sm font-medium text-gray-700"> Enter An Image
                            </label>
                            @if ($oldImage)
                                Old Image:
                                <img style="height: 10rem;" src="{{ Storage::url($oldImage) }}">
                            @endif
                            @if ($newImage)
                                Photo Preview:
                                <img style="height: 10rem;" src="{{ $newImage->temporaryUrl() }}">
                            @endif
                            <div class="mt-1">
                                <input type="file" id="image" wire:model="newImage" name="newImage"
                                    class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('newImage')
                                <span class="text-red-400">{{ $message }}</span>
                            @enderror

                        </div>

                        <div class="sm:col-span-6 mt-2">
                            <label for="contactnumber" class="block text-sm font-medium text-gray-700"> Add Contact
                                Number
                            </label>
                            <div class="mt-1">
                                <input type="text" id="contactnumber" wire:model.lazy="contactnumber"
                                    name="contactnumber"
                                    class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('contactnumber')
                                <span class="text-red-400">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="sm:col-span-6 mt-2">
                            <label for="address" class="block text-sm font-medium text-gray-700"> Add Address </label>
                            <div class="mt-1">
                                <input type="text" id="address" wire:model.lazy="address" name="address"
                                    class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('address')
                                <span class="text-red-400">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="sm:col-span-6 mt-2">
                            <label for="aboutme" class="block text-sm font-medium text-gray-700"> Add About Me
                            </label>
                            <div class="mt-1">

                                <textarea type="text" id="aboutme" wire:model.lazy="aboutme" name="aboutme"
                                    class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5"></textarea>

                            </div>
                            @error('aboutme')
                                <span class="text-red-400">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="sm:col-span-6 mt-2">
                            <label for="subjectexpertise" class="block text-sm font-medium text-gray-700">
                                Add Subject Expertise </label>
                            <div class="mt-1">
                                <input type="text" id="subjectexpertise" wire:model.lazy="subjectexpertise"
                                    name="subjectexpertise"
                                    class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('subjectexpertise')
                                <span class="text-red-400">{{ $message }}</span>
                            @enderror
                        </div>


                    </form>
                </div>

            </x-slot>
            <x-slot name="footer">
                @if ($isEditMode)
                    <x-jet-button wire:click="updatePost">Update</x-jet-button>
                @else
                    <x-jet-button wire:click="storePost">Create</x-jet-button>
                @endif
            </x-slot>
        </x-jet-dialog-modal>
    </div>
</div>
