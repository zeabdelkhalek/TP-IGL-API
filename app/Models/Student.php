<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Student
 * @package App\Models
 * @version December 30, 2019, 6:02 pm UTC
 *
 * @property string matricule
 * @property string email
 * @property string first-name
 * @property string last-name
 * @property string adresse
 * @property string commune
 * @property string wilaya
 * @property integer phone
 * @property string promo
 * @property string section
 * @property string groupe
 */
class Student extends Model
{
    use SoftDeletes;

    public $table = 'students';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'matricule',
        'email',
        'first-name',
        'last-name',
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
        'first-name' => 'string',
        'last-name' => 'string',
        'adresse' => 'string',
        'commune' => 'string',
        'wilaya' => 'string',
        'phone' => 'integer',
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
        'first-name' => 'required',
        'last-name' => 'required',
        'adresse' => 'required',
        'commune' => 'required',
        'wilaya' => 'required',
        'phone' => 'required',
        'promo' => 'required',
        'section' => 'required',
        'groupe' => 'required'
    ];

    
}