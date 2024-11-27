<div>
    <div class="py-12 bg-gradient-to-r from-gold-300 to-black">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-gradient-to-r from-gold-500 to-black shadow-xl rounded-xl">
                <div class="p-6 text-black">
                    
                    {{-- Title and Description --}}
                    <div class="flex flex-col gap-y-4 mb-8">
                        <div class="flex flex-col gap-y-1">
                            <h1 class="text-3xl font-bold text-black-500">Create Appointment</h1>
                            <p class="text-sm text-gold-300">Fill out this form to schedule a new appointment. Please ensure all details are accurate.</p>
                        </div>
                    </div>

                    {{-- Create Appointment Form --}}
                    <form wire:submit.prevent="submit">
                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                            
                            {{-- Name Field --}}
                            <div>
                                <label for="name" class="block mb-2 text-sm font-medium text-black-400">Name</label>
                                <input 
                                    type="text" 
                                    id="name" 
                                    wire:model="name" 
                                    class="block w-full px-4 py-3 text-sm rounded-lg border-gold-400 focus:border-gold-500 focus:ring-gold-500 bg-black text-gold-300 placeholder-gold-500
                                    @error('name') border-red-500 focus:ring-red-500 focus:border-red-500 @enderror"
                                >
                                @error('name')
                                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- Email Field --}}
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-black-400">Email</label>
                                <input 
                                    type="email" 
                                    id="email"
                                    wire:model="email" 
                                    class="block w-full px-4 py-3 text-sm rounded-lg border-gold-400 focus:border-gold-500 focus:ring-gold-500 bg-black text-gold-300 placeholder-gold-500
                                    @error('email') border-red-500 focus:ring-red-500 focus:border-red-500 @enderror"
                                >
                                @error('email')
                                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            {{-- Hairstylist Field --}}
                            <div>
                                <label for="hairstylist" class="block mb-2 text-sm font-medium text-black-400">
                                    Select a Hairstylist
                                </label>
                                <select 
                                    id="hairstylist" 
                                    wire:model="hairstylist" 
                                    class="block w-full px-4 py-3 text-sm rounded-lg border-gold-400 focus:border-gold-500 focus:ring-gold-500 bg-black text-gold-300 placeholder-gold-500
                                    @error('hairstylist') border-red-500 focus:ring-red-500 focus:border-red-500 @enderror"
                                >
                                    <option value="" disabled selected>Select a hairstylist</option>
                                    <option value="John Doe">John Doe</option>
                                    <option value="Jane Smith">Jane Smith</option>
                                    <option value="Michael Brown">Michael Brown</option>
                                    <option value="Emma Johnson">Emma Johnson</option>
                                </select>
                                @error('hairstylist')
                                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                            {{-- Appointment Date Field --}}
                            <div>
                                <label for="appointment_date" class="block mb-2 text-sm font-medium text-black-400">Appointment Date</label>
                                <input 
                                    type="datetime-local" 
                                    id="appointment_date" 
                                    wire:model="appointment_date" 
                                    class="block w-full px-4 py-3 text-sm rounded-lg border-gold-400 focus:border-gold-500 focus:ring-gold-500 bg-black text-gold-300 placeholder-gold-500
                                    @error('appointment_date') border-red-500 focus:ring-red-500 focus:border-red-500 @enderror"
                                >
                                @error('appointment_date')
                                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>

                        {{-- Form Actions --}}
                        <div class="flex justify-end mt-6 gap-x-4">
                            <a href="{{ route('appointments.index') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gold-400 bg-black border border-gold-400 rounded-lg gap-x-2 hover:bg-gold-700 hover:text-black focus:outline-none focus:ring-2 focus:ring-gold-600">
                                Cancel
                            </a>
                            <button type="submit" class="px-4 py-2 text-sm font-medium text-black bg-gold-600 border border-transparent rounded-lg gap-x-2 hover:bg-gold-700 focus:outline-none focus:bg-gold-700">
                                Save Appointment
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
