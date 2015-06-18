<?php
class Region{
    public function fetchServos($xml, $product =NULL){
        App::import('model','Fuel');
        App::import('model','Servo');
        $xml=simplexml_load_string($xml) or die("Error: Cannot create object");
        $Servos = array();
        foreach($xml->children() as $SS){
            foreach($SS->item as $it){
                $servo = new Servo();
                $servo->setUp($it->{'trading-name'},$it->price,$it->address,$it->phone,$it->latitude,$it->longitude,$it->brand,$product);
                $Servos[]= $servo;
            }
        }
        return $Servos;
    }
}
/**
output all region data
<?php
    foreach($servos as $reg){
    foreach($reg as $serv){
        echo $serv->name ."----". $serv->price ."<br/>";

    }
    echo "<br/><br/>";
    }
?>
**/
?>
