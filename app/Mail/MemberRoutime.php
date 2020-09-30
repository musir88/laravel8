<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;



class MemberRoutime extends Mailable
{
    use Queueable, SerializesModels;

    public $subject; //邮件标题
    public $data;   //邮件数据

    /**
     * 初始化邮件类
     *
     * @return void
     */
    public function __construct($data=[])
    {
        if (isset($data["subject"])) {
            $this->subject = $data["subject"];
            unset($data["subject"]);
        }
        $this->data = $data;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('musir88@yeah.net')
                    ->view('member_routime.client_notice')
                    ->subject($this->subject);
    }
}
