<?php

namespace App\Models;

use CodeIgniter\Model;

class SaungModel extends Model
{
    //Inisialisasi
    protected $table = 'saung';
    protected $allowedFields = ['id','email', 'nama', 'nik', 'nisn', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'jenis_kelamin', 'agama', 'jurusan', 'asal_sekolah', 'no_hp', 'nama_ayah', 'nama_ibu', 'sosmed','periode_masuk','periode_lulus', 'kelas'];

    //Query Read
    public function getData()
    {
        $query = $this->table('saung')->query('select * from saung');
        return $query->getResult();
    }

    //Query Reset
    public function getReset()
    {
        $query = $this->table('saung')->query('set @num := 0;');
        $query = $this->table('saung')->query('update saung set id = @num := (@num+1);');
        $query = $this->table('saung')->query('alter table saung AUTO_INCREMENT =1;');
        return $query->getResult();
    }

    //Query Main Search
    public function search($keyword){
        $query = $this->table('saung')->like('nama', $keyword);
        return $query;
    }

    //Query Admin Search
    public function searchAdmin($key)
    {
        $query = $this->table('saung')->like('nama', $key);
        return $query;
    }
}

?>