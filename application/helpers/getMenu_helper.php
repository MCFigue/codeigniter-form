<?php 

function main_menu(){
    return array(
        array(
            'title'=>'Perfil',
            'url' =>base_url(),
        ),
        array(
            'title'=>'Persona',
            'url' =>base_url('index.php/persona'),
        ),
    );
}
?>