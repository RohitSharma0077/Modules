<hmtl>
<body>
    <?php
    $a=4;
     
       // echo"$a";
    function t()
    {
        global $a;
        echo"by using global keyword $a <br>";            // not access global var inside fun.
       
        echo"in function<br>";
    }
    t();
    echo"outside function $a";
    ?>
    </body>
</hmtl>