<?php

namespace App\Livewire\Appointment;

use App\Models\Appointment;
use Livewire\Component;
use Livewire\WithPagination;

class index extends Component
{
    public $search =''; // The search term input
    use WithPagination;

    // Render the Livewire component
    public function render()
    {
        // Build the query
        $query = Appointment::query();
    $appointments = $query->paginate(10);// Debug the data being fetched

    return view('livewire.appointments.index', [
        'appointments' => $appointments,
    ])->layout('layouts.app');
    }

    // Method to delete an appointment
    public function delete($id)
    {
        $appointment = Appointment::find($id);
        if ($appointment) {
            $appointment->delete();

            // Notify the user about successful deletion
            session()->flash('success', 'Appointment deleted successfully.');
        }
    }
}
