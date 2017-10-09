<?php
namespace Gun;
use pocketmine\Server;
use pocketmine\Player;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\entity\Entity;
use pocketmine\nbt\tag\CompoundTag;
use pocketmine\nbt\tag\DoubleTag;
use pocketmine\nbt\tag\ListTag;
use pocketmine\nbt\tag\FloatTag;
use pocketmine\event\player\PlayerUseFishingRodEvent;
use pocketmine\event\player\PlayerRespawnEvent;
use pocketmine\scheduler\PluginTask;
use pocketmine\item\Item;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\level\format\FullChunk;
use pocketmine\level\Position;
use pocketmine\level\Level;
use pocketmine\level\Explosion;
class Main extends PluginBase implements Listener{
	function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this,$this);
	}
	function onRe(PlayerRespawnEvent $event){
		$this->gun1[$event->getPlayer()->getName()] = 6;
	}
	function onTouch(PlayerInteractEvent $e){
		$p = $e->getPlayer();
		$name = $p->getName()
		$id = $block->getId();
      $item = $p->getInventory()->getItemInHand();
      $hid = $item->getID();
      if($hid == 270){
			$tama = $this->gun1[$name];
if($tama == 0){
$player->sendMessage("弾が0なのでリロードしてください");
$player->sendMessage("item id: ".$ri."で地面タップでリロード");
}else{
$nbt = new CompoundTag("", [
      "Pos" => new ListTag("Pos", [
       new DoubleTag("", $player->getX()+1),
       new DoubleTag("", $player->getY() + $player->getEyeHeight()+1),
       new DoubleTag("", $player->getZ())
        ]),
         "Motion" => new ListTag("Motion", [
          new DoubleTag("", -sin($player->yaw / 180 * M_PI) * cos($player->pitch / 180 * M_PI)*5),
          new DoubleTag("", -sin($player->pitch / 180 * M_PI)*5),
          new DoubleTag("", cos($player->yaw / 180 * M_PI) * cos($player->pitch / 180 * M_PI)*5)
       ]),
        "Rotation" => new ListTag("Rotation",[
         new DoubleTag("", \lcg_value() * 360),
         new DoubleTag("", 0)]),]);
$chunk = $player->getLevel()->getChunk($player->getX() >> 4, $player->getZ() >> 4);
$entity =  Entity::createEntity(82, $chunk, $nbt);
$entity->spawnToAll();
$player->sendPopup("発射");
--$tama;
$player->sendMessage("弾 : §a".$tama."/6");
	}
}
}
public function onHitting (ProjectileHitEvent $event){
		$entity = $event->getEntity();
		if ($entity instanceof Egg) {
		$sht = $entity->shootingEntity;
		$pos = $entity->getPosition();
		$x = $entity->getX();
		$y = $entity->getY();
		$z = $entity->getZ();
		$level = $entity->getLevel();
        $pk = new ExplodePacket();
        list($pk->x, $pk->y, $pk->z, $pk->radius, $pk->records) =
        [
            $x,
            $y,
            $z,
            1.5**10000000000000000000,
            [
                new Vector3($x, $y, $z)
            ]
        ];
}
}
}