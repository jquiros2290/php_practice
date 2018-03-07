<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

require '../vendor/autoload.php';
use Illuminate\Mail\Mailer;
use Mailgun\Mailgun;





class EmailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('emails.create');
    }


    public function email()
    {

        // dd(request('email'));
        $mgClient = new Mailgun('key-241a25a860c88d511d9c15346eab4ad3');
        $domain = "sandboxef0a1f9747f149cabf8d327851109687.mailgun.org";
        $result = $mgClient->sendMessage("$domain",
          array('from'    => 'Justin From ROBOAMP ⚡ <postmaster@sandboxef0a1f9747f149cabf8d327851109687.mailgun.org>',
                'to'      => request('email'),
                'subject' => 'You have added a new customer!',
                'text'    => 'Congratulations, you have added a new customer.  You are truly awesome! '));
        return back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
