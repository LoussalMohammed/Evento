<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Event;
use App\Models\Category;

class AdminStatistique extends Component
{
    public $users;
    public $category;
    public $event;

    public function __construct() {
        $this->users = User::all()->count();
        $this->category = Event::all()->count();
        $this->event = Category::all()->count();
    }
    public function render()
    {
        return view('livewire.admin-statistique');
    }
}
