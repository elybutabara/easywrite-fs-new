<?php

namespace App\Repositories;

use App\Repositories\Eloquent\Repository;

class CourseTestimonialRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    public function model()
    {
        return \App\CourseTestimonial::class;
    }
}
