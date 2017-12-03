<?php

namespace App;

use Symfony\Component\Serializer\Annotation\Groups;

final class Model
{
    /**
     * @Groups("group1")
     */
    public $name;
}
