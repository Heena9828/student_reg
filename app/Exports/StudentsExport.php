<?php

    namespace App\Exports;

    use App\Student;
    use Maatwebsite\Excel\Concerns\FromCollection;
    use Maatwebsite\Excel\Concerns\WithHeadings;
    use App\Classes;
    use App\Section;

    class StudentsExport implements FromCollection, WithHeadings
    {

        private $students;

        public function __construct($studArr)
        {
            $this->students = $studArr;
        }

        public function collection()
        {
            foreach ($this->students as $key => $val)
            {
                $cls = json_decode($val['classes'], 1);
                $section = json_decode($val['sections'], 1);

                $studentCSV[] = [
                    'roll_no' => $val['roll_no'],
                    'student_name' => $val['student_name'],
                    'gender' => $val['gender'],
                    'dob' => $val['dob'],
                    'father_name' => $val['father_name'],
                    'mother_name' => $val['mother_name'],
                    'address' => $val['address'],
                    'class' => $cls['class_name'],
                    'section' => $section['section_name']
                ];
            }
//            
            return collect($studentCSV);
        }

        public function headings(): array
        {
            return [
                'Roll No',
                'Student Name',
                'Gender',
                'Dob',
                'Father Name',
                'Mother Name',
                'Address',
                'Class',
                'Section'
            ];
        }

    }
    