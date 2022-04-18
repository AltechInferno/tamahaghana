<?php 

function general($section){
    include 'DBconnection.php'; 
    $general_query = mysqli_query($connect, "SELECT * FROM general") or die(mysqli_error($connect)); 
    $general_array = mysqli_fetch_array($general_query); 

    $general = $general_array[$section]; 

    return $general; 
}


function partners(){
    include 'DBconnection.php'; 
    $partner_query = mysqli_query($connect, "SELECT * FROM partners") or die(mysqli_error($connect)); 
    
    while($partner =  mysqli_fetch_array($partner_query)){
        echo '<div class="swiper-slide">
            <img src="assets/images/resources/'.$partner['partner_logo'].'" alt="">
        </div>';
    };
   
}

?>