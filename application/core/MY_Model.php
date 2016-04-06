<?php
/**
 * A base model with a series of CRUD functions (powered by CI's query builder),
 * validation-in-model support, event callbacks and more.
 *
 * @link http://github.com/jamierumbelow/codeigniter-base-model
 * @copyright Copyright (c) 2012, Jamie Rumbelow <http://jamierumbelow.net>
 */
class MY_Model extends CI_Model
{
    /* --------------------------------------------------------------
     * VARIABLES
     * ------------------------------------------------------------ */
    /**
     * This model's default database table. Automatically
     * guessed by pluralising the model name.
     */
    protected $_table;
    /**
     * This model's default primary key or unique identifier.
     * Used by the get(), update() and delete() functions.
     */
    protected $primary_key = 'id';
	

	public function get_where($where, $fields, $order=NULL, $limit = NULL, $result_type = NULL) {
		if($where !== '' && is_array($where)) {
			foreach($where as $key => $value) {
				if($key[0] =='?') {
					$this->db->where_in(substr($key, 1), $value);
				} else if 
					($key[0] =='!') {
					$this->db->where_not_in(substr($key,1), $value);
				} else {
					$this->db->where($key, $value);
				}
			}
		}

		if($fields !== '') {
			if(is_array($fields)) {
				$select = implode(',', $fields);	
				$this->db->select($select);
			} else {
				$this->db->select($fields);
			}
		}
		if(isset($order)) {
			foreach($order as $k => $v) {
				$this->db->order_by($k, $v);		
			}
		}
		
		if(isset($result_type)) {
			$typeResult = $result_type;
		} else {
			$typeResult = 'result';
		}

		if(isset($limit) && $limit !== '') {
			$this->db->limit($limit['max'], $limit['begin']);
		}

		$result = $this->db->get($this->_table)->$typeResult();

		return $result;
	}

	// Count all
	public function count_all($where) {
		if($where !== '' && is_array($where)) {
			foreach($where as $key => $value) {
				if($key[0] =='?') {
					$this->db->where_in(substr($key, 1), $value);
				} else if 
					($key[0] =='!') {
					$this->db->where_not_in(substr($key,1), $value);
				} else {
					$this->db->where($key, $value);
				}
			}
		}
		
		$this->db->from($this->_table);

		return $this->db->count_all_results();
	}

	public function get($primary_value, $fields) {
		if($fields !== '') {
			if(is_array($fields)) {
				$select = implode(',', $fields);	
				$this->db->select($select);
			} else {
				$this->db->select($fields);
			}
		}
		$this->db->where($this->primary_key, $primary_value);
		$this->db->order_by($this->primary_key, 'DESC');
		$result = $this->db->get($this->_table)->row();

		return $result;
	}

	public function get_field($where, $fieldReturn) {
		$this->db->where($where);
		$this->db->select($fieldReturn);
		$result = $this->db->get($this->_table)->row();

		return $result->$fieldReturn;
	}

	public function get_by($where, $fields) {
		if($where !== '' && is_array($where)) {
			foreach($where as $key => $value) {
				if($key[0] =='?') {
					$this->db->where_in(substr($key, 1), $value);
				} else if 
					($key[0] =='!') {
					$this->db->where_not_in(substr($key,1), $value);
				} else {
					$this->db->where($key, $value);
				}
			}
		}

		if($fields !== '') {
			if(is_array($fields)) {
				$select = implode(',', $fields);	
				$this->db->select($select);
			} else {
				$this->db->select($fields);
			}
		}
		$this->db->limit(1);
		$result = $this->db->get($this->_table)->row();

		return $result;
	}


	// Delete
	public function delete($where, $primary_value) {
		if($where !== '' && is_array($where)) {
			foreach($where as $k => $v) {
				$this->db->where($k, $v);
			}
		}
		
		$this->db->where($this->primary_key, $primary_value);
		$status = $this->db->delete($this->_table);

		if($status)
			return TRUE;
		else 
			return FALSE;	
	}

	// Delete
	public function changeStatus($primary_value, $status) {
		$this->db->where($this->primary_key, $primary_value);
		$this->db->set('published', $status);
		$status = $this->db->update($this->_table);

		if($status)
			return TRUE;
		else 
			return FALSE;	
	} 

	//Insert - Update
	public function insert_update($id, $data) {
		if($id == '') {
			//Insert
			// foreach($data as $k => $v) {
			// 	$this->db->set($k, $v);
			// }
			$data['created_at'] = time();
			$data['updated_at'] = time();
			$status = $this->db->insert($this->_table, $data);
		} else {
			foreach($data as $k => $v) {
				$this->db->set($k, $v);
			}
			$this->db->set('updated_at', time());
			$this->db->where($this->primary_key, $id);
			$status = $this->db->update($this->_table);
		}

		if($status)
			return TRUE;
		else 
			return FALSE;
	}   
}