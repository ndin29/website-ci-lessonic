<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{


    public function dashboard()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin', $data);
        $this->load->view('templates/footer');
    }

    public function home()
    {
        $data['title'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/home', $data);
        $this->load->view('templates/footer');
    }
    public function pricing()
    {
        $data['title'] = 'Pricing';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/pricing', $data);
        $this->load->view('templates/footer');
    }
    public function service()
    {
        $data['title'] = 'Service';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/service', $data);
        $this->load->view('templates/footer');
    }
    public function about_us()
    {
        $data['title'] = 'About Us';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/about_us', $data);
        $this->load->view('templates/footer');
    }
    public function portfolio()
    {
        $data['title'] = 'Portfolio';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/portfolio', $data);
        $this->load->view('templates/footer');
    }
    public function edit_home()
    {
        $data['title'] = 'Edit Halaman';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/edit_home', $data);
        $this->load->view('templates/footer');
    }
    public function edit_pricing()
    {
        $data['title'] = 'Edit Halaman';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/edit_pricing', $data);
        $this->load->view('templates/footer');
    }
    public function edit_service()
    {
        $data['title'] = 'Edit Halaman';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/edit_service', $data);
        $this->load->view('templates/footer');
    }
    public function edit_portfolio()
    {
        $data['title'] = 'Edit Halaman';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/edit_portfolio', $data);
        $this->load->view('templates/footer');
    }
    public function edit_about_us()
    {
        $data['title'] = 'Edit Halaman';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/edit_about_us', $data);
        $this->load->view('templates/footer');
    }
    public function update_home()
    {
        $data['title'] = 'Edit Halaman';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/update_home', $data);
        $this->load->view('templates/footer');
    }
    public function update_pricing()
    {
        $data['title'] = 'Edit Halaman';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/update_pricing', $data);
        $this->load->view('templates/footer');
    }
    public function update_service()
    {
        $data['title'] = 'Edit Halaman';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/update_service', $data);
        $this->load->view('templates/footer');
    }
    public function update_portfolio()
    {
        $data['title'] = 'Edit Halaman';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/update_portfolio', $data);
        $this->load->view('templates/footer');
    }
    public function update_about_us()
    {
        $data['title'] = 'Edit Halaman';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/update_about_us', $data);
        $this->load->view('templates/footer');
    }
    public function add_home()
    {
        $data['title'] = 'Edit Halaman';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/add_home', $data);
        $this->load->view('templates/footer');
    }
    public function add_pricing()
    {
        $data['title'] = 'Edit Halaman';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/add_pricing', $data);
        $this->load->view('templates/footer');
    }
    public function add_service()
    {
        $data['title'] = 'Edit Halaman';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/add_service', $data);
        $this->load->view('templates/footer');
    }
    public function add_portfolio()
    {
        $data['title'] = 'Edit Halaman';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/add_portfolio', $data);
        $this->load->view('templates/footer');
    }
    public function add_about_us()
    {
        $data['title'] = 'Edit Halaman';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/add_about_us', $data);
        $this->load->view('templates/footer');
    }
    public function delete_home()
    {
        $data['title'] = 'Edit Halaman';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/delete_home', $data);
        $this->load->view('templates/footer');
    }
    public function delete_about_us()
    {
        $data['title'] = 'Edit Halaman';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/delete_about_us', $data);
        $this->load->view('templates/footer');
    }
    public function delete_service()
    {
        $data['title'] = 'Edit Halaman';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/delete_service', $data);
        $this->load->view('templates/footer');
    }
    public function delete_pricing()
    {
        $data['title'] = 'Edit Halaman';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/delete_pricing', $data);
        $this->load->view('templates/footer');
    }
    public function delete_portfolio()
    {
        $data['title'] = 'Edit Halaman';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/delete_portfolio', $data);
        $this->load->view('templates/footer');
    }
}
