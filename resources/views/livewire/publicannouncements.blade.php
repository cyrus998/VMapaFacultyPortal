@if (Auth::user()->role == '1')
<div class="max-w-6xl mx-auto">
    <div class="m-4 p-4">
        <div class="flex justify m-2 p-2">
            <x-jet-button wire:click="showPostModal">Create New Public Announcement</x-jet-button>
        </div>

        <div class="relative mx-auto max-w-7xl">
            <div class="grid max-w-lg gap-12 mx-auto mt-12 lg:grid-cols-3 lg:max-w-none">

                @foreach ($publicannouncements as $publicannouncement)
                <div class="flex flex-col mb-12 overflow-hidden cursor-pointer shadow-lg">
                    <a href="" class="hidden">{{ $publicannouncement->id }}</a>
                    <div class="flex-shrink-0">
                        <img class="object-cover w-full h-52 rounded-lg" src="{{ Storage::url($publicannouncement->image) }}" alt="">
                    </div>
                    <div class="flex flex-col justify-between flex-1 p-3">
                        <a href=""></a>
                        <div class="flex-1">
                            <div class="flex pt-6 space-x-1 text-sm text-gray-500">
                                <time datetime="2020-03-10"> Date: {{ $publicannouncement->setdate }}</time>
                                <span aria-hidden="true"> · </span>
                                <span> 4 min read </span>
                            </div>
                            <a href="#" class="block mt-2 space-y-6">
                                <h3 class="text-2xl font-semibold leading-none tracking-tighter text-neutral-600">
                                    {{ $publicannouncement->title }}
                                </h3>
                                <p class="text-lg font-normal text-gray-500">{{ $publicannouncement->description }}</p>
                            </a>



                        </div>
                        <div class="mt-2" style="text-align: right">
                            <x-jet-button wire:click="showEditPostModal({{ $publicannouncement->id }})">Edit
                            </x-jet-button>

                            <x-jet-button wire:click.prevent="deleteConfirmation({{ $publicannouncement->id }})">Delete
                            </x-jet-button>
                        </div>
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
                                    <input type="date" id="setdate" wire:model.lazy="setdate" name="setdate" class="block w-full  appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5">
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