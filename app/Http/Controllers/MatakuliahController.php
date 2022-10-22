<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Matkul;

class MatakuliahController extends Controller
{
    public function insert(){

        // RAW SQL
        $sql = DB::insert("INSERT INTO matkul (kode_mk,nama_mk,created_at,updated_at) VALUES ('001', 'Cloud Computing',now(),now())");
        dump($sql);

        // SB
        $sql1 = DB::table('matkul')->insert(
            [
                'kode_mk' => '003',
                'nama_mk' => 'Cloud Computing',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        dd($sql1);

        //ELOQUENT
        $sql2 = Matakuliah::create(
            [
                'kode_mk' => '004',
                'nama_mk' => 'Cloud Computing',
                'created_at' => now(),
                'updated_at' => now()
            ]
            );
            dd($sql2);
        return "Data terproses";
    }

    public function select(){

        // RAW
        $sql = DB::select("SELECT * FROM matkul");
        dd($sql);

        // SB
        $sql2 = DB::table('matkul')->get();
        dd($sql2);

        //ELOQUENT
        $sql3 = Matakuliah::all();
        dd($sql3);
    }

    public function update(){

        //RAW
        $sql = DB::update("UPDATE matkul SET nama_mk='Framework',updated_at=now() WHERE id=?",[1]);
        dd($sql);

        //SB
        $sql1 = DB::table('matkul')
        ->where('id','1')
        ->update(
            [
                'nama_mk' => 'Framework',
                'updated_at' => now()
            ]
            );
        dd($sql1);

        #ELOQUENT
        $sql2 = Matakuliah::where('id','1')->first()->update([
            'nama_mk' => 'Framework',
            'updated_at' => now()
        ]);
        dd($sql2);

    }

    public function delete(){

        //RAW
        $sql = DB::delete("DELETE FROM matkul WHERE id=?",[1]);
        dd($sql);

        //SB
        $sql1 = DB::table('matkul')
        ->where('id','1')
        ->delete();
        dd($sql1);

        //ELOQUENT
        $sql2 = Matakuliah::where('id','1')->delete();
        dd($sql2);
    }
}
