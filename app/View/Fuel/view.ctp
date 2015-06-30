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
          echo "<td><a href=\"#\" data-show-map=\"mapsModal\" data-lat=\"{$reg->latitude}\" data-long=\"{$reg->longitude}\" data-name=\"{$reg->name}\" data-price=\"{$reg->price}\">".$reg->address."</a></td>";
          echo "<td>$".number_format(floatval($reg->price),2,".",",")."</td>";
        }
          echo "</tr>";
        ?>
      </tbody>
    </table>
  </div>
</div>
<div id="mapsModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <h2 id="modalTitle"></h2>
  <div id="modalFrame" style="height:300px;"></div>
  
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>
<script type="text/javascript">
var lat = -34.397;
var long = 150.644;
var content= "";


$("a[data-show-map]").on("click", function () {

    content = [$(this).attr("data-name"),"price: $"+$(this).attr("data-price")].join('<br>');
    lat = $(this).attr("data-lat");
    long = $(this).attr("data-long");
$("#modalTitle").html( "Directions to "+ $(this).attr("data-name"));
$("#modalFrame").html("<iframe width=\"100%\" height=\"300\" frameborder=\"0\" scrolling=\"no\" marginheight=\"0\" marginwidth=\"0\" src=\"http://dev.virtualearth.net/embeddedMap/v1/ajax/Road?zoomLevel=14&center="+$(this).attr("data-lat")+"_"+$(this).attr("data-long")+"&pushpins="+$(this).attr("data-lat")+"_"+$(this).attr("data-long")+"&culture=en-CA\"/>");
$('#mapsModal').foundation('reveal', 'open');
});
</script>
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
