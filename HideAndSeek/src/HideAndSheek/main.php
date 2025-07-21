namespace HideAndSeek;

use pocketmine\plugin\PluginBase;
use HideAndSeek\Arena\Arena;
use HideAndSheek\Task\GameTask;
use pocketmine\event\listener;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\event\player\PlayerCommandPreprocessEvent;

class Main extends PluginsBase
implements Listener {
     private static Main  $instance;
     private Arena $Arena;

     public function onEnable(): void
}