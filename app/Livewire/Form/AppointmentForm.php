<?php

namespace App\Livewire\Form;

use Livewire\Component;

class AppointmentForm extends Component
{
    public $name;
    public $email;
    public $hairstylist;
    public $appointment_date;

    // Set the appointment data into the form fields
    public function setAppointment($appointment)
    {
        $this->name = $appointment->name;
        $this->email = $appointment->email;
        $this->hairstylist = $appointment->hairstylist;
        $this->appointment_date = $appointment->appointment_date;
    }

    // Validation rules for the appointment form
    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'hairstylist' => 'required|string|max:255',
        'appointment_date' => 'required|date',
    ];

    // Render the component (if needed for additional form logic)
    public function render()
    {
        return view('livewire.appointments.index');
    }
}
