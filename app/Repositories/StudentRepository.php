<?php

namespace App\Repositories;

use App\Models\Student;
use App\Repositories\BaseRepository;

/**
 * Class StudentRepository
 * @package App\Repositories
 * @version December 31, 2019, 7:29 pm UTC
*/

class StudentRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
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
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Student::class;
    }
}
