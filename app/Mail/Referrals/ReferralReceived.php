<?php

namespace App\Mail\Referrals;

use App\Models\Referral;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReferralReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $sender;
    public $referral;
    private $markdownFile = 'emails.referrals.received';

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $sender, Referral $referral, $dropper = false)
    {
        $this->sender = $sender;
        $this->referral = $referral;

        if($dropper){
            $this->markdownFile = 'emails.referrals.received-dropper';
        }
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject($this->sender->name . ' has invited you.')
            ->markdown($this->markdownFile);
    }
}
