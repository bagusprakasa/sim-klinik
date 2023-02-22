<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_jasa_model extends CI_Model
{

    public $table = 'tbl_jasa';
    public $id = 'kode_jasa';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
	
	function get_all_alkes($id_klinik = null)
    {
        $this->db->where('jenis_jasa', '2'); //Get jenis jasa = alat kesehatan
        if($id_klinik != null)
            $this->db->where('id_klinik', $id_klinik);
        
        return $this->db->get($this->table)->result();
    }
	
	function get_all_obat($id_klinik = null)
    {
        $this->db->where('jenis_jasa', '1'); //Get jenis jasa = obat
        if($id_klinik != null)
            $this->db->where('id_klinik', $id_klinik);
        
        return $this->db->get($this->table)->result();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('kode_jasa', $q);
	$this->db->or_like('nama_jasa', $q);
	$this->db->or_like('id_kategori_jasa', $q);
	$this->db->or_like('id_satuan_jasa', $q);
	$this->db->or_like('harga', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('tbl_jasa.kode_jasa', $q);
	$this->db->or_like('tbl_jasa.nama_jasa', $q);
	$this->db->or_like('tbl_jasa.id_kategori_jasa', $q);
	$this->db->or_like('tbl_jasa.id_satuan_jasa', $q);
	$this->db->or_like('tbl_jasa.harga', $q);
        $this->db->join('tbl_kategori_jasa','tbl_kategori_jasa.id_kategori_jasa=tbl_jasa.id_kategori_jasa');
        $this->db->join('tbl_satuan_jasa','tbl_satuan_jasa.id_satuan=tbl_jasa.id_satuan_jasa');
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }
    
    function json(){
        $this->datatables->select('kode_jasa,nama_jasa,nama_kategori as kategori_jasa,nama_satuan as satuan_jasa,hna,harga,tbl_klinik.nama as klinik');
        $this->datatables->from('tbl_jasa');
        $this->datatables->join('tbl_kategori_barang', 'tbl_jasa.id_kategori_barang=tbl_kategori_barang.id_kategori_barang');
        $this->datatables->join('tbl_satuan_barang', 'tbl_jasa.id_satuan_barang=tbl_satuan_barang.id_satuan');
        $this->datatables->join('tbl_klinik','tbl_jasa.id_klinik=tbl_klinik.id_klinik');
        $this->datatables->add_column('action', anchor(site_url('jasa/update/$1'),'<i class="fa fa-pencil-square-o" aria-hidden="true"></i>','class="btn btn-success btn-sm"')." 
                ".anchor(site_url('jasa/delete/$1'),'<i class="fa fa-trash-o" aria-hidden="true"></i>','class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'), 'kode_jasa');
            
        return $this->datatables->generate();
    }

    function get_data_jasa($id_klinik = null)
    {
        // if($id_klinik != null)
        //     $this->db->where('id_klinik', $id_klinik);
        
        return $this->db->get($this->table)->result();
    }

}

/* End of file Tbl_jasa_model.php */
/* Location: ./application/models/Tbl_jasa_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2017-12-09 11:24:01 */
/* http://harviacode.com */