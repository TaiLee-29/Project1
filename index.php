<?php
class RGBcolor
{
    private $red;
    private $blue;
    private $green;

    public function __construct($red,$green,$blue)
    {
        $this->setRed($red);
        $this->setBlue($blue);
        $this->setGreen($green);
    }

    private function setRed($red)
    {
       if(!is_int($red)){
           throw new Exception('Invalid integer');
       }
       if($red>255 and $red<0){
           throw new Exception('Number must be in range 0->255');
       }
       $this->red=$red;
    }
    private function setBlue($blue)
    {
        if(!is_int($blue)){
            throw new Exception('Invalid integer');
        }
        if($blue>255 and $blue<0){
            throw new Exception('Number must be in range 0->255');
       }
        $this->blue=$blue;
    }
    private function setGreen($green)
    {
        if(!is_int($green)){
            throw new Exception('Invalid integer');
        }
        if($green>255 and $green<0){
            throw new Exception('Number must be in range 0->255');
       }
        $this->green=$green;
    }
    public function getRed(){
        return $this->red;
    }
    public function getBlue(){
        return $this->blue;
    }
    public function getGreen(){
        return $this->green;
    }
    public function equal(RGBcolor $color){
        if($this->red != $color->red){

            return false;
        }
        if($this->blue != $color->blue){

            return false;
        }
        if($this->green != $color->green){
            echo 'Colors are not equal by green color';
            return false;
        }

        return true;
    }
    public static function randomColor(){
        return new RGBcolor(rand(0,255),rand(0,255),rand(0,255));
    }
    public function mixColor(RGBcolor $color ){




        return new  RGBcolor((int)($this->red +$color->red)/2,(int)($this->green +$color->green)/2,(int)($this->blue +$color->blue)/2);
    }
}

$x= new RGBcolor(13,165,213);
var_dump(RGBcolor::randomColor());
var_dump($x);
$color = new RGBcolor(200, 200, 200);
$mixedColor = $color->mixColor(new RGBcolor(100, 100, 100));
$mixedColor->getRed(); // 150
$mixedColor->getGreen(); // 150
$mixedColor->getBlue(); // 150

var_dump($mixedColor);

$bgColor = RGBcolor::randomColor();
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Тег CODE</title>
</head>
<body bgcolor='<?php echo $bgColor->getRed().",".  $bgColor->getGreen().",". $bgColor->getBlue(); ?>'>

</body>
</html>
