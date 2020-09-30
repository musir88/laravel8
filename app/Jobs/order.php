<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use Exception;

class order implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    protected $data; // 任务数据
    public $timeout = 2; // 2秒超时
    public $tries = 2; // 最大尝试次数

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * 处理队列任务
     *
     * @return void
     */
    public function handle()
    {
        
    }


    /**
     * 队列任务失败回调
     *
     * @return void
     */
    public function failed(Exception $exception)
    {

    }
}
