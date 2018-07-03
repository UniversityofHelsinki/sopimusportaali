<?php

/**
 * See documentation for examples.
 *
 * @link https://github.com/drush-ops/drush/blob/master/examples/example.aliases.drushrc.php
 */

$aliases['production'] = [
  'uri' => 'https://sopimusneuvonta.helsinki.fi',
  'root' => '/data/sopimusportaali/public',
  'remote-host' => 'sopimusneuvonta.helsinki.fi',
];

$aliases['testing'] = [
  'uri' => 'https://sopimusneuvonta-test.it.helsinki.fi',
  'root' => '/data/sopimusportaali/public',
  'remote-host' => 'sopimusneuvonta-test.it.helsinki.fi',
];
