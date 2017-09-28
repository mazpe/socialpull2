<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialPost extends Model
{
    /**
     * Social Post model belongs to a Federal Legislator.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function federalLegislator()
    {
        return $this->belongsTo('App\Models\FederalLegislator');
    }
}
