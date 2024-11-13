<?php

namespace App\Http\Controllers;

use App\Models\Student;

use Illuminate\Http\Request;

use function Laravel\Prompts\confirm;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::all();
        return view('list', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**

     */
    public function destroy(string $id)
    {

        $remove = Student::find($id);



        if ($remove) {



            $remove->delete();
            return redirect()->route('student.index')->with('success', 'Data deleted successfully.');
        }
    }
}
