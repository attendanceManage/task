<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\CustomerReviews;
use App\Models\FrequentlyQuestions;
use App\Models\Products;
use App\Models\Sliders;
class ShowHome extends Component
{
    public function render()
    {

        $customerReviews =  CustomerReviews::all();
        $frequentlyQuestions =  FrequentlyQuestions::all();
        $products =  Products::all();
        $slider =  Sliders::first();
        return view('livewire.show-home',compact('customerReviews','frequentlyQuestions','products','slider'));
    }
}
