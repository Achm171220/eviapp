<?php

namespace App\Controllers;

use App\Models\ai_MDataUmum;

class Pengawasan extends BaseController
{
    public function dataUmum()

    {
        $id = session()->get('id');
        $MDtUmum = new ai_MDataUmum();
        $data = [
            'judul' => 'Data Umum',
            'isi'   => 'pengawasan/dataumum',
            'IdDtUmum'  => $MDtUmum->dtUmumId($id),
        ];
        return view('layout/wrapper', $data);
    }
   
}
