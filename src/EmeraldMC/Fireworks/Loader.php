<?php

declare(strict_types = 1);

namespace EmeraldMC\Fireworks;

use EmeraldMC\Fireworks\item\Fireworks;
use EmeraldMC\Fireworks\entity\FireworksRocket;

use pocketmine\entity\Entity;
use pocketmine\item\Item;
use pocketmine\item\ItemFactory;
use pocketmine\plugin\PluginBase;

class Loader extends PluginBase {

	public function onEnable(): void {
		ItemFactory::registerItem(new Fireworks());
		Item::initCreativeItems(); //will load firework rockets from pocketmine's resources folder
		if(!Entity::registerEntity(FireworksRocket::class, false, ["FireworksRocket"])) {
			$this->getLogger()->error("Failed to register FireworksRocket entity with savename 'FireworksRocket'");
		}
	}
}
