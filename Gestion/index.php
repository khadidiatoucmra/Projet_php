<?php

    require_once './controller/modelcontroller.php';


    if(isset($_GET['action']) && !empty($_GET['action'])){
        if($_GET['action']=='delete'){
            remove();
        }
        if($_GET['action']=='add'){
            create();
        }
        if($_GET['action']=='save'){
            save();
        }
    }else{
        index();
    }
    
?>