<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Register extends BaseController
{
    public function index()
    {
        return view('vw_register');
    }

    public function process()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required|min_length[4]|max_length[20]|is_unique[users.username]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 20 Karakter',
                    'is_unique' => 'Username sudah digunakan sebelumnya'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[4]|max_length[50]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 50 Karakter',
                ]
            ],
            'password_conf' => [
                'rules' => 'matches[password]',
                'errors' => [
                    'matches' => 'Konfirmasi Password tidak sesuai dengan password',
                ]
            ],
            'name' => [
                'rules' => 'required|min_length[4]|max_length[100]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 100 Karakter',
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $recaptchaResponse = trim($this->request->getVar('g-recaptcha-response'));

        // form data

        $secret = env('RECAPTCHAV3_SITEKEY');

        $credential = array(
            'secret' => $secret,
            'response' => $recaptchaResponse
        );

        $verify = curl_init();
        curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
        curl_setopt($verify, CURLOPT_POST, true);
        curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($credential));
        curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($verify);

        $status = json_decode($response, true);

        $session = session();

        if ($recaptchaResponse) {


            $users = new UsersModel();
            $users->insert([
                'username' => $this->request->getVar('username'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
                'name' => $this->request->getVar('name')
            ]);
            $session->setFlashdata('berhasil', 'Berhasil Registrasi, Silahkan Login');
            return redirect()->to('/login');
        } else {

            $session->setFlashdata('cap', 'Captcha mohon dicentang');
            return redirect()->back()->withInput();
        }
    }

    public function googleCaptachStore()
    {
        $recaptchaResponse = trim($this->request->getVar('g-recaptcha-response'));

        // form data

        $secret = env('RECAPTCHAV3_SITEKEY');

        $credential = array(
            'secret' => $secret,
            'response' => $recaptchaResponse
        );

        $verify = curl_init();
        curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
        curl_setopt($verify, CURLOPT_POST, true);
        curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($credential));
        curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($verify);

        $status = json_decode($response, true);

        $session = session();

        if ($status['success']) {

            $session->setFlashdata('msg', 'Form has been successfully submitted');
        } else {

            $session->setFlashdata('msg', 'Please check your inputs');
        }

        return redirect()->to('/Register/index');
    }
}
