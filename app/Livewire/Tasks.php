<?php

namespace App\Livewire;

use Livewire\Component;

class Tasks extends Component
{
    public array $tasks = [];
    public string $task = '';

    public function mount()
    {
        $this->tasks = ['First task', 'Second task',];
    }

    public function add()
    {
        $this->tasks[] = $this->task;
        $this->task = '';
    }

    public function render()
    {
        return view('livewire.tasks');
    }
}
