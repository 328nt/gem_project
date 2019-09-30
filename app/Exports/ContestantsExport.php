<?php

namespace App\Exports;

use App\Contestants;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

use Maatwebsite\Excel\Concerns\FromCollection;

class ContestantsExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('be.exportform',[
            'contestants'=>Contestants::all()
        ]);
    }
}
