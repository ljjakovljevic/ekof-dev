<?php

namespace App;

use Carbon\Carbon;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model implements SluggableInterface
{
    use SluggableTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'faculties';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'founder',
        'slug',
        'title',
        'short_title',
        'street',
        'street_no',
        'postal_code',
        'city',
        'phone',
        'fax',
        'email',
        'website',
        'registration_no',
        'activity_code',
        'activity_desc',
        'identification_no',
        'bank_account',
        'bank',
        'foreign_payments',
        'pib',
        'pdv',
        'published_at',
        'updated_at'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var array
     */
    protected $sluggable = [
        'build_from' => 'title',
        'save_to'    => 'slug',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['published_at', 'updated_at'];

    /**
     * @param $date
     */
    public function setPublishedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::parse($date);
    }

    /**
     * @param $date
     */
    public function setUpdatedAtAttribute($date)
    {
        $this->attributes['published_at'] = Carbon::parse($date);
    }

}
