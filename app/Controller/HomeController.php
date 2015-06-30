<?php
class HomeController extends AppController{
    public $helpers = array('Html','Form');

    public function index(){
        $this->loadModel('Region');
        $this->loadModel('Fuel');
        $Regions = array();
        $NOR = new Region();
        $SOR = new Region();
        $Hills = new Region();
        $Regions[] = $NOR->fetchServos(Fuel::fetchXml(array("product"=>1,"Region"=>"25","Day"=>"today")));
        $Regions[] = $SOR->fetchServos(Fuel::fetchXml(array("product"=>1,"Region"=>"26","Day"=>"today")));
        $Regions[] = $Hills->fetchServos(Fuel::fetchXml(array("product"=>1,"Region"=>"27","Day"=>"today")));
        $Regions[] = $NOR->fetchServos(Fuel::fetchXml(array("product"=>1,"Region"=>"25","Day"=>"tomorrow ")));
        $Regions[] = $SOR->fetchServos(Fuel::fetchXml(array("product"=>1,"Region"=>"26","Day"=>"tomorrow ")));
        $Regions[] = $Hills->fetchServos(Fuel::fetchXml(array("product"=>1,"Region"=>"27","Day"=>"tomorrow ")));

        $this->set('servos',$Regions);
    }

    public function about(){
        
    }
    public function locations(){
        
    }


    public function display() {
		$path = func_get_args();

		$count = count($path);
		if (!$count) {
			return $this->redirect('/');
		}
		$page = $subpage = $title_for_layout = null;

		if (!empty($path[0])) {
			$page = $path[0];
		}
		if (!empty($path[1])) {
			$subpage = $path[1];
		}
		if (!empty($path[$count - 1])) {
			$title_for_layout = Inflector::humanize($path[$count - 1]);
		}
		$this->set(compact('page', 'subpage', 'title_for_layout'));

		try {
			$this->render(implode('/', $path));
		} catch (MissingViewException $e) {
			if (Configure::read('debug')) {
				throw $e;
			}
			throw new NotFoundException();
		}
	}

}
?>