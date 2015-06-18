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
