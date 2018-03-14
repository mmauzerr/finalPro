<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaraFlash;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

//      LaraFlash::add()->content('Hello World')->priority(6)->type('Info');
//      LaraFlash::snackbar('Click to continue')->priority(3);
        LaraFlash::danger('Oops Something went wrong!')->keep();
        LaraFlash::success('Yay it worked!');

        return view('home');
    }

    public function testflash(){

        $name = Input::get('name');

        if ($name == 'laravel'){
            echo 'success';

            $notification = [
                'message' => 'Successfully get laravel data',
                'alert-type' => 'success'
            ];

        } elseif ($name == 'found'){
            echo 'info';

            $notification = [
                'message' => 'Info, laravel data founded.',
                'alert-type' => 'info'
            ];

        } elseif ($name == 'notfound'){
            echo 'warning';

            $notification = [
                'message' => 'Warning, laravel data not founded! ',
                'alert-type' => 'warning'
            ];

        } else {
            echo 'error';

            $notification = [
                'message' => 'Error,input is <strong>not</strong> valid or empty!',
                'alert-type' => 'error'
            ];

        }

        return back()->with($notification);

    }


}