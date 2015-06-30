<?php echo $this->element('forms'); ?>
<section class="header">
<div class="row">
    <div class="large-12 columns">
    <h1>Fuel Watch</h1>
    </div>
</div>
</section>
<?php echo $this->fetch('search_form'); ?>
<section class="prices">
    <div class="row">
        <div class="columns large-12">
        <h2 class="text-center page-header">Metro ULP Prices for today</h2>
            <div class="columns large-4">
               <ul class="pricing-table">
                  <li class="title">North of River</li>
                  <li class="price">$<?php echo number_format(floatval($servos[0][0]->price),2,".",",");?></li>
                  <li class="description">cheapest today at <br/><?php echo $servos[0][0]->name;?></li>
                  <li class="bullet-item"><?php echo $servos[0][1]->name."<br/><span class='small'>$".number_format(floatval($servos[0][1]->price),2,".",",")."</span>";?></li>
                  <li class="bullet-item"><?php echo $servos[0][2]->name."<br/><span class='small'>$".number_format(floatval($servos[0][2]->price),2,".",",")."</span>";?></li>
                  <li class="bullet-item"><?php echo $servos[0][3]->name."<br/><span class='small'>$".number_format(floatval($servos[0][3]->price),2,".",",")."</span>";?></li>
                  <li class="cta-button"><a class="button" href="/fuel/region/northofriver">View All</a></li>
                </ul>
            </div>
            <div class="columns large-4">
               <ul class="pricing-table">
                  <li class="title">South of River</li>
                  <li class="price">$<?php echo number_format(floatval($servos[1][0]->price),2,".",",");?></li>
                  <li class="description">cheapest today at <br/><?php echo $servos[1][0]->name;?></li>
                  <li class="bullet-item"><?php echo $servos[1][1]->name."<br/><span class='small'>$".number_format(floatval($servos[1][1]->price),2,".",",")."</span>";?></li>
                  <li class="bullet-item"><?php echo $servos[1][2]->name."<br/><span class='small'>$".number_format(floatval($servos[1][2]->price),2,".",",")."</span>";?></li>
                  <li class="bullet-item"><?php echo $servos[1][3]->name."<br/><span class='small'>$".number_format(floatval($servos[1][3]->price),2,".",",")."</span>";?></li>
                  <li class="cta-button"><a class="button" href="/fuel/region/southofriver">View All</a></li>
                </ul>
            </div>
            <div class="columns large-4">
               <ul class="pricing-table">
                  <li class="title">East/Hills</li>
                  <li class="price">$<?php echo number_format(floatval($servos[2][0]->price),2,".",",");?></li>
                  <li class="description">cheapest today at <br/><?php echo $servos[2][0]->name;?></li>
                  <li class="bullet-item"><?php echo $servos[2][1]->name."<br/><span class='small'>$".number_format(floatval($servos[2][1]->price),2,".",",")."</span>";?></li>
                  <li class="bullet-item"><?php echo $servos[2][2]->name."<br/><span class='small'>$".number_format(floatval($servos[2][2]->price),2,".",",")."</span>";?></li>
                  <li class="bullet-item"><?php echo $servos[2][3]->name."<br/><span class='small'>$".number_format(floatval($servos[2][3]->price),2,".",",")."</span>";?></li>
                  <li class="cta-button"><a class="button" href="/fuel/region/perthhills">View All</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php
    $today = new DateTime(null, new DateTimeZone('Australia/Perth'));
    $tomorrow = new DateTime(null, new DateTimeZone('Australia/Perth'));
    $tomorrow->setTime(14,30,00);
    $availability = true;

    if($today < $tomorrow){
        $availability = false;
        for($i=3; $i<6;$i++){
            for($j=0;$j<4;$j++){
                $servos[$i][$j]->name = "Not Available";
                $servos[$i][$j]->price = "0.00";
            }
        }
    }
?>
<section class="prices">
    <div class="row">
        <div class="columns large-12">
        <h2 class="text-center page-header">Metro ULP Prices for tomorrow</h2>
            <?php echo($availability)?"":"<br/><h3>Tomorrow Prices available after 2:30pm</h3>";?>
            <div class="columns large-4">
               <ul class="pricing-table">
                  <li class="title">North of River</li>
                  <li class="price">$<?php echo number_format(floatval($servos[3][0]->price),2,".",",");?></li>
                  <li class="description">cheapest today at <br/><?php echo $servos[3][0]->name;?></li>
                  <li class="bullet-item"><?php echo $servos[3][1]->name."<br/><span class='small'>$".number_format(floatval($servos[3][1]->price),2,".",",")."</span>";?></li>
                  <li class="bullet-item"><?php echo $servos[3][2]->name."<br/><span class='small'>$".number_format(floatval($servos[3][2]->price),2,".",",")."</span>";?></li>
                  <li class="bullet-item"><?php echo $servos[3][3]->name."<br/><span class='small'>$".number_format(floatval($servos[3][3]->price),2,".",",")."</span>";?></li>
                  <li class="cta-button"><a class="button" <?php echo ($availability)?"href=\"/fuel/region/northofriver/tomorrow\"":"#";?> >View All</a></li>
                </ul>
            </div>
            <div class="columns large-4">
               <ul class="pricing-table">
                  <li class="title">South of River</li>
                  <li class="price">$<?php echo number_format(floatval($servos[4][0]->price),2,".",",");?></li>
                  <li class="description">cheapest today at <br/><?php echo $servos[4][0]->name;?></li>
                  <li class="bullet-item"><?php echo $servos[4][1]->name."<br/><span class='small'>$".number_format(floatval($servos[4][1]->price),2,".",",")."</span>";?></li>
                  <li class="bullet-item"><?php echo $servos[4][2]->name."<br/><span class='small'>$".number_format(floatval($servos[4][2]->price),2,".",",")."</span>";?></li>
                  <li class="bullet-item"><?php echo $servos[4][3]->name."<br/><span class='small'>$".number_format(floatval($servos[4][3]->price),2,".",",")."</span>";?></li>
                  <li class="cta-button"><a class="button"  <?php echo ($availability)?"href=\"/fuel/region/southofriver/tomorrow\"":"#";?>>View All</a></li>
                </ul>
            </div>
            <div class="columns large-4">
               <ul class="pricing-table">
                  <li class="title">East/Hills</li>
                  <li class="price">$<?php echo number_format(floatval($servos[5][0]->price),2,".",",");?></li>
                  <li class="description">cheapest today at <br/><?php echo $servos[5][0]->name;?></li>
                  <li class="bullet-item"><?php echo $servos[5][1]->name."<br/><span class='small'>$".number_format(floatval($servos[5][1]->price),2,".",",")."</span>";?></li>
                  <li class="bullet-item"><?php echo $servos[5][2]->name."<br/><span class='small'>$".number_format(floatval($servos[5][2]->price),2,".",",")."</span>";?></li>
                  <li class="bullet-item"><?php echo $servos[5][3]->name."<br/><span class='small'>$".number_format(floatval($servos[5][3]->price),2,".",",")."</span>";?></li>
                  <li class="cta-button"><a class="button" <?php echo ($availability)?"href=\"/fuel/region/perthhills/tomorrow\"":"#";?>>View All</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
