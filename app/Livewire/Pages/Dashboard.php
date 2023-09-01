<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;

class Dashboard extends Component
{

    #[Layout('layouts.auth-layout')]
    public function render()
    {
       


        return view('livewire.pages.dashboard' );
    }
}
