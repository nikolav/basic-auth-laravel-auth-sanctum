<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Blade;

class RenderView extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'render:all';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'renders blade views to filesystem';

    //
    protected $path;
    protected $files;

    function __construct()
    {
        parent::__construct();

        $this->path = env("DIST_PATH");
        $this->files = [
            [
                "template" => "page",
                "file"     => $this->path . "index.html",
            ],
        ];
    }
    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //
        // export * @storage/app/html

        $this->comment("rendering templates:");
        //
        $bytes = 0;
        foreach ($this->files as $node) {
            //
            $this->line(sprintf(
                "%s => %s",
                $node["template"],
                $node["file"],
            ));
            //
            $bytes += File::put(
                $node["file"],
                Blade::render($node["template"])
            );
        }

        $this->info(sprintf("done\n[%d] bytes written",  $bytes));

        //
        return 0;
    }
}
