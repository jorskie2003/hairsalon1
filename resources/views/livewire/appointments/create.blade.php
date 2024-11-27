<div>
    <div class="py-12 bg-gradient-to-r from-blue-500 to-purple-600 dark:from-blue-700 dark:to-purple-800">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-gradient-to-r from-teal-500 to-purple-700 dark:from-blue-800 dark:to-purple-900">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    
                    {{-- Title and Description --}}
                    <div class="flex flex-col gap-y-4 mb-8">
                        <div class="flex flex-col gap-y-1">
                            <h1 class="text-2xl font-bold text-gray-800 dark:text-white">Create Appointment</h1>
                            <p class="text-sm text-gray-600 dark:text-gray-400">Fill out this form to schedule a new appointment. Please ensure all details are accurate.</p>
                        </div>
                    </div>

                    {{-- Create Appointment Form --}}
                    <form wire:submit.prevent="submit">
                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                            
                            {{-- Name Field --}}
                            <div>
                                <label for="name" class="block mb-2 text-sm font-medium dark:text-white">Name</label>
                                <input 
                                    type="text" 
                                    id="name" 
                                    wire:model="name" 
                                    class="block w-full px-4 py-3 text-sm rounded-lg border-gray-300 focus:border-teal-500 focus:ring-teal-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-teal-600
                                    @error('name') text-red-900 focus:ring-red-500 focus:border-red-500 border-red-300 @enderror"
                                >
                                @error('name')
                                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- Email Field --}}
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium dark:text-white">Email</label>
                                <input 
                                    type="email" 
                                    id="email"
                                    wire:model="email" 
                                    class="block w-full px-4 py-3 text-sm rounded-lg border-gray-300 focus:border-teal-500 focus:ring-teal-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-teal-600
                                    @error('email') text-red-900 focus:ring-red-500 focus:border-red-500 border-red-300 @enderror"
                                >
                                @error('email')
                                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- Hairstylist Field --}}
                            <div>
                                <label for="hairstylist" class="block mb-2 text-sm font-medium dark:text-white">Hairstylist</label>
                                <input 
                                    type="text" 
                                    id="hairstylist" 
                                    wire:model="hairstylist" 
                                    class="block w-full px-4 py-3 text-sm rounded-lg border-gray-300 focus:border-teal-500 focus:ring-teal-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-teal-600
                                    @error('hairstylist') text-red-900 focus:ring-red-500 focus:border-red-500 border-red-300 @enderror"
                                >
                                @error('hairstylist')
                                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- Appointment Date Field --}}
                            <div>
                                <label for="appointment_date" class="block mb-2 text-sm font-medium dark:text-white">Appointment Date</label>
                                <input 
                                    type="datetime-local" 
                                    id="appointment_date" 
                                    wire:model="appointment_date" 
                                    class="block w-full px-4 py-3 text-sm rounded-lg border-gray-300 focus:border-teal-500 focus:ring-teal-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-teal-600
                                    @error('appointment_date') text-red-900 focus:ring-red-500 focus:border-red-500 border-red-300 @enderror"
                                >
                                @error('appointment_date')
                                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>

                        {{-- Form Actions --}}
                        <div class="flex justify-end mt-6 gap-x-4">
                            <a href="{{ route('appointments.index') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-indigo-800 bg-indigo-100 border border-transparent rounded-lg gap-x-2 hover:bg-indigo-200 focus:outline-none focus:bg-indigo-200 dark:text-indigo-400 dark:hover:bg-indigo-900 dark:focus:bg-indigo-900">
                                Cancel
                            </a>
                            <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-teal-600 border border-transparent rounded-lg gap-x-2 hover:bg-teal-700 focus:outline-none focus:bg-teal-700 disabled:opacity-50 disabled:pointer-events-none">
                                Save Appointment
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

