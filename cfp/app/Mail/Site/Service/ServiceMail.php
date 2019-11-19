<?php

namespace AgenciaS3\Mail\Site\Service;

use Illuminate\Mail\Mailable;

class ServiceMail extends Mailable
{
    public $contact;

    public function __construct(\AgenciaS3\Entities\ServiceContact $contact)
    {
        $this->contact = $contact;
    }

    public function build()
    {
        return $this->subject('Novo contato por Áreas de expertise recebido pelo site')
            ->with(['data' => $this->contact])
            ->view('vendor.emails.site.service.admin');
    }

}
