<html>

<body>
    <?php
    
    function test()
    {
       static $a=0;       // apply $a=4 also
        echo "$a";
        $a++;
            
    }
    
    test();
    test();
    test();
    
    ?>
    </body></html>