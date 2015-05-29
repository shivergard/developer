<?php namespace Shivergard\Developer\Console;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class HelloDev extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'dev:hello';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Just Trolling init function.';

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
	public function fire()
	{
		$this->error('¯\(°_o)/¯');
		$this->info('Hello Developer');
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return [];
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return [];
	}

}
