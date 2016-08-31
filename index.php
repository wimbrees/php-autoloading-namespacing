<?php 

// Install composer
// Create composer.json file
// $ composer dump-autoload

require 'vendor/autoload.php';

use MyProjectName\Users\Person;
use MyProjectName\Staff;
use MyProjectName\Business;

$jeffrey = new Person('Jeffrey');

$staff = new Staff([$jeffrey]);

$laracasts = new Business($staff);

$laracasts->hire(new Person('Jane Doe'));

var_dump($laracasts->getStaffMembers());

?>