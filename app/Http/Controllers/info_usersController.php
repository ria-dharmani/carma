<?php

namespace App\Http\Controllers;

class info_usersController
{
    public function show()
    {
        $info=\DB::table('users')->first()->name;

        dd($info);
        return $info;
    }


}

?>