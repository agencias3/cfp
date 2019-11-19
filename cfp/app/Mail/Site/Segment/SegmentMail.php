<?php

namespace AgenciaS3\Mail\Site\Segment;

use Illuminate\Mail\Mailable;

class SegmentMail extends Mailable
{
    public $contact;

    public function __construct(\AgenciaS3\Entities\SegmentContact $contact)
    {
        $this->contact = $contact;
    }

    public function build()
    {
        return $this->subject('Novo contato recebido pelo site')
            ->with(['data' => $this->contact])
            ->view('vendor.emails.site.segment.admin');
    }

}
