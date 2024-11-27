<?php

namespace App\Livewire\Appointment;

use App\Models\Appointment;
use Livewire\Component;

class Edit extends Component
{
    public Appointment $appointment; // The appointment being edited
    public $name, $email, $hairstylist, $appointment_date;  // Declare properties for each field

    // The mount method is called when the component is initialized
    public function mount(Appointment $appointment)
    {
        // Prepopulate the form fields with the data from the appointment
        $this->appointment = $appointment;
        $this->name = $appointment->name;
        $this->email = $appointment->email;
        $this->hairstylist = $appointment->hairstylist;
        $this->appointment_date = $appointment->appointment_date;
    }

    // Handle form submission for updating the appointment
    public function update()
    {
        // Validate the form fields
        $this->validate();

        // Update the appointment in the database
        $this->appointment->update([
            'name' => $this->name,
            'email' => $this->email,
            'hairstylist' => $this->hairstylist,
            'appointment_date' => $this->appointment_date,
        ]);

        // Flash success message and redirect back to the appointments list
        flash()->success('Appointment updated successfully!');
        return redirect()->route('appointments.index');
    }

    // Validation rules for the form
    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'hairstylist' => 'required|string|max:255',
        'appointment_date' => 'required|date',
    ];

    // Render method for rendering the view
    public function render()
    {
        return view('livewire.appointments.edit') -> layout('layouts.app');
    }
}
