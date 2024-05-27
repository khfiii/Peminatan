<?php

namespace App\Mail;

use App\Models\Jawaban;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Contracts\Queue\ShouldQueue;

class SayThank extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     * 
     */

    public Jawaban $jawaban; 


    public function __construct(Jawaban $jawaban)
    {
        $this->jawaban = $jawaban; 
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from:new Address('khfii635@gmail.com', 'Ashabul Kahfi'), 
            subject: 'Hasil Test Peminatan',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.thank',
            with: [
                'nilai' => $this->jawaban->nilai_peserta, 
                'peserta' => $this->jawaban->peserta->nama_peserta
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
