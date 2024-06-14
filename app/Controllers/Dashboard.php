<?php

namespace App\Controllers;

use App\Models\MArsip;
use App\Models\MArsipInaktif;
use App\Models\MAski;
use App\Models\MUser;
use App\Models\MAskiAkhir;

class Dashboard extends BaseController
{
    public function index()
    {
        $MArsipI    = new MArsipInaktif();
        $MArsip     = new MArsip();
        $MUser      = new MUser();
        $MAski      = new MAski();
        $MAskiAkhir  = new MAskiAkhir();
        $id = session()->get('id');
        $data = array(
            'title'         => 'Dashboard',
            'isi'           => 'dashboard/admin',
            'data_user'     => $MUser->dataUser($id),
            'jml'           => $MArsip->countId($id),
            'jml_i'         => $MArsipI->countId($id),
            'n_penciptaan'  => $MAski->nilai_penciptaan($id),
            'nilai_final'   => $MAskiAkhir->nilai_akhir($id)

        );
        return view('layout/wrapper', $data);
    }
}
