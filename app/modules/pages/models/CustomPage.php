<?php namespace App\Modules\Pages\Models;

use App\Modules\Pages\Models\Page;
use DB;

class CustomPage extends Page {

    /**
     * Select only pages that are published
     */
    public function scopePublished($query)
    {
        return $query->wherePublished(true)->where('published_at', '<=', DB::raw('CURRENT_TIMESTAMP'));
    }

}