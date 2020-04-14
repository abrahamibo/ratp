<?php

namespace App\Command;

use App\Service\Csv;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Serializer\Encoder\CsvEncoder;
use Symfony\Component\Serializer\Serializer;


class CsvImportDatabaseCommand extends Command
{
    protected static $defaultName = 'csv:Import-database';

    private $csv;

    public function __construct(Csv $csv)
    {
        $this->csv = $csv;

        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setDescription('Add a short description for your command')
            ->addArgument('arg1', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option1', null, InputOption::VALUE_NONE, 'Option description')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $arg1 = $input->getArgument('arg1');

        if ($arg1) {
            $io->note(sprintf('You passed an argument: %s', $arg1));
        }

        if ($input->getOption('option1')) {
            // ...
        }
        $finder = new Finder();
        // find all files in the current directory
        $finder->in('sqlData')->files()->name('exports-des-gares-idf.csv');
        //
        //        // check if there are any search results
        if ($finder->hasResults()) {
            foreach ($finder as $file) {
                $this->csv->ImportDatabase($file);
            }
        }
        //


        $io->success('import csv in database success');

        return 0;
    }
}
