<?php
class RGBcolor
{
    private $Red;
    private $Blue;
    private $Green;

    public function __construct($Red,$Green,$Blue)
    {
        $this->setR($Red);
        $this->setB($Blue);
        $this->setG($Green);
    }

    private function setR($Red)
    {
       if(!is_int($Red)){
           throw new Exception('Invalid integer');
       }
       if($Red>255 and $Red<0){
           throw new Exception('Number must be in range 0->255');
       }
       $this->Red=$Red;
    }
    private function setB($Blue)
    {
        if(!is_int($Blue)){
            throw new Exception('Invalid integer');
        }
        if($Blue>255 and $Blue<0){
            throw new Exception('Number must be in range 0->255');
       }
        $this->Blue=$Blue;
    }
    private function setG($Green)
    {
        if(!is_int($Green)){
            throw new Exception('Invalid integer');
        }
        if($Green>255 and $Green<0){
            throw new Exception('Number must be in range 0->255');
       }
        $this->Green=$Green;
    }
    public function getR(){
        return $this->Red;
    }
    public function getB(){
        return $this->Blue;
    }
    public function getG(){
        return $this->Green;
    }
    public function equal(RGBcolor $color){
        if($this->Red != $color->Red){
            echo 'Colors are not equal by red color';
            return false;
        }
        if($this->Blue != $color->Blue){
            echo 'Colors are not equal by blue color';
            return false;
        }
        if($this->Green != $color->Green){
            echo 'Colors are not equal by green color';
            return false;
        }
        echo 'Colors are equal';
        return true;
    }
    public static function random_color(){
        return new RGBcolor(rand(0,255),rand(0,255),rand(0,255));
    }
    public function mix_color(RGBcolor $color ){




        return new RGBcolor(($this->Red +$color->Red)/2,($this->Green +$color->Green)/2,($this->Blue +$color->Blue)/2);
    }
}

$x= new RGBcolor(13,165,213);
var_dump(RGBcolor::random_color());
var_dump($x);
$color = new RGBcolor(200, 200, 200);
$mixedColor = $color->mix_color(new RGBcolor(100, 100, 100));
$mixedColor->getR(); // 150
$mixedColor->getG(); // 150
$mixedColor->getB(); // 150

var_dump($mixedColor);

?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Тег CODE</title>
</head>
<body bgcolor='<?php echo RGBcolor::random_color()->getR().",". RGBcolor::random_color()->getB().",". RGBcolor::random_color()->getG(); ?>'>

</body>
</html>
