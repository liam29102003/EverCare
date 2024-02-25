<?php

namespace App\Livewire;

use Livewire\Component;

class ToggleLanguage extends Component
{
    public $language;
    public function updatedLanguage()
    {
        // dd($this->language);
        if (!in_array($this->language, config('localization.locales'))) {{
            abort(400);
        }
        
}
session(['localization' => $this->language]);
return $this->redirect(url()->previous(),navigate:true);
    }
    public function render()
    {
        return view('livewire.toggle-language');
    }
}
