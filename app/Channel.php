<?php

namespace App;

use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\Models\Media;

class Channel extends Model implements HasMedia
{
    use HasMediaTrait;

    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function editable()
    {
        if (!auth()->check()) return false;
        return $this->user_id === auth()->user()->id;
    }

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }

    public function image()
    {
        if ($this->media->first()) {
            return $this->media->first()->getFullUrl('thumb');
        }
        return null;
    }

    public function registerAllMediaConversions(?Media $media = null)
    {
        $this->addMediaConversion('thumb')
            ->width(150)
            ->height(150);
    }
}
