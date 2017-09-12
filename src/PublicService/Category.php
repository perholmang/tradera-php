<?php

namespace Holmang\Tradera\PublicService;

class Category
{
    public $Id;

    public $Name;

    public $Children = [];

    public function __construct($result)
    {
        $this->Id = $result->Id;
        $this->Name = $result->Name;

        if (isset($result->Category)) {
            foreach ($result->Category as $child) {
                if ($child->Id && $child->Name) {
                    $this->Children[] = new Category($child);
                }
            }
        }
    }


}