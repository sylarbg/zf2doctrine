<?php
use Doctrine\Common\DataFixtures\Loader;
use Blog\Fixture\LoadUserData;

$loader = new Loader();
$loader->addFixture(new LoadUserData);

