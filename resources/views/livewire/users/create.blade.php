{{-- second modal --}}
@if(Auth::check())
@if (Auth::user()->role == '1')

<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">

        <div class="fixed inset-0 transition-opacity">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
        </div>

        <!-- This element is to trick the browser into centering the modal contents. -->
        <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​
        {{-- //$name, $email, $password, $facultyNumber, $role, $position --}}


        <div class="mt-5 flex w-full max-w-sm mx-auto bg-white rounded-lg dark:bg-gray-800 lg:max-w-4xl overflow-hidden shadow-xl transform transition-all"
            role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <div class="hidden bg-cover lg:block lg:w-1/2"
                style="background-image: url('https://images.unsplash.com/photo-1598379232411-d670d6872193?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=735&q=80');">
            </div>

            <div class="w-full px-6 py-8 md:px-8 lg:w-1/2">

                <form action="" method="">
                    @csrf

                    <div class="mt-4">
                        <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200"
                            for="LoggingEmailAddress">Name</label>
                        <input wire:model="name" type="text" name="name"
                            class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300" />
                        @error('name')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="mt-4">
                        <div class="flex justify-between">
                            <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200"
                                for="loggingPassword">Email</label>
                        </div>

                        <input wire:model="email" type="email" name="email"
                            class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300" />
                        @error('email')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror

                    </div>

                    <div class="mt-4">
                        <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200"
                            for="LoggingEmailAddress">Faculty No:</label>
                        <input wire:model="facultyNumber" type="number" name="facultyNumber"
                            class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300" />

                        @error('facultyNumber')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="mt-4">
                        <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200"
                            for="LoggingEmailAddress">Role</label>
                        <input wire:model="role" type="number" name="role"
                            class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300" />

                        @error('role')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt-4">
                        <label class="block mb-2 text-sm font-medium text-gray-600 dark:text-gray-200"
                            for="LoggingEmailAddress">Position</label>
                        <select wire:model="position" name="position" id="position"
                            class="block w-full px-4 py-2 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring focus:ring-blue-300">
                            <option value="">-- Select Position --</option>
                            <option value="teacher">teacher</option>
                            <option value="student">student</option>
                        </select>

                        @error('position')
                            <span class="text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mt-8">
                        <button wire:click="store()" type="button"
                            class="w-full px-4 py-2 tracking-wide text-white transition-colors duration-300 transform bg-gray-700 rounded hover:bg-gray-600 focus:outline-none focus:bg-gray-600">
                            Submit
                        </button>

                        <button wire:click="closeModal()" type="button"
                            class="mt-3 inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                            Cancel
                        </button>
                    </div>
                </form>

            </div>
        </div>

    </div>
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
@endif