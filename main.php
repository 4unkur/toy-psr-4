<?php 

use App\Staff;
use App\Users\Person;
use App\Business;

$staff = new Staff([(new Person('Jeffrey Way'))]);
$laracasts = new Business($staff);
$laracasts->hire((new Person('Jane Doe')));

var_dump($laracasts->staff());