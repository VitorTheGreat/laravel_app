<?php

namespace App\Console\Commands;

use App\Models\Company;
use Illuminate\Console\Command;

class AddCompanyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'contact:company {name} {phone?}'; //usingn ? inside the brackets, makes it opionql

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Adds a new Company';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $company = Company::create([
            'name' => $this->argument('name'),
            'phone' => $this->argument('phone') ?? 'N/A',
        ]);

        $this->info('Added: ' . $company->name);

        //printing text to the user terminal
        // $this->info('Info Message');
        // $this->warn('Warn Message');
        // $this->error('Error Message');
    }
}
