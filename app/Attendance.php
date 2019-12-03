<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Attendance extends Model
    {

        protected $fillable = [
            'attendance_date', 'student_id', 'class_id', 'section_id', 'status',
        ];

        public function classes()
        {
            return $this->belongsTo('App\Classes', 'class_id');
        }
        
        public function sections()
        {
            return $this->belongsTo('App\Section', 'section_id');
        }

        
        public function students()
        {
            return $this->belongsTo('App\Student', 'student_id');
        }

    }
    