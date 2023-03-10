<?php

namespace App\Http\Livewire;

use App\Models\Contributions;
use App\Services\ContributionsService;
use Livewire\Component;

class Like extends Component
{
    public $contribution;
    public $role;
    public $name;
    public $class;

    public function mount(Contributions $contribution)
    {
        $this->contribution = $contribution;
        $this->role = "wire:click=contribution_like";
        $this->name = "Like";
        $this->class = "reply-btn";
    }

    public function contribution_like()
    {
        ContributionsService::contribution_like($this->contribution);
        $this->role = "wire:click=contribution_dislike";
        $this->name = "Dislike";
        $this->class = "too-btn";
    }

    public function contribution_dislike()
    {
        ContributionsService::contribution_dislike($this->contribution);
        $this->role = "wire:click=contribution_like";
        $this->name = "Like";
        $this->class = "reply-btn";
    }

    public function render()
    {
        return <<<'blade'
            <div>
            <a {{$role}} class="action_btn btn-ans ask-btn {{$class}}">{{$name}}</a>
            </div>
        blade;
    }
}
