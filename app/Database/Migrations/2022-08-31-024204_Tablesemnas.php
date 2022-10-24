<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tablesaung extends Migration
{
	public function up()
	{
		//
		/*
         * Saung
         */
		$this->forge->addField([
			'id'               => ['type' => 'int', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
			'email'            => ['type' => 'varchar', 'constraint' => 255],
			'nama' 				=> ['type' => 'varchar', 'constraint' => 255],
			'nik' 			=> ['type' => 'varchar', 'constraint' => 255],
			'nisn'			 => ['type' => 'varchar', 'constraint' => 255],
			'tempat_lahir'	 => ['type' => 'varchar', 'constraint' => 255],
			'tanggal_lahir' => ['type' => 'varchar', 'constraint' => 255],
			'alamat' => ['type' => 'varchar', 'constraint' => 255],
			'jenis_kelamin' => ['type' => 'varchar', 'constraint' => 255],
			'agama' => ['type' => 'varchar', 'constraint' => 255],
			'jurusan' => ['type' => 'varchar', 'constraint' => 255],
			'asal_sekolah' => ['type' => 'varchar', 'constraint' => 255],
			'no_hp' => ['type' => 'varchar', 'constraint' => 255],
			'nama_ayah' => ['type' => 'varchar', 'constraint' => 255],
			'nama_ibu' => ['type' => 'varchar', 'constraint' => 255],
			'sosmed' => ['type' => 'varchar', 'constraint' => 255],
			'periode_masuk' => ['type' => 'DATE'],
			'periode_lulus' => ['type'=>'DATE']
 
		]);

		$this->forge->addKey('id', true);
		$this->forge->addUniqueKey('email');

		$this->forge->createTable('saung', true);
	}

	public function down()
	{
		//
	}
}
