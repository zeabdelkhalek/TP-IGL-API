<?php

namespace App\Models;

use Eloquent as Model;

/**
 * @SWG\Definition(
 *      definition="Student",
 *      required={""},
 *      @SWG\Property(
 *          property="id",
 *          description="id",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @SWG\Property(
 *          property="matricule",
 *          description="matricule",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="email",
 *          description="email",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="first_name",
 *          description="first_name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="last_name",
 *          description="last_name",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="adresse",
 *          description="adresse",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="commune",
 *          description="commune",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="wilaya",
 *          description="wilaya",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="phone",
 *          description="phone",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="promo",
 *          description="promo",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="section",
 *          description="section",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="groupe",
 *          description="groupe",
 *          type="string"
 *      ),
 *      @SWG\Property(
 *          property="created_at",
 *          description="created_at",
 *          type="string",
 *          format="date-time"
 *      ),
 *      @SWG\Property(
 *          property="updated_at",
 *          description="updated_at",
 *          type="string",
 *          format="date-time"
 *      )
 * )
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
