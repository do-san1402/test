<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;

class CreateUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create {name} {email} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create 1 user ';

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
        $name =  $this->argument('name');
        $password = $this->argument('password');
        $email = $this->argument('email');
        User::create([
            'name' => $name,
            'email' =>$email,
            'password' =>md5($password),
        ]);
        $this->info('Create user Successfully. Email:'. $email.' User:'.$name. ' Password:'.$password);
        

    }
}
