<div class="bg-gradient-to-b from-black to-neutral-900 min-h-screen">
    <div class="py-8">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <!-- Page Header -->
            <div class="flex justify-between p-4 items-center">
                <div>
                    <h1 class="text-3xl font-bold text-gold-500">Appointments</h1>
                    <p class="text-sm text-gold-300">A curated list of all appointments in the system.</p>
                </div>
                <div>
                    <a href="{{ route('appointments.create') }}"
                        class="inline-flex items-center px-6 py-3 text-sm font-medium text-black bg-gold-500 rounded-xl shadow-md gap-x-3 hover:bg-gold-600 focus:outline-none focus:ring-2 focus:ring-gold-400 transition duration-200">
                        Add Appointment
                    </a>
                </div>
            </div>

            <!-- Search Section -->
            <div class="mb-4">
                <input type="text" wire:model.live.debounce.500="search"
                    placeholder="Search appointments..." 
                    class="form-input w-full px-4 py-3 text-sm rounded-lg border-gold-300 bg-black text-gold-400 placeholder-gold-500 focus:ring-gold-500 focus:border-gold-500">
            </div>

            <!-- Appointments Table -->
            <div class="overflow-hidden bg-black shadow-xl rounded-xl mt-8 border border-gold-700">
                <div class="p-6 text-gold-200">
                    <div class="overflow-x-auto rounded-lg bg-gradient-to-br from-black via-neutral-800 to-gold-900 shadow-lg">
                        <table class="min-w-full divide-y divide-gold-600">
                            <thead>
                                <tr>
                                                                <th scope="col" class="px-6 py-3 text-sm font-medium uppercase text-start">
                                                                <x-sortable column="id" :$sortColumn :$sortDirection>
                                        ID
                                    </x-sortable>
                                </th>
                                <th scope="col" class="px-6 py-3 text-sm font-medium uppercase text-start">
                                <x-sortable column="name" :$sortColumn :$sortDirection>
                                        Name
                                    </x-sortable>
                                </th>
                                <th scope="col" class="px-6 py-3 text-sm font-medium uppercase text-start">
                                <x-sortable column="email" :$sortColumn :$sortDirection>
                                        Email
                                    </x-sortable>
                                </th>
                                <th scope="col" class="px-6 py-3 text-sm font-medium uppercase text-start">
                                <x-sortable column="hairstylist" :$sortColumn :$sortDirection>
                                        Hairstylist
                                    </x-sortable>
                                </th>
                                <th scope="col" class="px-6 py-3 text-sm font-medium uppercase text-start">
                                <x-sortable column="appointment_date" :$sortColumn :$sortDirection>
                                        Appointment Date
                                    </x-sortable>
                                </th>
                                <th scope="col" class="px-6 py-3 text-sm font-medium uppercase text-end">
                                    Actions
                                </th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($appointments as $appointment)
                                <tr class="odd:bg-neutral-900 even:bg-neutral-800 hover:bg-gold-800">
                                    <td class="px-6 py-4 text-sm font-medium text-gold-300">{{ $appointment->id }}</td>
                                    <td class="px-6 py-4 text-sm text-gold-300">{{ $appointment->name }}</td>
                                    <td class="px-6 py-4 text-sm text-gold-300">{{ $appointment->email }}</td>
                                    <td class="px-6 py-4 text-sm text-gold-300">{{ $appointment->hairstylist }}</td>
                                    <td class="px-6 py-4 text-sm text-gold-300">
                                        {{ $appointment->appointment_date ? $appointment->appointment_date->format('Y-m-d H:i') : 'N/A' }}
                                    </td>
                                    <td class="px-6 py-4 text-sm font-medium text-end">
                                        <div class="flex justify-end items-center gap-x-3">
                                            <a href="{{ route('appointments.edit', $appointment->id) }}" wire:navigate 
                                                class="text-sm font-semibold text-gold-400 hover:text-gold-500">
                                                Edit
                                            </a>
                                            <button type="button" wire:click="delete({{ $appointment->id }})"
                                                wire:confirm="Are you sure you want to delete this appointment?"
                                                class="text-sm font-semibold text-red-500 hover:text-red-600">
                                                Delete
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination Links -->
                    <div class="my-6">
                        {{ $appointments->links() }}
                    </div>
                </div>
            </div>
            <x-spinner wire:loading />
        </div>
    </div>
</div>
