<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/simple_html_dom.php';

class Fabelio_controller extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->return = array('status' => false, 'message' => 'Something wrong');

        $this->load->helper('curl_helper');
        $this->load->model("fabelio_model");
    }

    public function index()
    {
        $this->load->view('Fabelio/input_url');
    }

    public function result()
    {
        $url = $this->input->post('url');

        @$html = file_get_html($url);
        if($html === FALSE) {
            $this->return['message'] = "404";
            echo json_encode($this->return);
            exit;
        }

        $productId = '';
        if ($html) {
            $productIdEl = $html->find('input[id="productId"]');
            $productId = $productIdEl[0]->value;
        }


        if ($productId) {
            $siteData = getCurl($productId);
            $siteData = json_decode($siteData);
            $data = $siteData->product;
            $data->product_id = $productId;

            $dataId = $this->fabelio_model->insertData($data);

            if ($dataId) {
                redirect(base_url() . "fabelio/detail?id=".$dataId);
            }
        }
    }

    public function list()
    {
        $list['data'] = $this->fabelio_model->getList();

        if ($list['data']) {
            $this->load->view('Fabelio/list', $list);
        }
    }

    public function detail()
    {
        $id = $this->input->get('id');
        if (!$id) {
            redirect(base_url());
        }
        
        $data = $this->fabelio_model->getDataById($id);

        if ($data) {
            $list['data'] = $data;
            $this->load->view('Fabelio/page3', $list);
        }
    }

    public function cron_job()
    {
        $data = $this->fabelio_model->getListCron();
        
        foreach ($data as $value) {
            $siteData = getCurl($value->product_id);
            $siteData = json_decode($siteData);
            $listData = $siteData->product;
            $listData->product_id = $value->product_id;

            $updateData = $this->fabelio_model->updateData($listData);
        }
    }
}
