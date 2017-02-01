<?php if( !class_exists( 'form' ) ) 
{    
    class form extends input
    {
          var $html = null;
                
          public function __construct() 
          {
               parent::__construct();
          }
    }
}
?>