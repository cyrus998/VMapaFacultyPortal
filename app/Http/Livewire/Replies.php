<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Replies extends Component
{
    public $replies, $email, $message, $reply_id;
    public $isOpen = 0;


    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        if ($this->isOnline()) {
            $mail_data = [
                'recipient'=> $request->email,
                'fromEmail' => $request->email,
                'fromName' => $request->name,
                'subject' => $request->subject,
                'body' => $request->message,
                'clientmessage' => $request->clientmessage,
            ];
            
            Mail::send('livewire.contacts.email-template',$mail_data, function($message) use ($mail_data){
                $message->to($mail_data['recipient'])
                ->from($mail_data['fromEmail'],$mail_data['fromName'])
                ->subject($mail_data['subject']);
            });

            return redirect()->back()->with('success', 'Email Sent');

        } else {
         return redirect()->back()->withInput()->with('error', 'Check your internet connection.');
        }
    }

    public function isOnline($site = "https://youtube.com")
    {
        if (@fopen($site, "r")) {
            return true;
        } else {
            return false;
        }
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        $this->replies = Contact::all()->sortByDesc('created_at');
        return view('livewire.contacts.replies');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openModal()
    {
        $this->isOpen = true;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function closeModal()
    {
        $this->isOpen = false;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields()
    {
        $this->email = '';
        $this->message = '';
        $this->reply_id = '';
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $this->validate([
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Contact::updateOrCreate(['id' => $this->reply_id], [
            'email' => $this->email,
            'message' => $this->message
        ]);

        session()->flash(
            'message',
            $this->reply_id ? 'Message Updated Successfully.' : 'Message Created Successfully.'
        );

        $this->closeModal();
        $this->resetInputFields();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        $this->reply_id = $id;
        $this->email = $contact->email;
        $this->message = $contact->message;

        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Contact::find($id)->delete();
        $this->dispatchBrowserEvent('contactReplied');
    }
}
