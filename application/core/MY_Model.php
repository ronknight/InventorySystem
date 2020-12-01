<?php

class MY_Model extends CI_Model
{

    public $_table_name = '';
    public $_primary_key = 'id';
//	protected $_primary_filter = 'intval';
    public $_order_by = '';
    public $_rules = array();
    public $_timestamps = FALSE;

    function __construct()
    {
        parent::__construct();
    }

    public function get($id = NULL, $single = FALSE, $limit = NULL, $offset = NULL)
    {

        if ($id != NULL) {
            //	$filter = $this->_primary_filter;
            //$id = $filter($id);
            $this->db->where($this->_primary_key, $id);
            $method = 'row';
        } elseif ($single == TRUE) {
            $method = 'row';
        } else {
            $method = 'result';
        }

        if ($this->_order_by != '') {
            $this->db->order_by($this->_order_by);
        }

        if ($limit != NULL && $offset != NULL) {

            $this->db->limit($limit, $offset);

        }
        return $this->db->get($this->_table_name)->$method();
    }

    public function get_by($where, $single = FALSE)
    {
        $this->db->where($where);
        return $this->get(NULL, $single);
    }

    public function save($data, $id = NULL)
    {

        // Set timestamps
        if ($this->_timestamps == TRUE) {
            $now = date('Y-m-d H:i:s');
            $id || $data['created'] = $now;
            $data['modified'] = $now;
        }


        // Insert
        if ($id === NULL) {
            date_default_timezone_set('Asia/karachi');

            $entry_date = date("Y-m-d H:i:s");
            $data['E_DATE_TIME'] = $entry_date;
            $data['E_USER_ID'] = $this->session->userdata('userid');
            //	!isset($data[$this->_primary_key]) || $data[$this->_primary_key] = NULL;
            $this->db->set($data);
            $this->db->insert($this->_table_name);
            $id = $this->db->insert_id();
        } // Update
        else {

            date_default_timezone_set('Asia/karachi');

            $update_date = date("Y-m-d H:i:s");
            $data['U_DATE_TIME'] = $update_date;
            $data['U_USER_ID'] = $this->session->userdata('userid');

            //$filter = $this->_primary_filter;
            //$id = $filter($id);
            $this->db->set($data);
            $this->db->where($this->_primary_key, $id);
            $this->db->update($this->_table_name);
        }

        return $id;
    }

    public function delete($id)
    {
        //$filter = $this->_primary_filter;
        //$id = $filter($id);

        if (!$id) {
            return FALSE;
        }
        $this->db->where($this->_primary_key, $id);
        $this->db->limit(1);
        $this->db->delete($this->_table_name);
    }


    public function max_id()
    {
        $this->db->select_max($this->_primary_key);
        $this->db->from($this->_table_name);
        $q = $this->db->get();
        $data = $q->row_array();
        // $data[_primary_key];
        return $data[$this->_primary_key];


    }


    public function get_join($dat, $id = NULL)
    {


        if ($id != NULL) {
            //	$filter = $this->_primary_filter;
            //$id = $filter($id);

            $this->db->where($this->_primary_key, $id);
            $method = 'row';
        } else {
            $method = 'result';
        }


        $this->db->select('*');
        $this->db->from($this->_table_name);
        foreach ($dat as $dat => $value) {


            $this->db->join($dat, $value);


        }

        $query = $this->db->get();
        //echo $this->db->last_query();
        return $query->$method();


    }

    public function array_from_post($fields)
    {
        $data = array();
        foreach ($fields as $field) {
            $data[$field] = $this->input->post($field);
        }

        return $data;
    }

    /** duplicate value check **/
    public function check_update($table, $where, $id = null)
    {
        $this->db->select('*', false);
        $this->db->from($table);
        if ($id != null) {
            $this->db->where($id);
        }
        $this->db->where($where);
        $query_result = $this->db->get();
        $result = $query_result->result();

        return $result;
    }

    public function check_by($where, $tbl_name)
    {
        $this->db->select('*');
        $this->db->from($tbl_name);
        $this->db->where($where);
        $query_result = $this->db->get();
        $result = $query_result->row();

        return $result;
    }

    public function uploadImage($field)
    {
        $config['upload_path'] = 'img/uploads/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '2024';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($field)) {
            $error = $this->upload->display_errors();
            $type = 'error';
            $message = $error;
            set_message($type, $message);

            return false;
            // uploading failed. $error will holds the errors.
        } else {
            $fdata = $this->upload->data();
            $img_data ['path'] = $config['upload_path'].$fdata['file_name'];
            $img_data ['fullPath'] = $fdata['full_path'];

            return $img_data;
            // uploading successfull, now do your further actions
        }
    }

    public function uploadFile($field)
    {
        $config['upload_path'] = 'img/uploads/';
        $config['allowed_types'] = 'pdf|docx|doc';
        $config['max_size'] = '2048';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload($field)) {
            $error = $this->upload->display_errors();
            $type = 'error';
            $message = $error;
            set_message($type, $message);

            return false;
            // uploading failed. $error will holds the errors.
        } else {
            $fdata = $this->upload->data();
            $file_data ['fileName'] = $fdata['file_name'];
            $file_data ['path'] = $config['upload_path'].$fdata['file_name'];
            $file_data ['fullPath'] = $fdata['full_path'];

            return $file_data;
            // uploading successfull, now do your further actions
        }
    }



}