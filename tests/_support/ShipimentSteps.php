<?php
class ShipimentSteps extends \AcceptanceTester{

public $total_packages , $my_origin_country, $my_origin_city , $my_destiny_country,$my_destiny_city;
/**
     * @Given i have shipiment in my shipiments
     */
     public function iHaveShipimentInMyShipiments(\Behat\Gherkin\Node\TableNode $shipiments)
    {
        App\Shipiment::truncate();
        // iterate over all rows
        foreach ($shipiments->getRows() as $index => $row) {
            if ($index === 0) { // first row to define fields
                $keys = $row;
                continue;
            }
            $this->haveRecord('shipiments', array_combine($keys, $row));
        }
     }

     /**
     * @Given my origin_country is :arg1 and origin_city is :arg1
     */
     public function myOrigin_countryIsAndOrigin_cityIs($arg1, $arg2)
     {
         $this->my_origin_country = $arg1;
         $this->my_origin_city = $arg2;
     }


    /**
     * @Given my destiny_country is :arg1 and destiny_city is :arg2
     */
     public function myDestiny_countryIsAndDestiny_cityIs($arg1, $arg2)
     {
         $this->my_destiny_country = $arg1;
         $this->my_destiny_city = $arg2;
     }


    /**
     * @When I call get get_packages
     */
     public function iCallGetGet_packages()
     {

        $fotos = array();
        $pais = array("brasil", "franca", "paraguai");
        $cidades=array("brasil", "franca", "paraguai");
        $local = array($pais[0],$cidades[0],$pais[1],$cidades[1]);
        $mula1 = new App\Classes\Mula;
        $mula1->set_origin($this->my_origin_country,$this->my_origin_city);
        $mula1->set_destination($pais[1],$cidades[1]);
        $mula1->set_travel(1);

        $this->total_packages = count($mula1->search_packages());
     }

    /**
     * @Then I should see that total number of packages is :num1
     */
     public function iShouldSeeThatTotalNumberOfPackagesIs($num1)
     {
        //$this->total_packages = $num1;
        if($this->total_packages == $num1){
            return true;
        }else{
            throw new \Error("Não esta retornando o resultado ".$num1.", esta retornando ".$this->total_packages, 1);
            
        }
     }

}
?>