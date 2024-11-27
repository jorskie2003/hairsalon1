<div class="bg-gradient-to-r from-blue-500 via-purple-600 to-pink-500 min-h-screen">
    <div class="py-8">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <!-- Page Header -->
            <div class="flex justify-between p-4 items-center">
                <div>
                    <h1 class="text-3xl font-bold text-white">Appointments</h1>
                    <p class="text-sm text-gray-100">A comprehensive list of all appointments in the system.</p>
                </div>
                <div>
                <a href="{{ route('appointments.create') }}"
   class="inline-flex items-center px-6 py-3 text-sm font-medium text-white bg-indigo-600 rounded-xl shadow-md gap-x-3 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 transition duration-200">
   Add Appointment
</a>
                </div>
            </div>

            <!-- Search Section -->
            <div class="mb-4">
                <input type="text" wire:model="search" 
                       placeholder="Search appointments..." 
                       class="form-input w-full px-4 py-3 text-sm rounded-lg border-gray-300 dark:bg-neutral-900 dark:text-neutral-400 dark:border-neutral-700 dark:focus:ring-teal-600">
            </div>

            <!-- Appointments Table -->
            <div class="overflow-hidden bg-white shadow-xl rounded-xl mt-8 dark:bg-neutral-800">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="overflow-x-auto rounded-lg bg-gradient-to-tl from-indigo-100 via-purple-50 to-pink-50 dark:from-neutral-800 dark:via-neutral-700 dark:to-neutral-600 shadow-lg">
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-600 uppercase text-start dark:text-neutral-500">Name</th>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-600 uppercase text-start dark:text-neutral-500">Email</th>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-600 uppercase text-start dark:text-neutral-500">Hairstylist</th>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-600 uppercase text-start dark:text-neutral-500">Appointment Date</th>
                                    <th class="px-6 py-3 text-xs font-medium text-gray-600 uppercase text-end dark:text-neutral-500">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($appointments as $appointment)
                                <tr class="odd:bg-white even:bg-gray-50 hover:bg-gray-200 dark:odd:bg-neutral-800 dark:even:bg-neutral-700 dark:hover:bg-neutral-600">
                    <td class="px-6 py-4 text-sm font-medium text-gray-800 dark:text-neutral-200">{{ $appointment->id }}</td>
                    <td class="px-6 py-4 text-sm text-gray-800 dark:text-neutral-200">{{ $appointment->name }}</td>
                    <td class="px-6 py-4 text-sm text-gray-800 dark:text-neutral-200">{{ $appointment->email }}</td>
                    <td class="px-6 py-4 text-sm text-gray-800 dark:text-neutral-200">{{ $appointment->hairstylist }}</td>
                    <td class="px-6 py-4 text-sm text-gray-800 dark:text-neutral-200">{{ $appointment->appointment_date->format('Y-m-d H:i') }}</td>
                    <td class="px-6 py-4 text-sm font-medium text-end">
                        <div class="flex justify-end items-center gap-x-3">
                            <a href="{{ route('appointments.edit', $appointment->id) }}" wire:navigate 
                            class="text-sm font-semibold text-blue-600 border border-transparent rounded-lg gap-x-2 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none dark:text-blue-500 dark:hover:text-blue-400 dark:focus:text-blue-400">
                            Edit
                            </a>
                            <button type="button" wire:click="delete({{ $appointment->id }})"
                                    wire:confirm="Are you sure you want to delete this appointment?"
                                    class="text-sm font-semibold text-red-600 border border-transparent rounded-lg gap-x-2 hover:text-red-800 focus:outline-none focus:text-red-800 disabled:opacity-50 disabled:pointer-events-none dark:text-red-500 dark:hover:text-red-400 dark:focus:text-red-400">
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
        </div>
    </div>
</div>
