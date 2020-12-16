<footer> 
    <ul> 
        <li> Copyright &copy;<?php 
                                $startDate = 2020; 
                                $currentDate = date('Y'); 
                                if($startDate == $currentDate){ 
                                    echo $currentDate;
                                }else { 
                                    echo ''.$startDate. '-' .$currentDate. '';
                                }
                                ?>
        </li> 
        <li>All Rights Reserved</li> 
        <li>Web Design by Ameer</li> 
        <li><a href='http://validator.w3.org/check?uri=<?php echo $htmlValid ?>'>HTML</a></li> 
        <li><a href='<?php echo $cssValid ?>'>CSS</a></li> 
    </ul>
</footer> 

</body>
</html>