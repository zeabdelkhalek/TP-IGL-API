<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Student
 * @package App\Models
 * @version December 31, 2019, 7:29 pm UTC
 *
 * @property string matricule
 * @property string email
 * @property string first_name
 * @property string last_name
 * @property string adresse
 * @property string commune
 * @property string wilaya
 * @property string phone
 * @property string promo
 * @property string section
 * @property string groupe
 */
class Student extends Model
{

    public $table = 'students';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'matricule',
        'email',
        'first_name',
        'last_name',
        'adresse',
        'commune',
        'wilaya',
        'phone',
        'promo',
        'section',
        'groupe'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'matricule' => 'string',
        'email' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'adresse' => 'string',
        'commune' => 'string',
        'wilaya' => 'string',
        'phone' => 'string',
        'promo' => 'string',
        'section' => 'string',
        'groupe' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'matricule' => 'required',
        'email' => 'required',
        'first_name' => 'required',
        'last_name' => 'required',
        'adresse' => 'required',
        'commune' => 'required',
        'wilaya' => 'required',
        'phone' => 'required',
        'promo' => 'required',
        'section' => 'required',
        'groupe' => 'required'
    ];

    
}
