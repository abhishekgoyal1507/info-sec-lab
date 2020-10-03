<html>
<body>
<h1 style="text-align:center;">MAGIC CONSTANTS</h1>
</body>
</html>

<?php   
    echo "<h3>Example for __LINE__</h3>";      
    echo "This line tells us that you are at line number " . __LINE__ . "<br><br>"; 
    
    echo "<h3>Example for __FILE__</h3>";       
    echo "It tells us the path of our file is : ". __FILE__ . "<br><br>";  

    echo "<h3>Example for __DIR__</h3>";    
    //print full path of directory where script will be placed    
    echo "The directory in which our file is : ". __DIR__ . "<br><br>";  
    //below output will equivalent to above one.  
    echo "This statement also provides the directory but usin __FILE__ constant : ".dirname(__FILE__) . "<br><br>";  
    
    
    echo "<h3>Example for __FUNCTION__</h3>";      
    function test(){    
        echo 'The function name is '. __FUNCTION__ . "<br><br>";
        echo "Hello World<br><br>";   
    }    
    test();    



    echo "<h3>Example for __CLASS__</h3>";    
    class JTP    
    {    
        public function __construct() {    
            ;    
    }    
    function getClassName(){    
        echo "The class name is : ".__CLASS__ . "<br><br>";   
        }    
    }    
    $t = new JTP;    
    $t->getClassName();    
      
    //in case of multiple classes   
    class base  
    {    
    function test_first(){    
            //will always print parent class which is base here.    
            echo "The Parent class is : ".__CLASS__;   
        }    
    }    
    class child extends base    
    {    
        public function __construct() {    
            ;    
        }    
    }    
    $t = new child;    
    $t->test_first();    



?>  
