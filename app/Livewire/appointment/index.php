<?php

namespace App\Livewire\Appointment;

use App\Models\Appointment;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;

class index extends Component
{
    use WithPagination;

    
    public $search = '';  
    
    public string $sortColumn = 'appointment_date', $sortDirection = 'desc'; // Add the default sort column and direction
    
    public function render()
    {
        $query = Appointment::query();

        if ($this->search) {
            $this->applySearch($query);
        }

        $query = $this->applySort($query); // Apply sorting to the query

        $appointments = $query->paginate(5);

        return view('livewire.appointments.index', [
            'appointments' => $appointments,
        ])->layout('layouts.app');
    }

    // Sorting method
    public function sortBy(string $column)
    {
        if ($this->sortColumn == $column) {
            // Toggle the sort direction
            $this->sortDirection = $this->sortDirection == 'asc' ? 'desc' : 'asc';
        } else {
            // Default to ascending if sorting a new column
            $this->sortDirection = 'asc';
        }
        $this->sortColumn = $column; // Update the sort column
    }

    // Apply sorting to the query
    protected function applySort(Builder $query)
    {
        return $query->orderBy($this->sortColumn, $this->sortDirection);
    }

    
    public function delete($id)
    {
        $appointment = Appointment::find($id);
        if ($appointment) {
            $appointment->delete();

            // Notify the user about successful deletion
            flash()->info('Appointment deleted successfully!');
            return redirect()->route('appointments.index');
        }
    }

   
    public function applySearch(Builder $query)
    {
        return $query->where(function ($q) {
            $q->where('name', 'like', '%' . $this->search . '%')
              ->orWhere('email', 'like', '%' . $this->search . '%')
              ->orWhere('hairstylist', 'like', '%' . $this->search . '%')
              ->orWhere('appointment_date', 'like', '%' . $this->search . '%');  // Searching appointment_date if necessary
        });
    }
}

