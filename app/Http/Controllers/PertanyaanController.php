<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Question;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $newquestion = DB::table('newquestion')->orderBy('updated_at', 'desc')->get();
        $newquestion = Question::orderBy('updated_at', 'desc')->get();
        return view('task15\table', compact('newquestion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $newquestion = DB::table('newquestion')->orderBy('updated_at', 'desc')->get();
        $newquestion = Question::orderBy('updated_at', 'desc')->get();
        return view('task15\create', compact('newquestion'));
        // return view('task15\table');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // DB::table('newquestion')->insert([
        //     'task' => $request->task,
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s')
        // ]);
        Question::create([
            'task' => $request->task,
        ]);
        return redirect(url('/pertanyaan'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $data = DB::table('newquestion')->where('id', $id)->first();
        $data = Question::where('id', $id)->first();
        return view('task15\show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $newquestion = DB::table('newquestion')->where('id', $id)->first();
        $newquestion = Question::where('id', $id)->first();
        return view('task15\edit', compact('newquestion'));
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
        // DB::table('newquestion')->where('id', '=', $id)->update([
        //     'task' => $request->task,
        //     'updated_at' => date('Y-m-d H:i:s')
        // ]);
        Question::where('id', '=', $id)->update([
            'task' => $request->task,
        ]);
        return redirect(url('/pertanyaan'));
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
        Question::find($id)->delete();
        return redirect(url('/pertanyaan'));
    }
}