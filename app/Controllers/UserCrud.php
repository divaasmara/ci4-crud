<?php 
namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;

class UserCrud extends Controller
{
    // show users list
    
    public function admin(){
        $userModel = new UserModel();
        $data['users'] = $userModel->orderBy('m_id', 'ASC   ')->findAll();
        return view('user_view', $data);
    }
    
    public function index(){
        $userModel = new UserModel();
        $data['users'] = $userModel->orderBy('m_id', 'ASC   ')->findAll();
        return view('home', $data);
    }

    

    // add user form
    public function create(){
        return view('add_user');
    }
 
    // insert data
    public function store() {
        $userModel = new UserModel();
        $data = [
            'm_nama' => $this->request->getVar('m_nama'),
            'm_nrp'  => $this->request->getVar('m_nrp'),
            'm_email'  => $this->request->getVar('m_email'),
        ];
        $userModel->insert($data);
        return $this->response->redirect(site_url('/mahasiswa-list'));
    }

    // show single user
    public function singleUser($id = null){
        $userModel = new UserModel();
        $data['user_obj'] = $userModel->where('m_id', $id)->first();
        return view('edit_view', $data);
    }


    // update user data
    public function update(){
        $userModel = new UserModel();
        $id = $this->request->getVar('m_id');
        $data = [
            'm_nama' => $this->request->getVar('m_nama'),
            'm_nrp'  => $this->request->getVar('m_nrp'),
            'm_email'  => $this->request->getVar('m_email'),
        ];
        $userModel->update($id, $data);
        return $this->response->redirect(site_url('/mahasiswa-list'));
    }
 
    // delete user
    public function delete($id = null){
        $userModel = new UserModel();
        $data['user'] = $userModel->where('m_id', $id)->delete($id);
        return $this->response->redirect(site_url('/mahasiswa-list'));
    }    
}