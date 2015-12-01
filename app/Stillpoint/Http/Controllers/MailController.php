<?php

namespace Stillpoint\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mail;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request)
    {

        $form = $this->makeFormData($request->input('form'));

        $rec = "michele@officine06.com";
        $subject = "Richiesta di contatto";
        $to = "Stillpoint Admin";

        $data = [

            'form' => $form,
            'rec' => $rec,
            'subject' => $subject,
            'to' => $to

        ];


        Mail::send('emails.contact', ['data' => $data], function ($m) use ($data) {
            $m->from($data['form']['email'], 'LaGirouette Contact Form');

            $m->to($data['rec'], $data['to'])->subject($data['subject']);
        });
        
        // logger($data);

        return "true";

    }

    public function makeFormData($input)
    {
        $out = array();

        foreach ($input as $item) {
            $out[$item['name']] = $item['value'];
        }

        return $out;
    }

}
