<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Dosen;

class DosenController extends Controller
{
        //create
    public function create(){
        
        //RAW
        $sql = DB::create("CRAETE INTO dosen (nidn,nama,jenis_kelamin,alamat,tempat_lahir,tanggal_lahir,photo,created_at,updated_at) VALUES ('10079', 'Hilman M.Kom','Laki-Laki','Jl.segaran','Karawang','1995-08-06','PhotoHilman.png',now(),now())");
        dump($sql);

        //SB
        $sql1 = DB::table('dosen')->create(
            [
                'nidn' => '10087',
                'nama' => 'Saman S.Kom',
                'jenis_kelamin' => 'Laki-Laki',
                'alamat' => 'Jl.Loji curug',
                'tempat_lahir' => 'Karawang',
                'tanggal_lahir' => '1987-09-15',
                'photo' => 'photoSaman.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
        dump($sql1);

        //ELOQUENT
        $sql2 = Dosen::create(
            [
                'nidn' => '10094',
                'nama' => 'Kusmayanti spd',
                'jenis_kelamin' => 'Perempuan',
                'alamat' => 'Jl.proklamasi no.5',
                'tempat_lahir' => 'Karawang',
                'tanggal_lahir' => '1990-07-28',
                'photo' => 'photoKusmayanti.png',
                'created_at' => now(),
                'updated_at' => now()
            ]
            );
            dump($sql2);
    }

    //read
    public function read(){

        //RAW
        $sql = DB::read("READ* FROM dosen");
        dd($sql);

        //SB
        $sql1 = DB::table('dosen')->get();
        dd($sql1);

        //ELOQUENT
        $sql2 = Dosen::all();
        dd($sql2);
    }


        //Update
    public function update(){

        // RAW
        $sql = DB::update("UPDATE dosen SET alamat='JL.Kuningan No.02',updated_at=now() WHERE id=?",[1]);
        dd($sql);

        //SB
        $sql1 = DB::table('dosen')
        ->where('id','3')
        ->update(
            [
                'alamat' => 'JL.Kuningan No.02',
                'updated_at' => now(),
            ]
            );
        dd($sql1);

        #ELOQUENT
        $sql2 = Dosen::where('id','1')->first()->update([
            'alamat' => 'Jl.Kuningan No.02',
            'updated_at' => now(),
        ]);
        dd($sql2);


    }

        //Delete
    public function delete(){

        //RAW
        $sql = DB::delete("DELETE FROM dosen WHERE nidn=?",['10094']);
        dd($sql);

        //SB
        $sql1 = DB::table('dosen')
        ->where('nidn','10094')
        ->delete();
        dd($sql1);

        //ELOQUENT
        $sql2 = Dosen::where('nidn','10094')->delete();
        dd($sql2);
    }
}
