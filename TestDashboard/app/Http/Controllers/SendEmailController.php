<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Image;
use Storage;

class SendEmailController extends Controller
{
    function index()
    {
        return view('send_email');
    }

    function send(Request $request)
    {
        $this->validate($request, [
            'name'      =>  'required',
            'email'     =>  'required',
            'message'   =>  'required',
            'subject'   =>  'required',
            'a_file'    => 'required|mimes:jpeg,png,jpg,gif,svg,txt,pdf,ppt,docx,doc,xls,xlsx,zip,rar'
            //condition
            ]);

            $data = array(
                'name'      =>  $request->name,
                'email'         => $request->email,
                'subject'       => $request->subject,
                'bodyMessage'   => $request->message,
                'a_file'        => $request->a_file,
            );

            // Mail::send(new SendMail(function ($message) use ($data){
            //     $message->to($data['email']);
            //     $message->attach($data['a_file']->getRealPath(), array(
            //         'as'     =>$data['a_file']->getClientOriginalName(),
            //         'mime'   =>$data['a_file']->getMimeType()
            //     ));
            // }));
           // echo($data['a_file']->getRealPath());
            Mail::send('dynamic_email_template', $data, function ($message) use ($data)
            {
               //echo($data['a_file']->getRealPath());
                $message->to($data['email']);
                $message->subject($data['subject']);
                $message->from('amsalsianipar1@gmail.com');
                // $message->attach('D:\campuspedia.zip', array(
                //     'as'     =>'campuspedia.zip',
                //     'mime'   =>'application/zip'
                // ));
                $message->attach($data['a_file']->getRealPath(), array(
                    'as'    =>$data['a_file']->getClientOriginalName(),
                    'mime'  =>$data['a_file']->getMimeType()
                ));
            });
            return back()->with('success', 'pesan terkirim..');
             
    }
}
