<?php

$routesArray =  explode("/", $_SERVER['REQUEST_URI']);
$routesArray = array_filter($routesArray);
//Si no se hace ninguna peticioon a la API
if(count($routesArray) == 0){
    $result = array(
        "status" => 400,
        "message" => "Not Found"
    );
    
    echo json_encode($result,http_response_code($result['status']));
}

//Si se hace peticion a la API
if ( (count($routesArray) == 1 ) && (isset($_SERVER['REQUEST_METHOD']))) {
    echo '<pre>';print_r($_SERVER['REQUEST_METHOD']); echo'</pre>';

    //GET
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $result = array(
            "status" => 200,
            "message" => "Solicitud GET"
        );
        
        echo json_encode($result,http_response_code($result['status']));
    }

    
    //POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $result = array(
            "status" => 200,
            "message" => "Solicitud POST"
        );
        
        echo json_encode($result,http_response_code($result['status']));
    }

    //PUT
    if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
        $result = array(
            "status" => 200,
            "message" => "Solicitud PUT"
        );
        
        echo json_encode($result,http_response_code($result['status']));
    }

    //DELETE
    if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
        $result = array(
            "status" => 200,
            "message" => "Solicitud DELETE"
        );
        
        echo json_encode($result,http_response_code($result['status']));
    }

}
