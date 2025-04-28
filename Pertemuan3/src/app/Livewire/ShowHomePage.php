<?php

namespace App\Livewire;

use App\Models\Footer;
use Livewire\Component;

class ShowHomePage extends Component {

    public $foot;

    public function mount() {
        $this->foot = Footer::first();
    }

    public function render() {
        return view('livewire.show-home-page');
    }
}
