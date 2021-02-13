<?php

namespace App\Http\Controllers\Backend;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\get_in_touch;
class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $views = Contact::all();
        return view('backend.communicate.view-communicate', compact('views'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ]);
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();
        $data = array(
            'name' => $request['name'],
            'email' => $request['email'],
            'message' => $request['message'],
        );
        Mail::send('frontend.email.email_contact',$data, function($msg)use($data){
            $msg->from('imranhossainppip@gmail.com', 'Imran Hossain');
            $msg->to($data['email']);
            $msg->subject('Thanks for contact us');
        });
        return redirect()->back()->with('message', 'Email send successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        $views = get_in_touch::all();
        return view('backend.contact.view-contact', compact('views'));
    }
    public function add(){
        return view('backend.contact.add-contact');
    }
    public function save(Request $request){
        $request->validate([
            'address' =>'required',
            'phone' =>'required',
            'email' =>'required',
            'facebook' =>'required',
            'twitter' =>'required',
            'linkdin' =>'required',
            'google_plus' =>'required',
        ]);
        $save = new get_in_touch();
        $save->address = $request->address;
        $save->phone = $request->phone;
        $save->email = $request->email;
        $save->facebook = $request->facebook;
        $save->twitter = $request->twitter;
        $save->linkedin = $request->linkdin;
        $save->google = $request->google_plus;
        $save->save();
        $notification = [
            'message' =>'Contact Information saved successfully',
            'alert-type' => 'success',
        ];
        return redirect()->route('contact.all')->with($notification);
    }
    public function edit($contact)
    {
        $edit = get_in_touch::find($contact);
        return view('backend.contact.edit-contact', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $contact)
    {
        $request->validate([
            'address' =>'required',
            'phone' =>'required',
            'email' =>'required',
            'facebook' =>'required',
            'twitter' =>'required',
            'linkdin' =>'required',
            'google_plus' =>'required',
        ]);
        $update = get_in_touch::find($contact);
        $update->address = $request->address;
        $update->phone = $request->phone;
        $update->email = $request->email;
        $update->facebook = $request->facebook;
        $update->twitter = $request->twitter;
        $update->linkedin = $request->linkdin;
        $update->google = $request->google_plus;
        $update->save();
        $notification = [
            'message' =>'Contact Information update successfully',
            'alert-type' => 'info',
        ];
        return redirect()->route('contact.all')->with($notification);
    }
    public function destroy($contact)
    {
        $delete = get_in_touch::find($contact);
        $delete->delete();
        $notification = [
            'message' =>'Contact Information Deleted successfully',
            'alert-type' => 'warning',
        ];
        return redirect()->route('contact.all')->with($notification);
    }
}
