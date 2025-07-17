<?php

namespace App\View\Composers;

use Illuminate\View\View;
use App\Models\CategorieExpertise;

class ExpertisesComposer
{
    public function compose(View $view)
    {
        $view->with('expertisesMenu', CategorieExpertise::all());
    }
}
