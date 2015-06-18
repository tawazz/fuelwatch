<?php
    echo $this->element('forms');
    echo $this->fetch('search_form');
?>
<div class="row text-center">
  <div class="columns large-12">
    <?php echo "<h1> Cheapest <span stlye='text-transform:capitalize;'>".productString($data[0]->product)."</span> Prices near you.</h1>"; ?>
    <table style="margin:0px auto">
      <thead>
        <tr>
          <th>Name</th>
          <th>Brand</th>
          <th width="200">Address</th>
          <th>Price</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach($data as $reg){
          echo "<tr>";
          echo "<td>".$reg->name."</td>";
          echo "<td>".$reg->brand."</td>";
          echo "<td>".$reg->address."</td>";
          echo "<td>$".number_format(floatval($reg->price),2,".",",")."</td>";
        }
          echo "</tr>";
        ?>
      </tbody>
    </table>
  </div>
</div>
<?php
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
