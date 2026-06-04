<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Settings\SettingModel;
use Illuminate\Http\Request;

class AgentMail extends Mailable
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
        // dd($request->all());
        $data = SettingModel::where('id',1)->first();
        $mail=$request->email;
        $name=$request->name;
        $contact=$request->phone;
        $post_code=$request->code;
        $designation = $request->designation;
        $message=$request->message;
        $company_url = $request->url;
        $company_name = $request->cname;
        $country = $request->country;
        $email = $data->email_primary;
        return $this->view('emails.admin_need_agent', ['mail' => $mail,'name'=>$name,'contact'=>$contact,'messages'=>$message,
        'post_code'=>$post_code,'designation'=>$designation,'company_url'=> $company_url, 'company_name'=> $company_name, 'country'=> $country])->subject('Agent Requirements:');
    }
}
