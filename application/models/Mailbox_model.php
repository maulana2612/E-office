<?php 
defined ('BASEPATH') or exit ('No Dirext Script Access Allowed');

	class Mailbox_model extends CI_Model {
		private $_table = "surat";

		private $id_surat;
		private $kepada;
		private $tgl;
		private $no_surat;
		private $sifat;
		private $lampiran;
		private $hal;
		private $isi;
		private $penanda_tangan;
		private $paraf;
		private $tembusan;
		private $perintah_tugas;
		private $pengantar;
		private $pengirim;

		public function rules (){
			return[	
					['field' => 'kepada'
					 'label' => 'kepada'
					  'rules'=> 'text'],

					[ 'field' => 'tgl'
					   'label' => 'tgl'
					   'rules'=> 'text'],

					[ 'field' => 'no_surat'
					   'label' => 'no_surat'
					   'rules'=> 'text'],   

					[ 'field' => 'sifat'
					   'label' => 'sifat'
					   'rules'=> 'text'],

					[ 'field' => 'lampiran'
					   'label' => 'lampiran'
					   'rules'=> 'text'], 

					[ 'field' => 'hal'
					   'label' => 'hal'
					   'rules'=> 'text'],

					[ 'field' => 'isi'
					   'label' => 'isi'
					   'rules'=> 'text'],

					[ 'field' => 'penanda_tangan'
					   'label' => 'penanda_tangan'
					   'rules'=> 'text'],

   					[ 'field' => 'paraf'
					   'label' => 'paraf'
					   'rules'=> 'text'],

					[ 'field' => 'tembusan'
					   'label' => 'tembusan'
					   'rules'=> 'text'], 

					[ 'field' => 'perintah_tugas'
					   'label' => 'perintah_tugas'
					   'rules'=> 'text'],

					[ 'field' => 'pengantar'
					   'label' => 'pengantar'
					   'rules'=> 'text'], 

					[ 'field' => 'pengirim'
					   'label' => 'pengirim'
					   'rules'=> 'text'], 
			];
		}

		public function getAll (){
			return $this->db->get($this->_table)->result();
		}

		public function getById () {
			return $this->db->get_where($this->_table,["id_surat" => $id])->row();
		}

		public function save (){
			$post = $this->input->post();
			$this->id_surat = uniqid();
			$this->kepada =$post["kepada"];
			$this->tgl =$post["tgl"];
			$this->no_surat =$post["no_surat"];
			$this->sifat =$post["sifat"];
			$this->lampiran =$post["lampiran"];
			$this->hal =$post["hal"];
			$this->isi =$post["isi"];
			$this->penanda_tangan =$post["penanda_tangan"];
			$this->paraf =$post["paraf"];
			$this->tembusan =$post["tembusan"];
			$this->perintah_tugas =$post["perintah_tugas"];
			$this->pengantar =$post["pengantar"];
			$this->pengirim =$post["pengirim"];
			$this->db->insert->($this->_table,$this);


		}
		public function update (){
			$post = $this->input->post();
			$this->id_surat = $post["id_surat"];
			$this->kepada =$post["kepada"];
			$this->tgl =$post["tgl"];
			$this->no_surat =$post["no_surat"];
			$this->sifat =$post["sifat"];
			$this->lampiran =$post["lampiran"];
			$this->hal =$post["hal"];
			$this->isi =$post["isi"];
			$this->penanda_tangan =$post["penanda_tangan"];
			$this->paraf =$post["paraf"];
			$this->tembusan =$post["tembusan"];
			$this->perintah_tugas =$post["perintah_tugas"];
			$this->pengantar =$post["pengantar"];
			$this->pengirim =$post["pengirim"];
			$this->db->update->($this->_table,$this, array('id_surat' => $post['id']));
		}	

		public function delete(){
			return $this->db->delete($this->_table, array("id_surat"=>$id));

		}

	}