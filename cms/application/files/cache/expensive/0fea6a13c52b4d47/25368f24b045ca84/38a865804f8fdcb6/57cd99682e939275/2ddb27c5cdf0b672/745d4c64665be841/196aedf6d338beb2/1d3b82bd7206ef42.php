<?php 
/* Cachekey: cache/stash_default/doctrine/[concrete\core\entity\attribute\set$keys][1]/ */
/* Type: array */
/* Expiration: 2022-12-10T17:43:29-05:00 */



$loaded = true;
$expiration = 1670712209;

$data = array();

/* Child Type: array */
$data['return'] = array (
  0 => 
  Doctrine\ORM\Mapping\OneToMany::__set_state(array(
     'mappedBy' => 'set',
     'targetEntity' => '\\Concrete\\Core\\Entity\\Attribute\\SetKey',
     'cascade' => 
    array (
      0 => 'all',
    ),
     'fetch' => 'LAZY',
     'orphanRemoval' => false,
     'indexBy' => NULL,
  )),
  1 => 
  Doctrine\ORM\Mapping\OrderBy::__set_state(array(
     'value' => 
    array (
      'asDisplayOrder' => 'ASC',
    ),
  )),
);

/* Child Type: integer */
$data['createdOn'] = 1670309661;
