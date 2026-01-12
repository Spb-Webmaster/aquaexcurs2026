<?php

namespace App\Mail\Form;

use App\Models\Excursion;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ExcursionEmailMail extends Mailable
{
    use Queueable, SerializesModels;
    public array $formattedData;

    /**
     * Create a new message instance.
     *
     * @param array $data Исходные данные из формы
     */
    public function __construct(array $data)
    {
        $this->formattedData = $this->formatDataForView($data);
    }

    protected function formatDataForView(array $data): array
    {

        $model = Excursion::find($data['excursion_id']);
        $excursion = config('site.mail.tire'); // &mdash;
        if (!is_null($model)) {
            $excursion = $model->title;
        }
        return [
            config('site.mail.username') => $data['username'],
            config('site.mail.phone') => format_phone($data['phone']),
            config('site.mail.email') => $data['email'],
            config('site.mail.excursion') => $excursion,
            config('site.mail.quantity') => $data['quantity'],
            config('site.mail.excursion_date') => $data['excursion_date']
        ];
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Запрос на экскурсию'
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(view: 'html.email.excursion_email', with: ['data' => $this->formattedData]);

    }


    public function attachments(): array
    {
        return [];
    }
}
