<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Student extends Model
    {

        protected $fillable = [
            'roll_no', 'student_name', 'gender', 'dob', 'father_name', 'mother_name',
            'address', 'class_id', 'section_id',
        ];
        
        public function classes()
       {
           return $this->belongsTo('App\Classes','class_id');
       }
       
       public function sections()
       {
           return $this->belongsTo('App\Section','section_id');
       }

    }
    