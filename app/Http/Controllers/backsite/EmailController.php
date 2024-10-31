<?php

namespace App\Http\Controllers\backsite;

use App\Http\Controllers\Controller;
use App\Mail\TestMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{

    public function send(){
        //ambil semua data user (bulk email)
        $users = User::all();

        foreach($users as $user){
            //kirimkan email ke user yang didapat dari database
            Mail::to('adi@email.com')
            ->send(new TestMail('Test Email', 'Content', 'Ini adalah isi kontennya'));
    
        }
       
    return 'OK';
    }
    
}
