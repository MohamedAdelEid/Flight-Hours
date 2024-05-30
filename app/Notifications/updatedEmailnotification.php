<?php

namespace App\Notifications;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class updatedEmailnotification extends Notification
{
    use Queueable;
    public $token ;


    /**
     * Create a new notification instance.
     */
    public function __construct($token)

    {
        $this->token =$token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
                    ->line('لقد تلقيت هذا البريد الإلكتروني لأننا تلقينا طلبًا لإعادة تعيين كلمة المرور لحسابك..')
                    ->action('تغيير كلمة المرور', url('/reset-password',$this->token))
                    ->line('ستنتهي صلاحية رابط إعادة تعيين كلمة المرور خلال 60 دقيقة')
                    ->line('إذا لم تطلب إعادة تعيين كلمة المرور، فلا يلزم اتخاذ أي إجراء آخر')
                    ->line('شركة الخطوط الجوية الليبية/ مكتب الإتصالات وتقنية الملعومات ' )
                    ->line(' للمساعدة يمكنك التواصل عبر رقم الهاتف   ' );
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
