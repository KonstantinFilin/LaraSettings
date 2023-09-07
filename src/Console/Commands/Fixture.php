<?php

namespace KonstantinFilin\LaraSettings\Console\Commands;

use Illuminate\Console\Command;

class Fixture extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'larasettings:fixture';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fixtures settings';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $sl = new \KonstantinFilin\LaraSettings\Models\SettingList();
        $sl->add(new \KonstantinFilin\LaraSettings\Models\SettingItem("max_records", 'Максимально записей', "19"));
        $sl->add(new \KonstantinFilin\LaraSettings\Models\SettingItem("default_host", "Хост по умолчанию", "127.0.0.1"));

        $fs = new \KonstantinFilin\LaraSettings\Services\FixtureService();
        $fs->run($sl);
        
        return Command::SUCCESS;
    }
}
