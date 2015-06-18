<?php
$appDisc = "FuelWatch";
$title_for_layout;
?>
<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php echo $appDisc.":".$title_for_layout?></title>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,700' rel='stylesheet' type='text/css'>
        <?php
		    echo $this->Html->meta('icon');
		    echo $this->Html->css('foundation.min.css');
        echo $this->Html->css('normalize.min.css');
        echo $this->Html->css('style.css');
        echo $this->Html->script('modernizr');

		    echo $this->fetch('meta');
		    echo $this->fetch('css');
		    echo $this->fetch('script');
				
	    ?>
	</head>
	<body>
        <div class="contain-to-grid sticky">
          <nav class="top-bar" data-topbar role="navigation" data-options="sticky_on: large">
            <ul class="title-area">
                <li class="name">
                  <h1><?php echo $this->Html->link('FuelWatch',
array('controller' => 'home', 'action' => 'index')); ?></h1>
                </li>
                 <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
                <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
              </ul>

              <section class="top-bar-section">
                <!-- Right Nav Section -->
                <ul class="right">
                  <li class="active"><?php echo $this->Html->link('About',
array('controller' => 'Home', 'action' => 'about')); ?></li>
                  <li class="has-dropdown">
                    <?php echo $this->Html->link('Fuel',
array('controller' => 'fuel', 'action' => 'index')); ?>
                    <ul class="dropdown">
                      <li><a href="#">First link in dropdown</a></li>
                      <li class="active"><a href="#">Active link in dropdown</a></li>
                    </ul>
                  </li>
                </ul>
              </section>
          </nav>
        </div>
        	<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
        <?php
            echo $this->Html->script('jquery.min');
            echo $this->Html->script('foundation.min');
        ?>
        <script>
        $(document).foundation();
        </script>

	</body>
</html>
