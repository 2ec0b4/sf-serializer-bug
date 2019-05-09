<?php

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Serializer\Serializer;
use App\Model;
use Doctrine\Common\Annotations\AnnotationReader;
use Symfony\Component\Serializer\Mapping\Loader\AnnotationLoader;
use Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Encoder\JsonEncoder;

final class BugCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('bug')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $model = new Model();
        $model->name = 'hello';
        
        $container = $this->getContainer();
        $serializer = $container->get('serializer');

        $serializer->serialize($model, 'json');

        return 0;
    }
}
