<?php

class Application
{

    public $conn;
    private $url_controller = null;
    private $url_action = null;
    private $url_parameter_1 = null;
    private $url_parameter_2 = null;
    private $url_parameter_3 = null;
    public function __construct($conn)
    {
        $this->conn = $conn;
        $this->splitUrl();
        $flag = 0 ;
        if (file_exists('./controller/' . $this->url_controller . '.php')) {

            require './controller/' . $this->url_controller . '.php';
            $this->url_controller = new $this->url_controller($this->conn);
            $flag = 1 ;

            if (method_exists($this->url_controller, $this->url_action)) {
                
                $flag = 1 ;
                
                if (isset($this->url_parameter_1)) {
                    $this->url_controller->{$this->url_action}($this->url_parameter_1);
                } else {
                    $this->url_controller->{$this->url_action}();
                }
                
            } else {
                $flag = 0 ;
            }
        }
        if ($flag == 0) {
            header('Location: http://127.0.0.1/dailycart3/dashboard/index');
        }

    }

    private function splitUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);

            $this->url_controller = (isset($url[0]) ? $url[0] : null);
            $this->url_action = (isset($url[1]) ? $url[1] : null);
            $this->url_parameter_1 = (isset($url[2]) ? $url[2] : null);
            $this->url_parameter_2 = (isset($url[3]) ? $url[3] : null);
            $this->url_parameter_3 = (isset($url[4]) ? $url[4] : null);

            // For debugging purposes only
            // echo 'Controller: ' . $this->url_controller . '<br />';
            // echo 'Action: ' . $this->url_action . '<br />';
            // echo 'Parameter 1: ' . $this->url_parameter_1 . '<br />';
            // echo 'Parameter 2: ' . $this->url_parameter_2 . '<br />';
            // echo 'Parameter 3: ' . $this->url_parameter_3 . '<br />';
        }
    }
}
