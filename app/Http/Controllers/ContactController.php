<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
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
        return view('aaablog.contact.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        request()->validate([
            'title' => 'required',
            'name' => 'required',
            'body' => 'required'
        ]);

        $msg = new Contact();

        $msg->title = request('title');
        $msg->name = request('name');
        $msg->body = request('body');

        $msg->save();

        return redirect('/contact');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $msgs = Contact::latest()->get();
        return view('aaablog.contact.show',[
            'msgs' => $msgs
        ]);
    }

    public function fullMsg($id)
    {
        $msg = Contact::findOrFail($id);
        return view('dashboard.files.full-msg',[
            'msg' => $msg
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //

        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $msg = Contact::find($id);
        $msg->delete();
        return redirect('/dashboard/msg');
    }
}
