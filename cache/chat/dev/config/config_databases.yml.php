<?php
// auto-generated by sfDatabaseConfigHandler
// date: 2014/10/01 18:04:46

return array(
'propel' => new sfPropelDatabase(array (
  'classname' => 'DebugPDO',
  'dsn' => 'mysql:dbname=ejabberd;host=127.0.0.1',
  'username' => 'root',
  'password' => '310389rimaS!',
  'encoding' => 'utf8',
  'persistent' => true,
  'pooling' => true,
  'debug' => 
  array (
    'realmemoryusage' => true,
    'details' => 
    array (
      'time' => 
      array (
        'enabled' => true,
      ),
      'slow' => 
      array (
        'enabled' => true,
        'threshold' => 0.10000000000000001,
      ),
      'mem' => 
      array (
        'enabled' => true,
      ),
      'mempeak' => 
      array (
        'enabled' => true,
      ),
      'memdelta' => 
      array (
        'enabled' => true,
      ),
    ),
  ),
  'name' => 'propel',
)),);
