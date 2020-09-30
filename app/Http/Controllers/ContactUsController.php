<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use App\Jobs\SendContactFromMessageToAdmin;
use App\Http\Requests\Validations\ContactUsRequest;

class ContactUsController extends Controller
{
    private $model;

    /**
     * construct
     */
    public function __construct()
    {
        parent::__construct();
        $this->model = trans('app.model.message');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function send(ContactUsRequest $request)
    {
        $message = Message::create($request->all());

        // Dispatching SendContactFromMessageToAdmin job
        SendContactFromMessageToAdmin::dispatch($message);

        if($request->ajax())
            return response(trans('messages.sent', ['model' => $this->model]), 200);

       return back()->with('success', trans('messages.sent', ['model' => $this->model]));
    }

    // return join-us kbami view
    // public function joinus() {
    //     //$theme = Config::get('site.theme');
    //     //return View::addLocation(public_path() . '/themes/default/views/layouts/join_us_kbami');
    //     //return redirect("http://google.com")
    //     return view('modals._create_address', compact('countries','states','address_types'))->render();

    // }
}
