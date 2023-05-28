<?php

class Template_view
{
    var $ci;

    function __construct()
    {
        $this->ci = &get_instance();
    }

    public function load($body_view = null, $data = [])
    {
        $body = $this->ci->load->view($body_view, $data, true);

        $data['body'] = $body;
        $template_view = '_template/layout';

        $this->ci->load->view($template_view, $data);
    }
}
