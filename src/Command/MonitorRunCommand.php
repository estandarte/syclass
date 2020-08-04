<?php

namespace Syclass\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class MonitorRunCommand extends Command
{
    protected static $defaultName = 'monitor:run';
    private $monitor;
    /**
     * @param string|null $name The name of the command; passing null means it must be set in configure()
     * @param Syclass\Monitor\Monitor $monitor Ads Monitor
     *
     * @throws LogicException When the command name is empty
     */
    public function __construct(string $name = null, \Syclass\Monitor\Monitor $monitor)
    {
        parent::__construct($name);
        $this->monitor = $monitor;
    }
    protected function configure()
    {
        $this
            ->setDescription('Run the ads monitor')
            // ->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')
            // ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $io = new SymfonyStyle($input, $output);
        $this->monitor->execute();

        $io->success('Monitor execution finalized! Pass --help to see monitor options.');
    }
}
