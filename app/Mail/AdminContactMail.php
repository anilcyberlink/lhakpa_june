<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Settings\SettingModel;
use App\Models\Team\TeamModel;


class AdminContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {   
        $data = SettingModel::where('id',1)->first();
        $name=$request->full_name;
        $mail=$request->email;
        $country=$request->country;
        $contact=$request->number;
        $messages =$request->comments;
        $email = $data->email_primary;
        $find= TeamModel::where('id',$request->expert)->first();
        $cc_email=$request->expert ? $find->email : $email;
        return $this->view('emails.admin-contactmail', ['country'=>$country,'mail' => $mail,'name'=>$name,'contact'=>$contact,'messages'=>$messages ])
        ->subject('Contact Inquiry')
         ->cc($cc_email)
        ->to($email);
    }
}
