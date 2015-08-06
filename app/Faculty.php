<?php

namespace App;

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
        'university',
        'slug',
        'title',
        'short_title',
        'street',
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
        'pdv'
    ];

    /**
     * @var array
     */
    protected $sluggable = [
        'build_from' => 'title',
        'save_to'    => 'slug',
    ];

}
