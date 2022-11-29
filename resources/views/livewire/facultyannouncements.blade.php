@if (Auth::check())
@if (Auth::user()->position == 'teacher')

<div class="max-w-full mx-auto">

    <div class="m-4 p-4">

        @if (Auth::user()->role == '1')
        <div class="flex justify m-2 p-2">
            <x-jet-button wire:click="showPostModal">Create New Announcement For Faculty</x-jet-button>
        </div>
        @endif


        <div class="relative mx-auto max-w-7xl">
            <div class="grid max-w-lg gap-12 mx-auto mt-12 lg:grid-cols-3 lg:max-w-none">

                @foreach ($facultyannouncements as $facultyannouncement)
                <div class="flex flex-col mb-12 overflow-hidden cursor-pointer shadow-lg">
                    <a href="{{ $facultyannouncement->linkurl }}">

                        <p class="hidden">{{ $facultyannouncement->id }}</p>
                        <div class="flex-shrink-0">
                            <img class="object-cover w-full h-52 rounded-lg" src="{{ Storage::url($facultyannouncement->image) }}" alt="">
                        </div>

                        <div class="flex flex-col justify-between flex-1 p-3">
                            <div class="flex-1">
                                <div class="flex pt-6 space-x-1 text-sm text-gray-500">
                                    <time datetime="2020-03-10">Date: {{ $facultyannouncement->setdate }}</time>
                                    <span aria-hidden="true"> · </span>
                                    <span> 4 min read </span>
                                </div>

                                <h3 class="text-2xl font-semibold leading-none tracking-tighter text-neutral-600">
                                    {{ $facultyannouncement->title }}
                                </h3>
                                <p class="text-lg font-normal text-gray-500">{{ $facultyannouncement->description }}</p>

                            </div>
                    </a>

                            @if (Auth::user()->role == '1')
                            <div class="mt-2" style="text-align: right">
                                <x-jet-button wire:click="showEditPostModal({{ $facultyannouncement->id }})">Edit
                                </x-jet-button>

                                <x-jet-button wire:click.prevent="deleteConfirmation({{ $facultyannouncement->id }})">Delete
                                </x-jet-button>
                            </div>
                            @endif
                        </div>
                </div>
                @endforeach
            </div>
        </div>


        <div>
            <x-jet-dialog-modal wire:model="showingPostModal">
                @if ($isEditMode)
                <x-slot name="title">Update Announcement</x-slot>
                @else
                <x-slot name="title">Create Announcement</x-slot>
                @endif
                <x-slot name="content">
                    <div class="space-y-8 divide-y divide-gray-200 w-full mt-10">
                        <form enctype="multipart/form-data">
                            <div class="sm:col-span-6">
                                <label for="title" class="block text-sm font-medium text-gray-700"> Announcement Title </label>
                                <div class="mt-1">
                                    <input type="text" id="title" wire:model.lazy="title" name="title" class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>
                                @error('title')
                                <span class="text-red-400">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="sm:col-span-6 mt-4">
                                <label for="title" class="block text-sm font-medium text-gray-700"> Announcement Date </label>
                                <div class="mt-1">
                                    <input required type="date" id="setdate" wire:model.lazy="setdate" name="setdate" class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                </div>
                            </div>

                            <div class="sm:col-span-6 mt-4">
                                <label for="title" class="block text-sm font-medium text-gray-700"> Announcement Image </label>
                                @if ($oldImage)
                                Old Image:
                                <img src="{{ Storage::url($oldImage) }}">
                                @endif
                                @if ($newImage)
                                Photo Preview:
                                <img src="{{ $newImage->temporaryUrl() }}">
                                @endif
                                <div class="mt-1">
                                    <input type="file" id="image" wire:model="newImage" name="newImage" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>
                                @error('newImage')
                                <span class="text-red-400">{{ $message }}</span>
                                @enderror

                            </div>
                            <div class="sm:col-span-6 pt-5">
                                <label for="description" class="block text-sm font-medium text-gray-700">Body</label>
                                <div class="mt-1">
                                    <textarea id="description" rows="3" wire:model.lazy="description" class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                                </div>
                                @error('description')
                                <span class="text-red-400">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="sm:col-span-6 pt-5">
                                <label for="linkurl" class="block text-sm font-medium text-gray-700"> Post Url Link </label>
                                <div class="mt-1">
                                    <input type="text" id="linkurl" wire:model.lazy="linkurl" name="linkurl" class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                                </div>
                                @error('linkurl')
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
</div>

@endif
@endif