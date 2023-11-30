<?php 
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'mahasiswa';

    protected $primaryKey = 'm_id';
    
    protected $allowedFields = ['m_nama', 'm_nrp', 'm_email'];
}