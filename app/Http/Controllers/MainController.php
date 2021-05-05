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
        $newquestion = Pertanyaan::with('user')->orderBy('updated_at', 'desc')->get();
        return view('task17&18\create', compact('newquestion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pertanyaan::create([
            'isi' => $request->isi,
            'user_id' => $request->id
        ]);
        return redirect(url('/database'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show1($id)
    {
        // $data = ::where('id', $id)->first();
        // return view('task17&18\show', compact('data'));
        $pertanyaan = Pertanyaan::with('tag')->orderBy('updated_at', 'desc')->get();
        $data = User::with('pertanyaan')->orderBy('updated_at', 'desc')->where('id', $id)->get();
        // $data = User::with('pertanyaan')->orderBy('updated_at', 'desc')->where('id', $id)->get();
        return view('task17&18\show', compact('data','pertanyaan'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show2($id)
    {
        $data = Pertanyaan::with('user', 'jawaban', 'jawabanBenar')->orderBy('updated_at', 'desc')->where('id', $id)->get();
        $data2 = User::with('pertanyaan')->orderBy('updated_at', 'desc')->get();
        return view('task17&18\answer', compact('data', 'data2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $newquestion = Pertanyaan::where('id', $id)->first();
        return view('task17&18\edit', compact('newquestion'));
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
        Pertanyaan::where('id', '=', $id)->update([
            'isi' => $request->isi,
        ]);
        return redirect(url('/database/show/pertanyaan') . '/' . $request->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // DB::table('newquestion')->delete($id);
        Pertanyaan::find($id)->delete();
        return redirect(url('/database/show/pertanyaan/delete'));
    }
}
