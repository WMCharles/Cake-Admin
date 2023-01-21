<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class College extends Entity
{
    protected $_accessible = [
        "name" => true,
        "description" => true,
        "short_name" => true,
        "cover_image" => true,
        "total_faculty" => true,
        "location" => true,
        "contact_number" => true,
        "status" => true
    ];
}
