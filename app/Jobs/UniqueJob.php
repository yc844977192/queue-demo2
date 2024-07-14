<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class UniqueJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public $uniqueId;

    public function __construct($uniqueId)
    {
        $this->uniqueId = $uniqueId;
    }

    public function handle()
    {
        // 处理逻辑
        \Log::info("处理唯一任务: " . $this->uniqueId);
    }

}
