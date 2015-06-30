<?php
    class FuelController extends AppController{

        public function index(){
            $data="";
            $this->loadModel('Fuel');
            $this->loadModel('Region');
            $S= new Region();
            if ($this->request->is('post')) {
                $data=$this->request->data;
                $xml = Fuel::fetchXml(array("product"=>$data['Fuel']['product'],"Suburb"=>$data['Fuel']['suburb'],"Day"=>"today"));
                $data = $S->fetchServos($xml,$data['Fuel']['product']);
            }else{
                $data ="not post";
            }
            $this->set("data",$data);
            $this->render('view');
        }
        public function suburb($suburb,$product=NULL){
            if(!isset($product)){
                $product = 1;
            }
            $products = array('ulp'=>1,'pulp'=>2,'diesel'=>4,'lpg'=>5,'98ron'=>6,'B20'=>7,"e10"=>8,"p100"=>9,"e85"=>10);
            $data="";
            $this->loadModel('Fuel');
            $this->loadModel('Region');
            $S= new Region();
            if(isset ($products[$product])){
                $xml = Fuel::fetchXml(array("Product"=>$products[$product],"Suburb"=>$suburb,"Day"=>"today"));
                $data = $S->fetchServos($xml,$products[$product]);
            }else{
                $xml = Fuel::fetchXml(array("Product"=>$product,"Suburb"=>$suburb,"Day"=>"today"));
                $data = $S->fetchServos($xml,$product);
            }

            $this->set("data",$data);
            $this->render('view');
        }

        public function region($region,$product=NULL,$day=NULL){
             if(!isset($product)){
                $product = 1;
            }
            if(!isset($day)){
               $day="today"; 
            }
            $products = array('ulp'=>1,'pulp'=>2,'diesel'=>4,'lpg'=>5,'98ron'=>6,'B20'=>7,"e10"=>8,"p100"=>9,"e85"=>10);
            $regions = array('northofriver'=>25,'southofriver'=>26,'perthhills'=>27);
            $data="";
            $this->loadModel('Fuel');
            $this->loadModel('Region');
            $S= new Region();
            if (isset($regions[$region])) {
                if(isset ($products[$product])){
                    $xml = Fuel::fetchXml(array("Product"=>$products[$product],"Region"=>$regions[$region],"Day"=>$day));
                    $data = $S->fetchServos($xml,$products[$product]);
                }else{
                    $xml = Fuel::fetchXml(array("Product"=>$product,"Region"=>$regions[$region],"Day"=>$day));
                    $data = $S->fetchServos($xml,1);
                }
            }

            $this->set("data",$data);
            $this->render('view');
        }

    }

?>
