<?php 
if($_SERVER['REQUEST_METHOD']=="GET")
{
    echo "Hello World";
}else if($_SERVER['REQUEST_METHOD']=="POST")
{
    echo "Hello POST";
}else{
    http_response_code(405);
}



?>