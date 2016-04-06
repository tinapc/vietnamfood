<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends Admin_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->model('banner_model', 'banner');
    }

    // Index function
    public function index()
    {
        $s_title = 'Main Banner';
        $return_url = current_url();
        $linkAdd = '/banner/create/';

        $resources = $this->banner->get_where(array('subPage' => 0), '');

        $this->load->vars(array('title' => $s_title));
        $this->template->set('resources', $resources);
        $this->template->set('return_url', $return_url);
        $this->template->set('linkAdd', $linkAdd);
        $this->template->build('manager/index');

    }


    // Delete resource
    public function delete($id)
    {
        if (!$this->ion_auth->is_admin()) {
            echo json_encode(array('status' => false, 'message' => 'Bạn không có quyền thực hiện chức năng này'));
        } else {
            if (!$id || $id == '') {
                echo json_encode(array('status' => false, 'message' => 'Yêu cầu của bạn không thành công'));
            } else {
                if ($this->banner->delete('', $id)) {
                    echo json_encode(array('status' => true, 'message' => 'Bản tin đã được xóa'));
                } else {
                    echo json_encode(array('status' => false, 'message' => 'Yêu cầu của bạn không thành công'));
                }
            }
        }
    }

    // Change Status
    // Delete resource
    public function changeStatus($id)
    {
        if (!$this->ion_auth->is_admin()) {
            echo json_encode(array('status' => false, 'message' => 'Bạn không có quyền thực hiện chức năng này'));
        } else {
            if (!$id || $id == '') {
                echo json_encode(array('status' => false, 'message' => 'Yêu cầu của bạn không thành công'));
            } else {
                if ($this->banner->changeStatus($id, $this->input->post('status'))) {
                    echo json_encode(array('status' => true, 'message' => 'Bản tin đã được xóa'));
                } else {
                    echo json_encode(array('status' => false, 'message' => 'Yêu cầu của bạn không thành công'));
                }
            }
        }
    }

    // Edit resource
    public function edit($id)
    {
        $resource = $this->banner->get($id, '');
        $return_url = '/banner';

        $data = array();
        $message = '';

        if ($this->input->post()) {
            $id = $this->input->post('id') ? $this->input->post('id') : '';

            foreach ($_POST as $k => $v) {
                $data[$k] = $v;
            }

            $data['published'] = $this->input->post('published') ? $this->input->post('published') : 0;

            $result = $this->banner->insert_update($id, $data);

            if ($result) {
                $this->session->set_flashdata('message', 'Changes has been saved successfully!');
                redirect('banner/edit/' . $id, 'refresh');
            } else {
                $this->session->set_flashdata('error', 'The server is not responding, try again later.');
                redirect('banner/edit/' . $id, 'refresh');
            }
        }

        $this->load->vars(array('title' => 'Edit Banner'));
        $this->template->set('resource', $resource);
        $this->template->set('message', $message);
        $this->template->set('return_url', $return_url);
        $this->template->build('manager/edit');
    }

    // Create new resource
    public function create()
    {

        $data = array();
        $message = '';
        $return_url = '/banner';

        if ($this->input->post()) {

            foreach ($_POST as $k => $v) {
                $data[$k] = $v;
            }

            $data['published'] = $this->input->post('published') ? $this->input->post('published') : 0;

            $result = $this->banner->insert_update('', $data);

            if ($result) {
                $this->session->set_flashdata('message', 'Changes has been saved successfully!');
                redirect('/banner', 'refresh');
            } else {
                $this->session->set_flashdata('error', 'The server is not responding, try again later.');
                redirect('banner/create/', 'refresh');
            }

        }

        $this->load->vars(array('title' => 'Tạo mới'));
        $this->template->set('message', $message);
        $this->template->set('return_url', $return_url);
        $this->template->build('manager/edit');
    }


}
