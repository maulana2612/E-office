<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Mailbox extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Mailbox_model");
        $this->load->library('nota_dinas');
    }

    public function index()
    {
        $data["products"] = $this->Mailbox_model->getAll();
        $this->load->view("admin/product/list", $data);
    }

    public function add()
    {
        $product = $this->Mailbox_model;
        $validation = $this->nota_dinas;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/product/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/products');
       
        $product = $this->Mailbox_model;
        $validation = $this->nota_dinas;
        $validation->set_rules($product->rules());

        if ($validation->run()) {
            $product->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["product"] = $product->getById($id);
        if (!$data["product"]) show_404();
        
        $this->load->view("admin/product/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Mailbox_model->delete($id)) {
            redirect(site_url('admin/products'));
        }
    }
}