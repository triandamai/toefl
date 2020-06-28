<?php 
        $json = file_get_contents("assets/menu.json");
        $obj  = json_decode($json);
        foreach($obj->menus as $menu){
            echo $menu->judul.'<br>';
            if($menu->hassubmenu){
                foreach($menu->submenu as $sub){
                    echo '<p>'.$sub->judul.'</p>';
                }
            }
        }
?>