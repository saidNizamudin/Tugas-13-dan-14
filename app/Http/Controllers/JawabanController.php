<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;
use App\Models\PertanyaanModel;

class JawabanController extends Controller
{
    public function index($pertanyaan_id) {
        // dd($pertanyaan_id);
        $jawaban = JawabanModel::findQuestionById($pertanyaan_id);
        // dd($jawaban);   
        $pertanyaan = PertanyaanModel::findById($pertanyaan_id);
        // dd($pertanyaan);
        return view('Tugas14.jawaban', compact('jawaban','pertanyaan','pertanyaan_id'));
    }

    public function store(Request $request,$pertanyaan_id) {
        // dd($request);
        $data = $request->all();
        unset($data["_token"]);
        $data['pertanyaan_id'] = $pertanyaan_id;
        JawabanModel::save($data);
        $jawaban = JawabanModel::findQuestionById($pertanyaan_id);
        $pertanyaan = PertanyaanModel::findById($pertanyaan_id);
        return view('Tugas14.jawaban', compact('jawaban','pertanyaan','pertanyaan_id'));
    }
}
