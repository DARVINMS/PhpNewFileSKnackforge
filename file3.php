
<?php
class school {
    public $collage_name;
    public $location;
    public function __construct()
    {
        $this->collage_name= "knackforge";
        $this->location="chennai";
        
    }
}

class department extends school{
    public  $department_name;
     public function __construct($deptname)
     {
        parent::__construct();
       $this->department_name= $deptname;
     }
     public function __destruct()
     {
        echo "Thank you,\ndepartment name : {$this->department_name}\ncollage name : {$this->collage_name}\nlocation : {$this->location}";
     }

}

$darvin = new department("iclasspro");

echo $darvin->department_name,"\n";
echo $darvin->collage_name,"\n";
echo $darvin->location,"\n";