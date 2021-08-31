<?php

namespace My\Eco\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Eco extends Command {
  const NAME_ARGUMENT = "csv_name";

  /**
   * {@inheritdoc}
   */
  protected function execute(
    InputInterface $input,
    OutputInterface $output
  ) {
    $name = $input->getArgument(self::NAME_ARGUMENT);
    $output->writeln("Eco test " . $name);
  }

  /**
   * {@inheritdoc}
   */
  protected function configure()
  {
    $this->setName("eco:eco");
    $this->setDescription("Test Eco");
    $this->setDefinition([
      new InputArgument(self::NAME_ARGUMENT, InputArgument::OPTIONAL, "Csv Name")
    ]);
    parent::configure();
  }
}