<?php

/**
 * PHP SCX Editor 3.0
 *
 * 27/11/2017
 *
 * Created by Yvan and Azzzru.
 *
 * This file contains the entire API for scenario models.
 */

/**
 *
 */
interface Scenario
{
	/**
	 * @return string
	 */
	public function getSignature();

	/**
	 * @param string $signature
	 */
	public function setSignature(string $signature);

	/**
	 * @return int
	 */
	public function getSavable();

	/**
	 * @param int $savable
	 */
	public function setSavable(int $savable);

	/**
	 * @return int
	 */
	public function getTimeStamp();

	/**
	 * @param int $timeStamp
	 */
	public function setTimeStamp(int $timeStamp);

	/**
	 * @return int
	 */
	public function getDlcOptions();

	/**
	 * @param int $dlcOptions
	 */
	public function setDlcOptions(int $dlcOptions);

	/**
	 * @return string
	 */
	public function getDescription();

	/**
	 * @param string $text
	 */
	public function setDescription(string $text);

	/**
	 * @return int
	 */
	public function getIndividualizedVictory();

	/**
	 * @param int $num
	 */
	public function setIndividualizedVictory(int $num);

	/**
	 * @return int
	 */
	public function getTotalActivePlayers();

	/**
	 * @param int $totalActivePlayers
	 */
	public function setTotalActivePlayers(int $totalActivePlayers);

	/**
	 * @return int
	 */
	public function getNextSpawnId();

	/**
	 * @param int $spawnId
	 */
	public function setNextSpawnId(int $spawnId);

	/**
	 * @return float
	 */
	public function getVersion();

	/**
	 * @param float $version
	 */
	public function setVersion(float $version);

	/**
	 * @return int
	 */
	public function getConquest();

	/**
	 * @param int $conquest
	 */
	public function setConquest(int $conquest);

	/**
	 * @return TimeLine
	 */
	public function getTimeLine(): TimeLine;

	/**
	 * @return string
	 */
	public function getOriginalFileName();

	/**
	 * @param string $fileName
	 */
	public function setOriginalFileName(string $fileName);

	/**
	 *
	 */
	const PLAYERS_MAX = 9;

	/**
	 * @param int $playerId
	 * @return Player
	 */
	public function getPlayer(int $playerId): Player;

	/**
	 * @return Map
	 */
	public function getMap(): Map;

	/**
	 * @return Triggers
	 */
	public function getTriggers(): Triggers;
}

/**
 *
 */
interface TimeLine
{
	/**
	 * @return int
	 */
	public function getAvailableId();

	/**
	 * @param int $availableId
	 */
	public function setAvailableId(int $availableId = 0);

	/**
	 * @return float
	 */
	public function getOldTime();

	/**
	 * @param float $oldTime
	 */
	public function setOldTime(float $oldTime = -1.0);

	/**
	 *
	 */
	const ENTRY_TYPE_ATTACK = 0;

	/**
	 *
	 */
	const ENTRY_TYPE_CREATE = 1;

	/**
	 *
	 */
	const ENTRY_TYPE_MOVE = 2;

	/**
	 *
	 */
	const ENTRY_TYPE_DELETE = 4;

	/**
	 * @return int
	 */
	public function numEntries();

	/**
	 * @param int $entryId
	 * @return TimeEntry
	 */
	public function getEntry(int $entryId): TimeEntry;

	/**
	 * @param int $entryId
	 * @param TimeEntry|null $entry
	 */
	public function setEntry(int $entryId, TimeEntry $entry = NULL);

	/**
	 * @return TimeEntry
	 */
	public function newEntry(): TimeEntry;
}

/**
 *
 */
interface TimeEntry
{
	/**
	 * @return float
	 */
	public function getTime();

	/**
	 * @param float $time
	 */
	public function setTime(float $time);
}

/**
 *
 */
interface Picture
{

}

/**
 *
 */
interface Map
{
	/**
	 * @return Scenario
	 */
	public function getScenario(): Scenario;
}

/**
 *
 */
interface MapTile
{
	/**
	 * @return int
	 */
	public function getTerrainId();

	/**
	 * @param int $terrainId
	 */
	public function setTerrainId(int $terrainId);

	/**
	 * @return int
	 */
	public function getOverlayId();

	/**
	 * @param int $overlayId
	 */
	public function setOverlayId(int $overlayId);

	/**
	 * @return int
	 */
	public function getElevation();

	/**
	 * @param int $elevation
	 */
	public function setElevation(int $elevation);
}

/**
 *
 */
interface Player
{
	/**
	 * @return Scenario
	 */
	public function getScenario();

	/**
	 * @return int
	 */
	public function getType();

	/**
	 * @param int $type
	 */
	public function setType(int $type);

	/**
	 * @return int
	 */
	public function getCivilizationId();

	/**
	 * @param int $civilizationId
	 */
	public function setCivilizationId(int $civilizationId);

	/**
	 * @return string
	 */
	public function getName();

	/**
	 * @param string $name
	 */
	public function setName(string $name);

	/**
	 * @return int
	 */
	public function getFood();

	/**
	 * @param int $food
	 */
	public function setFood(int $food);

	/**
	 * @return int
	 */
	public function getWood();

	/**
	 * @param int $wood
	 */
	public function setWood(int $wood);

	/**
	 * @return int
	 */
	public function getGold();

	/**
	 * @param int $gold
	 */
	public function setGold(int $gold);

	/**
	 * @return int
	 */
	public function getStone();

	/**
	 * @param int $stone
	 */
	public function setStone(int $stone);

	/**
	 * @return int
	 */
	public function getIron();

	/**
	 * @param int $iron
	 */
	public function setIron(int $iron);

	/**
	 * @return int
	 */
	public function getGoods();

	/**
	 * @param int $goods
	 */
	public function setGoods(int $goods);

	/**
	 * @return int
	 */
	public function getPopulation();

	/**
	 * @param int $population
	 */
	public function setPopulation(int $population);
}

/**
 *
 */
interface Triggers
{
	/**
	 * @return Scenario
	 */
	public function getScenario(): Scenario;

	/**
	 * @return double
	 */
	public function getVersion(): double;

	/**
	 * @param float $version
	 */
	public function setVersion(double $version);

	/**
	 * @return bool
	 */
	public function isBlankNamesWritten(): bool;

	/**
	 * @param bool $blankNamesWritten
	 */
	public function setBlankNamesWritten(bool $blankNamesWritten);

	/**
	 * @return int
	 */
	public function getObjectivesStart();

	/**
	 * @param int $objectivesStart
	 */
	public function setObjectivesStart(int $objectivesStart = 0);

	/**
	 * @return int
	 */
	public function numTriggers();

	/**
	 * @param int $triggerId
	 * @return Trigger
	 */
	public function getTrigger(int $triggerId);

	/**
	 * @param string $triggerName
	 * @return Trigger|null
	 */
	public function getTriggerByName(string $triggerName);

	/**
	 * @param int $triggerId
	 * @param Trigger $trigger
	 */
	public function setTrigger(int $triggerId, Trigger $trigger = NULL);

	/**
	 * @param string|null $name
	 * @param int|null $state
	 * @return Trigger
	 */
	public function newTrigger(string $name = NULL, int $state = NULL);
}

/**
 *
 */
interface Trigger
{
	/**
	 * @return string
	 */
	public function getName();

	/**
	 * @param string $triggerName
	 */
	public function setName(string $triggerName);

	/**
	 *
	 */
	const STATE_DORMANT = 0;

	/**
	 *
	 */
	const STATE_ENABLED = 1;

	/**
	 *
	 */
	const STATE_RUNNING = 2;

	/**
	 *
	 */
	const STATE_EXPIRED = 3;

	/**
	 * @return int
	 */
	public function getState();

	/**
	 * @param int $state
	 */
	public function setState(int $state);

	/**
	 * @return int
	 */
	public function numEffects();

	/**
	 * @param int $entryId
	 * @return TriggerEffect
	 */
	public function getEffect(int $entryId);

	/**
	 * @param int $entryId
	 * @param TriggerEffect|null $effect
	 */
	public function setEffect(int $entryId, TriggerEffect $effect = NULL);

	/**
	 * @return TriggerEffect
	 */
	public function newEffect();

	/**
	 * @return int
	 */
	public function numConditions();

	/**
	 * @param int $entryId
	 * @return TriggerCondition
	 */
	public function getCondition(int $entryId);

	/**
	 * @param int $entryId
	 * @param TriggerCondition|null $condition
	 */
	public function setCondition(int $entryId, TriggerCondition $condition = NULL);

	/**
	 * @return TriggerCondition
	 */
	public function newCondition();
}

/**
 *
 */
interface TriggerEntry
{
	/**
	 * @return int
	 */
	public function getType();

	/**
	 * @param int $type
	 */
	public function setType(int $type);
}

/**
 *
 */
interface TriggerEffect extends TriggerEntry
{
	/**
	 * @return string
	 */
	public function getText();

	/**
	 * @param string $text
	 */
	public function setText(string $text);

	/**
	 * @return string
	 */
	public function getSound();

	/**
	 * @param string $sound
	 */
	public function setSound(string $sound);

	/**
	 * @return int
	 */
	public function numSpawnIds();

	/**
	 * @param int $spawnIdsOffset
	 * @return int
	 */
	public function getSpawnId(int $spawnIdsOffset);

	/**
	 * @param int|null $spawnIdsOffset
	 * @param int|null $spawnId
	 */
	public function setSpawnId(int $spawnIdsOffset = NULL, int $spawnId = NULL);
}

/**
 *
 */
interface TriggerCondition extends TriggerEntry
{

}
