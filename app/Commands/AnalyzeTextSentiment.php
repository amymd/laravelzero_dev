<?php

namespace App\Commands;

use Illuminate\Console\Scheduling\Schedule;
use LaravelZero\Framework\Commands\Command;

class AnalyzeTextSentiment extends Command
{
    /**
     * The signature of the command.
     *
     * @var string
     */
    protected $signature = 'analyze:sentiment {text : テキスト}';

    /**
     * The description of the command.
     *
     * @var string
     */
    protected $description = 'テキストの感情分析バッチ';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle(): void
    {
        //
    }

    /**
	 * Define the command's schedule.
	 *
	 * @param  \Illuminate\Console\Scheduling\Schedule $schedule
	 *
	 * @return void
	 */
	public function schedule(Schedule $schedule): void
	{
		// $schedule->command(static::class)->everyMinute();
	}
}
