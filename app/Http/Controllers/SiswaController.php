<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Student;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $siswa = DB::table('')->get();
        // dump($siswa);
        $siswa = Student::all();
        return view('siswa.index', ['siswa' => $siswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $student = new Student;
        // $student->nama = $request->nama;
        // $student->no = $request->no;
        // $student->email = $request->email;

        // $student->save();

        // Student::create([
        //     'nama' => $request->nama,
        //     'no' => $request->no,
        //     'email' => $request->email,

        // ]);

        $request->validate([
            'nama' => 'required',
            'no' => 'required',
            'email' => 'required',

        ]);

        Student::create($request->all());
        return redirect('/siswa')->with('status', 'Data Siswa Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('siswa.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nama' => 'required',
            'no' => 'required',
            'email' => 'required',

        ]);
        Student::where('id', $student->id)
            ->update([
                'nama' => $request->nama,
                'no' => $request->no,
                'email' => $request->email
            ]);
        return redirect('/siswa')->with('status', 'Data Siswa Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Student::find($id);
        $siswa->delete();
        return redirect('/siswa')->with('status', 'Data Siswa Berhasil Dihapus!');
    }
}
