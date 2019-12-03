<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use App\Student;
    use App\Classes;
    use App\Section;
    use App\Imports\StudentsImport;
    use Maatwebsite\Excel\Facades\Excel;
    use Maatwebsite\Excel\ExcelServiceProvider;
    use DB;

    class StudentController extends Controller
    {

        public function index()
        {
            $students = Student::with('classes', 'sections')->paginate(5);
            return view('admin.student-list', compact('students'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
        }

        public function create()
        {
            $arr_class = Classes::all();
            $arr_section = Section::all();
            return view('admin.student-add', compact('arr_class', 'arr_section'));
        }

        public function store(Request $request)
        {
            $request->validate([
                'roll_no' => 'required',
                'student_name' => 'required',
                'gender' => 'required',
                'dob' => 'required',
                'father_name' => 'required',
                'mother_name' => 'required',
                'address' => 'required',
                'class_id' => 'required',
                'section_id' => 'required',
            ]);

            Student::create($request->all());

            return redirect()->route('students.index')
                    ->with('success', 'Student created successfully.');
        }

        public function edit(Student $student)
        {
            $arr_class = Classes::all();
            $arr_section = Section::all();
            return view('admin.student-edit', compact('student', 'arr_class', 'arr_section'));
        }

        public function update(Request $request, Student $student)
        {
            $request->validate([
                'roll_no' => 'required',
                'student_name' => 'required',
                'gender' => 'required',
                'dob' => 'required',
                'father_name' => 'required',
                'mother_name' => 'required',
                'address' => 'required',
                'class_id' => 'required',
                'section_id' => 'required',
            ]);

            $student->update($request->all());
            return redirect()->route('students.index')
                    ->with('success', 'Student updated successfully');
        }

        public function destroy($id)
        {
            Student::destroy($id);
            return redirect()->route('students.index')
                    ->with('success', 'Student deleted successfully');
        }

        public function add_multi_students()
        {
            return view('admin.multiple-students');
        }

        public function import(Request $request)
        {
            $path1 = $request->file('studentsxls')->store('temp');
            $path = storage_path('app') . '/' . $path1;
            Excel::import(new StudentsImport, $path);
            return view('admin.multiple-students');
        }
        
          public function show(Attendance $attendance)
        {
            //
        }

    }
    