<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Pertanyaan;
use App\Jawaban;
use App\Jawaban_Benar;
use App\Tag;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // User punya banyak Pertanyaan, 1 Pertanyaan kepunyaan 1 User.
        $data = User::with('pertanyaan')->orderBy('updated_at', 'desc')->get();

        // 1 Pertanyaan punya banyak Jawaban. 1 Jawaban kepunyaan 1 Pertanyaan
        $data2 = Pertanyaan::with('jawaban')->orderBy('updated_at', 'desc')->get();


        // dd($data2);
        return view('task17&18\table', compact('data', 'data2'));
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
        // $data = ::where('id', $id)->first();
        // return view('task17&18\show', compact('data'));
        $data = User::with('pertanyaan')->orderBy('updated_at', 'desc')->where('id', $id)->get();
        return view('task17&18\show', compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show2($id)
    {
        $data2 = Pertanyaan::with('jawaban')->orderBy('updated_at', 'desc')->where('id', $id)->get();
        // dd($data2);
        return view('task17&18\answer', compact('data2'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show3($id)
    {
        $data3 = Pertanyaan::with('jawabanBenar')->orderBy('updated_at', 'desc')->where('id', $id)->get();
        dd($data3);
        return view('task17&18\right_answer', compact('data3'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show4($id)
    {
        $data4 = Pertanyaan::with('tag')->orderBy('updated_at', 'desc')->where('id', $id)->get();
        // dd($data4);
        return view('task17&18\tag', compact('data4'));
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
