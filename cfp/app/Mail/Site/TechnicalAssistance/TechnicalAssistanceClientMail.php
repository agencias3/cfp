<?php

namespace AgenciaS3\Mail\Site\TechnicalAssistance;

use AgenciaS3\Entities\TechnicalAssistance;
use Illuminate\Mail\Mailable;

class TechnicalAssistanceClientMail extends Mailable
{
    public $contact;

    public $form;

    public function __construct(TechnicalAssistance $contact, $form)
    {
        $this->contact = $contact;
        $this->form = $form;
    }

    public function build()
    {
        $subject = "Obrigado pelo contato";

        if (isset($this->form->subject)) {
            $subject = $this->form->subject;
        }

        if (isset($this->form->from)) {
            $email = $this->from(config('mail.from.address'), isset($this->form->from) ? $this->form->from : config('mail.from.name'));
        }

        if (isset($this->form->reply_to)) {
            $email = $this->replyTo($this->form->reply_to, $subject);
        }

        if (isset($this->form->file)) {
            $email = $this->attach(public_path('uploads/form/' . $this->form->file));
        }

        if (isset($this->form->subject)) {
            $description = $this->form->description;
        }

        $email = $this->subject($subject)
            ->with([
                'data' => $this->contact,
                'textEmail' => $description
            ])
            ->view('vendor.emails.site.technical-assistance.client');


        return $email;
    }

}
