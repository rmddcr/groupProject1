<?php

class Gen_model extends CI_Model {

    public function userAuth($userInfo) {
        $this->db->select("userName,userPass"); //give username and userpass to authenticate user
        $result = $this->db->get_where("users", $userInfo);

        if ($result->num_rows == 1) {
            $currentUser = $result->result_array()[0];
//            var_dump($currentUser);
//            die();
//            $userData = array("userName" => $currentUser["username"]);
//            $this->session->set_userdata($userData);
            return true;
        } else {
            return false;
        }
    }

    //makes this to work with columns and without where,limit and offset
    function getData($tablename = '', $columns_arr = array(), $where_arr = array(), $limit = 0, $offset = 0, $orderby = array()) {
		$limit = ($limit == 0) ? Null : $limit;

        if (!empty($columns_arr)) {
            $this->db->select(implode(',', $columns_arr), FALSE);
        }

        if ($tablename == '') {
            return array();
        } else {
            $this->db->from($tablename);

            if (!empty($where_arr)) {
                $this->db->where($where_arr);
            }

            if ($limit > 0 AND $offset > 0) {
                $this->db->limit($limit, $offset);
            } elseif ($limit > 0 AND $offset == 0) {
                $this->db->limit($limit);
            }

            if (count($orderby) > 0) {
                $orderbyString = '';
                var_dump($orderby);
                foreach ($orderby as $orderclause) {

                    $orderbyString .= $orderclause["field"] . ' ' . $orderclause["order"] . ', ';
                }
                if (strlen($orderbyString) > 2) {
                    $orderbyString = substr($orderbyString, 0, strlen($orderbyString) - 2);
					var_dump($orderbyString);
                }
                $this->db->order_by($orderbyString);
            }

            $query = $this->db->get();
            return $query->result();
        }
    }
    function getDataIn($tablename = '', $columns_arr = array(), $where_arr = array(), $limit = 0, $offset = 0, $orderby = array()) {
		$limit = ($limit == 0) ? Null : $limit;

        if (!empty($columns_arr)) {
            $this->db->select(implode(',', $columns_arr), FALSE);
        }

        if ($tablename == '') {
            return array();
        } else {
            $this->db->from($tablename);

            if (!empty($where_arr)) {
                $this->db->where_in($where_arr["KeyField"],$where_arr["values"]);
            }

            if ($limit > 0 AND $offset > 0) {
                $this->db->limit($limit, $offset);
            } elseif ($limit > 0 AND $offset == 0) {
                $this->db->limit($limit);
            }

            if (count($orderby) > 0) {
                $orderbyString = '';

                foreach ($orderby as $orderclause) {

                    $orderbyString .= $orderclause["field"] . ' ' . $orderclause["order"] . ', ';
                }
                if (strlen($orderbyString) > 2) {
                    $orderbyString = substr($orderbyString, 0, strlen($orderbyString) - 2);
                }
                $this->db->order_by($orderbyString);
            }

            $query = $this->db->get();

            return $query->result();
        }
    }
    function insertData($tablename, $data_arr) {
        try {
            $this->db->insert($tablename, $data_arr);

            $ret = $this->db->insert_id() + 0;
            return $ret;
        } catch (Exception $err) {
            return $err->getMessage();
        }
    }

    function updateData($tablename, $data_arr, $where_arr) {
        try {
            $this->db->update($tablename, $data_arr, $where_arr);
            $report = array();
            $report['error'] = $this->db->_error_number();
            $report['message'] = $this->db->_error_message();
            return $report;
        } catch (Exception $err) {

            return $err->getMessage();
        }
    }

    function genericQuery($strSQL) {
        if (!empty($strSQL)) {
            try {
                $query = $this->db->query($strSQL);
                if (!$query) {
                    throw new Exception($this->db->_error_message(), $this->db->_error_number());
                    return FALSE;
                } else {
                    return $query->result();
                }
            } catch (Exception $e) {
                return;
            }
        } else {
            return FALSE;
        }
    }
    
    public function deleteData($tblName,$where){
      $rst=  $this->db->delete($tblName,$where);
      var_dump($rst);
    }

}
