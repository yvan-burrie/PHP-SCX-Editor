# PHP-SCX-Editor
Edit scenarios with PHP.

## Features
PSE can read and write scenarios for Genie Engine games.
You can create your scenarios from scratch with PHP sandboxing.

## Requirements
 * PHP 5.2.
 * or use our windows application.

## Example
```php
// the main function is evaluated automatically
function main(Scenario $scenario){

  $map = $scenario->getMap();
  
  $player = $scenario->getPlayer(PLAYER_ID_GAIA);
  
  // create a hawk on the middle of the map
  $myHawk = $player->newSpawn(
    MASTER_ID_HAWK,
    $map->getSizeX() / 2,
    $map->getSizeY() / 2);
  
  // set a unique ID to the hawk
  $myHawk->setIdentity($myHawkId = 9999);
  
  // get access to the triggers
  $triggers = $scenario->getTriggers();
  
  // make a new trigger
  $trigger = $triggers->newTrigger(
    TRIGGER_TYPE_DESTROY_OBJECT);
  
  $trigger->setSpawnId($myHawkId);
}
```
