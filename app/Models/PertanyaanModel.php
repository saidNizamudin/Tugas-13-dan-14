<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class PertanyaanModel {
    public static function getAll() {
        $all = DB::table('pertanyaan')->get();
        return $all;
    }

    public static function save($data) {
        $save = DB::table('pertanyaan')->insert($data);
        return $save;
    }

    public static function findById($id) {
        $item = DB::table('pertanyaan')->where('id',$id)->get();
        return $item;
    }

    public static function update($id,$request) {
        $item = DB::table('pertanyaan')
                ->where('id',$id)
                ->update([
                    'isi' => $request['isi'],
                    'created_at' => $request['created_at'],
                    'updated_at' => $request['updated_at'],
                ]);
         return $item;   
    }

    public static function drop($id) {
        $items = DB::table('pertanyaan')
                ->where('id',$id)
                ->delete();
        return $items;
    }
}