<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;


class ContactController extends Controller {
    public function submit(ContactRequest $req){
        $contact = new Contact();
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('contact')->with('success', 'Сообщение было отправлено');
    }

    public function updateMessageSubmit($id,  ContactRequest $req){
        $contact = Contact::find($id);
        $contact->name = $req->input('name');
        $contact->email = $req->input('email');
        $contact->subject = $req->input('subject');
        $contact->message = $req->input('message');

        $contact->save();

        return redirect()->route('contact-data')->with('success', 'Сообщение было обновлено');
    }

    public function deleteMessage($id) {
        Contact::find($id)->delete();
        return redirect()->route('contact-data')->with('success', 'Сообщение было удалено');
    }

    public function allData() {
        $contact = new Contact;
        // return view('messages', ['data' => $contact->orderBy('id')->skip(2)->take(3)->get()]);
        // return view('messages', ['data' => $contact->where('subject', '!=', 'Тема сообщения непростая')->get()]);
        return view('messages', ['data' => $contact->all()]);
    }

    public function showOneMessage($id) {
        $contact = new Contact;
        return view('one-messages', ['data' => $contact->find($id)]);
    }

    public function updateMessage($id) {
        $contact = new Contact;
        return view('update-message', ['data' => $contact->find($id)]);
    }
}
