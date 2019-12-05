 <?php
class Product_model extends CI_Model{

	function product_list(){
		$hasil=$this->db->get('sewa_ps');
		return $hasil->result();
	}

	function save_product(){
		$data = array(
				'kode_sewa' 	=> $this->input->post('kode_sewa'), 
				'no_ps' 	=> $this->input->post('no_ps'), 
				'type' => $this->input->post('type'),  
				'nama_peminjam' => $this->input->post('nama_peminjam'),  
				'awal_sewa' => $this->input->post('awal_sewa'),  
				'akhir_sewa' => $this->input->post('akhir_sewa'),  
				'harga_sewa' => $this->input->post('harga_sewa'),  
				'status_sewa' => $this->input->post('status_sewa'),  
			);
		$result=$this->db->insert('sewa_ps',$data);
		return $result;
	}

	function update_product(){
		$kode_sewa=$this->input->post('kode_sewa');
		$no_ps=$this->input->post('no_ps');
		$type=$this->input->post('type');
		$nama_peminjam=$this->input->post('nama_peminjam');
		$awal_sewa=$this->input->post('awal_sewa');
		$akhir_sewa=$this->input->post('akhir_sewa');
		$harga_sewa=$this->input->post('harga_sewa');
		$status_sewa=$this->input->post('status_sewa');

		$this->db->where('kode_sewa', $kode_sewa);
		$this->db->set('no_ps', $no_ps);
		$this->db->set('type', $type);
		$this->db->set('nama_peminjam', $nama_peminjam);
		$this->db->set('awal_sewa', $awal_sewa);
		$this->db->set('akhir_sewa', $akhir_sewa);
		$this->db->set('harga_sewa', $harga_sewa);
		$this->db->set('status_sewa', $status_sewa);
		
		$result=$this->db->update('sewa_ps');
		return $result;
	}

	function delete_product(){
		$kode_sewa=$this->input->post('kode_sewa');
		$this->db->where('kode_sewa', $kode_sewa);
		$result=$this->db->delete('sewa_ps');
		return $result;
	}
	
}