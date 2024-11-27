<?php

namespace App\Livewire\Appointment;

use App\Models\Appointment;  
use Livewire\Component;

class Create extends Component
{
    
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

    public function render()
    {
        return view('livewire.appointments.create')->layout('layouts.app');
    }
    public function store()
    {
        $this->validate(); // Validating data before saving

        // Create the new appointment
        Appointment::create([
            'name' => $this->name,
            'email' => $this->email,
            'hairstylist' => $this->hairstylist,
            'appointment_date' => $this->appointment_date,
        ]);

        session()->flash('message', 'Appointment created successfully!'); // Flash message on success

        // Reset the form data for new entry
        $this->reset();
    }

    public function submit()
{
    $this->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'hairstylist' => 'required|string|max:255',
        'appointment_date' => 'required|date',
    ]);

    // Save the appointment
    Appointment::create([
        'name' => $this->name,
        'email' => $this->email,
        'hairstylist' => $this->hairstylist,
        'appointment_date' => $this->appointment_date,
    ]);

    
    flash()->success('Appointment created successfully!');
    // Reset form fields after successful submission
    $this->reset();
    return view('livewire.appointments.index')->layout('layouts.app');
}
}
