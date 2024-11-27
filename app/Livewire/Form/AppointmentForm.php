<?php

namespace App\Livewire\Form;

use App\Models\Appointment;
use Livewire\Component;

class AppointmentForm extends Component
{
    public ?Appointment $appointment;
    public $name;
    public $email;
    public $hairstylist;
    public $appointment_date;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'hairstylist' => 'required|string|max:255',
        'appointment_date' => 'required|date',
    ];

    // Custom validation messages
    public function messages()
    {
        return [
            'name.required' => 'The name field is required.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please provide a valid email address.',
            'hairstylist.required' => 'The hairstylist field is required.',
            'appointment_date.required' => 'The appointment date field is required.',
            'appointment_date.date' => 'Please provide a valid date for the appointment.',
        ];
    }

    public function setAppointment(Appointment $appointment)
{
    
    $this->appointment = $appointment;
    $this->name = $appointment->name;
    $this->email = $appointment->email;
    $this->hairstylist = $appointment->hairstylist;
    $this->appointment_date = $appointment->appointment_date;
    
}
}
