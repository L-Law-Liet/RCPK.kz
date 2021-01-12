<?php


namespace App\Services;


class CourseService
{
    public function hasAccess($id){
        if (!session()->has('course_id') || session()->get('course_id') != $id){
            return false;
        }
        return true;
    }
}
