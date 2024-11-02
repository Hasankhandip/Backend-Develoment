<?PHP
interface baseAnimal
{
    function isAlive();
    function canEat($param1, $param2);
    function breed();
}

class animal implements baseAnimal
{
    function isAlive() {}
    function canEat($param1, $param2) {}
    function breed() {}
}

interface baseHuman extends baseAnimal
{
    public function canTalk();
}

abstract class abstractHuman implements baseHuman
{
    abstract public function run();
    function eat()
    {
        echo "I am eating";
    }
}

class human extends abstractHuman
{
    function isAlive() {}
    function canEat($parm1, $parm2) {}
    function breed() {}
    function canTalk() {}
    function run() {}
}

$h = new human();
echo $h instanceof baseHuman;
echo PHP_EOL;
echo $h instanceof baseAnimal;
echo PHP_EOL;
$cat = new animal();
echo $cat instanceof human;
