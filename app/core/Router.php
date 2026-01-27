<?php
namespace App\Core;

class Router
{

    public function run()
    {
        $method = $_SERVER['REQUEST_METHOD']; 
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        if ($method == 'GET' && $uri == '/sugus') {
            echo '<h1>Daftar Sugus</h1>';
            echo '<p>Menampilkan daftar sugus</p>';
            return;
        }

           http_response_code(404);
           echo '<h1> 404-Page Not Found</h1>';
    }


  


}

?>