<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FederalLegislator extends Model
{
    /**
     * Federal Legislator model has many Social Posts
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function social_posts()
    {
        return $this->hasMany('App\Models\SocialPost');
    }
}
