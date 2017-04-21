<?php

namespace App\Http\Controllers;

use App\Facades\Twitter;

class TwitterController extends Controller {

    public function userTimeLine() {

        $name = $_GET['name'];

        $data = Twitter::getUserTimeline(['count' => 100, 'format' => 'array', 'screen_name' => $name]);
        
        /*
         * função para mostrar os tweets do mais antigo para o mais novo
         */
        krsort($data);

        return view('twitter', get_defined_vars());
    }

}
