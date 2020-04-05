<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Core_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

    }

}

class Home_Core_Controller extends Core_Controller
{
    //maintenance mode
    public function maintenance_mode()
    {
        $this->load->view('maintenance');
    }

    //verify recaptcha
    public function recaptcha_verify_request()
    {
        if (!$this->recaptcha_status) {
            return true;
        }

        $this->load->library('recaptcha');
        $recaptcha = $this->input->post('g-recaptcha-response');
        if (!empty($recaptcha)) {
            $response = $this->recaptcha->verifyResponse($recaptcha);
            if (isset($response['success']) && $response['success'] === true) {
                return true;
            }
        }
        return false;
    }


    public function paginate($url, $total_rows, $per_page)
    {
        //initialize pagination
        $page = $this->security->xss_clean($this->input->get('page'));
        $page = clean_number($page);
        if (empty($page)) {
            $page = 0;
        }

        if ($page != 0) {
            $page = $page - 1;
        }

        $config['num_links'] = 4;
        $config['base_url'] = $url;
        $config['total_rows'] = $total_rows;
        $config['per_page'] = $per_page;
        $config['reuse_query_string'] = true;
        $this->pagination->initialize($config);

        $per_page = clean_number($per_page);

        return array('per_page' => $per_page, 'offset' => $page * $per_page, 'current_page' => $page + 1);
    }
}


