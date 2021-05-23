<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public int $value = 0;

    public function increment()
    {
        $this->value++;
    }

    public function render()
    {
        return <<<'blade'
        <div>
            <p>Counter: {{ $value }}</p>

            <button wire:click="increment">Inc</button>
        </div>
        blade;
    }
}
