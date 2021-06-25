<?php
// credential
// APP_ID = APP006
// app_key = oEPWKtVCMBLKdkBgXH0lBOoMZJn9vc2W
// dynamic_key = wKRWMdrvWYZLl004SV4v6ytQo7inPAoO

namespace App\Lib; 
use stdClass;

class LogProp
{
    ### Validasi Key ###

    public function key($app_id, $password)
    {
        $data = new stdClass;

        $query =  'SILENT'; // $this->db->query("SELECT * FROM apps WHERE app_id = '$app_id'")->row_array();
        $dynamic_key = $query['key_dynamic'];
        $app_key = substr($query['key_app'], 0, 16);

        $finalKey = '';

        for ($i = 0; $i < strlen($dynamic_key);) {
            for ($j = 0; ($j < strlen($app_key) && $i < strlen($dynamic_key)); $j++, $i++) {
                $finalKey .= $dynamic_key[$i] ^ $app_key[$j];
            }
        }

        $saltKey = '';

        for ($i = 0; $i < strlen($password);) {
            for ($j = 0; ($j < strlen($finalKey) && $i < strlen($password)); $j++, $i++) {
                $saltKey .= $password[$i] ^ $finalKey[$j];
            }
        }

        $data->saltKey = $saltKey;
        $data->finalKey = $finalKey;

        return $data;
    }

    ### function login ###

    public function login()
    {
        $username = $this->input->post('username');
        $password = sha1($this->input->post('password'));
        $app_id = $this->input->post('app_id');
        $dynamic_key = $this->input->post('dynamic_key');
        $app_key = substr($this->input->post('app_key'), 0, 16);

        $saltKey = $this->key($app_id, $password)->saltKey;


        $data = array(
            'username' => $username,
            'password' => $saltKey,
            'app_id' => $app_id,
        );

        $url = "http://lus.pdsb.id/ums/v1/login";

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $response = curl_exec($ch);
        echo $response;
    }

    ### Function Change Password ###

    public function change_password()
    {
        $resp = new stdClass;

        $username = $this->input->post('username');
        $old_password = sha1($this->input->post('old_password'));
        $new_password = sha1($this->input->post('new_password'));
        $confirm_password = sha1($this->input->post('confirm_password'));
        $app_id = $this->input->post('app_id');
        $dynamic_key = $this->input->post('dynamic_key');
        $app_key = substr($this->input->post('app_key'), 0, 16);

        $uppercase = preg_match('@[A-Z]@', $new_password);
        $lowercase = preg_match('@[a-z]@', $new_password);
        $number    = preg_match('@[0-9]@', $new_password);
        $specialChars = preg_match('@[^\w]@', $new_password);

        if (!$uppercase || !$lowercase || !$number || $specialChars || strlen($new_password) < 8) {
            $resp->status = 'failed';
            $resp->message = "Password should be more than 8 character with combination uppercase and lowercase";
            $resp->attribute = '';
            return response()->json($resp);
        }

        $old_Key = $this->key($app_id, $old_password)->saltKey;
        $new_Key = $this->key($app_id, $new_password)->saltKey;
        $confirm_Key = $this->key($app_id, $confirm_password)->saltKey;

        $data = array(
            'username' => $username,
            'old_password' => $old_Key,
            'new_password' => $new_Key,
            'confirm_password' => $confirm_Key,
            'app_id' => $app_id,
        );

        $url = "http://lus.pdsb.id/ums/v1/change_password";

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $response = curl_exec($ch);
        echo $response;
    }

    ### Function Logout ###

    public function logout()
    {
        $username = $this->input->post('username');
        $app_id = $this->input->post('app_id');
        $dynamic_key = $this->input->post('dynamic_key');
        $app_key = substr($this->input->post('app_key'), 0, 16);

        $finalKey = $this->key($app_id, '')->finalKey;

        $data = array(
            'username' => $username,
            'key' => $finalKey,
            'app_id' => $app_id,
        );

        $url = "http://lus.pdsb.id/ums/v1/logout";

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $response = curl_exec($ch);
        echo $response;
    }
}
