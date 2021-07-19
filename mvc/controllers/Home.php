<?php
    
    class Home extends Controller{
        public $ncc;
        function __construct()
        {
           
        }
        function SayHi(){
      
     
            $this->view(
                "TrangChu",
                [
                    
                    "Page"=>"Home",
                
                ]);

        }
        
    }
?>