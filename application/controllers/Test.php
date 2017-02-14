<?php


/**
 * Created by PhpStorm.
 * User: root
 * Date: 2/10/17
 * Time: 5:12 PM
 */
class Test extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->api = new \Rose\Api();
    }

    public function myTest(){
        $h = new \Hello\HelloWorld();
        $h->say_hello();

        $this->output->set_output($this->api->success(config_item('my_param')));
    }
}