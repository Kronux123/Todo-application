<?php

namespace App\Livewire\Components;

use Livewire\Component;
use Asantibanez\LivewireCharts\Models\ColumnChartModel;
class ColumnChart extends Component
{
    public $columnChartModel;

    public function mount()
    {
        $this->columnChartModel = 
            (new ColumnChartModel())
            ->setTitle('Expenses by Type')
            ->addColumn('Food', 100, '#f6ad55')
            ->addColumn('Shopping', 200, '#fc8181')
            ->addColumn('Travel', 300, '#90cdf4');
    }
    public function render()
    {
        return view('livewire.components.column-chart');
    }
}
