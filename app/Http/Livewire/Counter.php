<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public int $value = 0;
    public bool $tick = false;

    public function increment()
    {
        $this->value++;
    }

    public function render()
    {
        return <<<'blade'
        <div
            x-data="{
                tick: @entangle('tick'),
                timer: null,
            }"
            x-init="$watch('tick', function (value) {
                if (this.timer) {
                    clearInterval(this.timer);
                    this.timer = null;
                }

                if (value) {
                    this.timer = setInterval(() => {
                        $wire.increment();
                    }, 2000);
                }
            })"
        >
            <p>Counter <span x-text="tick ? 'on' : 'off'"></span>: {{ $value }}</p>

            <button @click="tick = !tick">Toggle Timer</button>
        </div>
        blade;
    }
}
