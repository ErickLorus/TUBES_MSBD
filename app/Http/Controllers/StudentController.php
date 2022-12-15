<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Year;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexSmp()
    {
        // $data = Student::all();
        // $val = Year::where('tingkat', 'SMP');
        // $data= DB::select('CALL p_dt_siswa_pertingkat($val)');

        $data = DB::table('student as s')
        ->join('kelas as c', 's.id_kelas', '=', 'c.id_kelas')
        ->join('year as y', 'c.id_year', '=', 'y.id_year')
        ->where('y.id_year', '=', 'VII')
        ->get();

        $data1 = DB::table('student as s')
        ->join('kelas as c', 's.id_kelas', '=', 'c.id_kelas')
        ->join('year as y', 'c.id_year', '=', 'y.id_year')
        ->where('y.id_year', '=', 'VIII')
        ->get();

        $data2 = DB::table('student as s')
        ->join('kelas as c', 's.id_kelas', '=', 'c.id_kelas')
        ->join('year as y', 'c.id_year', '=', 'y.id_year')
        ->where('y.id_year', '=', 'IX')
        ->get();


        return view('admin.smp', compact('data', 'data1', 'data2'));
    }

    public function indexSma()
    {
        // $data = Student::all();
        // $val = Year::where('tingkat', 'SMP');
        // $data= DB::select('CALL p_dt_siswa_pertingkat($val)');

        $data = DB::table('student as s')
        ->join('kelas as c', 's.id_kelas', '=', 'c.id_kelas')
        ->join('year as y', 'c.id_year', '=', 'y.id_year')
        ->where('y.id_year', '=', 'X')
        ->get();

        $data1 = DB::table('student as s')
        ->join('kelas as c', 's.id_kelas', '=', 'c.id_kelas')
        ->join('year as y', 'c.id_year', '=', 'y.id_year')
        ->where('y.id_year', '=', 'XI')
        ->get();

        $data2 = DB::table('student as s')
        ->join('kelas as c', 's.id_kelas', '=', 'c.id_kelas')
        ->join('year as y', 'c.id_year', '=', 'y.id_year')
        ->where('y.id_year', '=', 'XII')
        ->get();


        return view('admin.sma', compact('data', 'data1', 'data2'));
    }

    public function indexSmk()
    {
        // $data = Student::all();
        // $val = Year::where('tingkat', 'SMP');
        // $data= DB::select('CALL p_dt_siswa_pertingkat($val)');

        $data1 = DB::table('student as s')
        ->join('kelas as c', 's.id_kelas', '=', 'c.id_kelas')
        ->join('year as y', 'c.id_year', '=', 'y.id_year')
        ->where('y.id_year', '=', 'X-K')
        ->get();

        $data2 = DB::table('student as s')
        ->join('kelas as c', 's.id_kelas', '=', 'c.id_kelas')
        ->join('year as y', 'c.id_year', '=', 'y.id_year')
        ->where('y.id_year', '=', 'XI-K')
        ->get();

        $data3 = DB::table('student as s')
        ->join('kelas as c', 's.id_kelas', '=', 'c.id_kelas')
        ->join('year as y', 'c.id_year', '=', 'y.id_year')
        ->where('y.id_year', '=', 'XII-K')
        ->get();


        return view('admin.smk', compact('data1', 'data2', 'data3'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
