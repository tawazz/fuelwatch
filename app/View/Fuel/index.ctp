<?php
if(!is_array($data)){
    echo("something went wrong");
    echo $this->Html->link(
    'Go to home',
    '/',
    array(
        'class' => 'button'
    )
);
}else{
    echo "<h1> ".productString($data[0]->product)."</h1>";
    foreach($data as $reg){
            echo $reg->name ."----". $reg->price ."<br/>";
        echo "<br/><br/>";
    }
}
function productString($id){
    $name ="";
    switch($id){
        case 1 :
        $name ="ULP";
        break;
        case 2 :
        $name ="PULP";
        break;
        case 4 :
        $name ="Diesel";
        break;
        case 5 :
        $name ="LPG";
        break;
        case 6 :
        $name ="98 Ron";
        break;
        case 7 :
        $name ="B20";
        break;
        case 8 :
        $name ="E10";
        break;
        case 9 :
        $name ="P100";
        break;
        case 10 :
        $name ="E85";
        break;
    }

    return $name;
}
?>
