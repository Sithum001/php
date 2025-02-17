<?php
$capitals= array("Usa"=>"Woshington D.C",
                  "Japan"=>"Kyoto",
                "South Korea"=>"Seoul",
                "India"=>"New Delhi");

                      $capitals["Usa"]="Las vegas";
                      $capitals["China"]="Beijing";
                      array_pop($capitals);
                      array_shift($capitals); 
                      $capitals=array_flip($capitals);
                      $capitals=array_reverse($capitals);

                foreach($capitals as $key=>$value){
                    echo"{$key}={$value}<br>";
                }
                 $keys=array_keys($capitals);
                foreach($keys as $key ){
                    echo"{$key}<br>";
                }
                $values=array_values($capitals);
                foreach($values as $value){
                    echo"{$value}<br>";
                }
                 
  
?>