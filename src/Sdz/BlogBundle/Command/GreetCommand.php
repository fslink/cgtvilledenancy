<?php
namespace Sdz\BlogBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class GreetCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('demo:greet')
            ->setDescription('Saluez quelqu\'un')
            ->addArgument(
                'name',
                InputArgument::OPTIONAL,
                'Qui voulez-vous saluez?'
            )
            ->addOption(
               'yell',
               null,
               InputOption::VALUE_NONE,
               'Si défini, la réponse est affichée en majuscules'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $antispam = $this->getContainer()->get('sdz_blog.crawler');

        $name = $input->getArgument('name');
        if ($name) {
            $text = 'Salut, '.$name;
        } else {
            $text = 'Salut';
        }

        if ($input->getOption('yell')) {
            $text = strtoupper($text);
        }

        $output->writeln($text);
    }
}