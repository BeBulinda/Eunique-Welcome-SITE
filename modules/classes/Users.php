<?php

class Users extends Database {

    public function execute() {
        if ($_POST['action'] == "login") {
            return $this->loginSystem();
        } else if ($_POST['action'] == "update_password") {
            return $this->updatePassword();
        } else if ($_POST['action'] == "forgot_password") {
            return $this->forgotPassword();
        } else if ($_POST['action'] == "website_registration") {
            return $this->addWebsiteUser();
        }
    }

    public function sendHttpRequestPost($data_string) {
        $curl_session = curl_init();
        curl_setopt($curl_session, CURLOPT_URL, "http://localhost/staqpesa_api/?index&");
//            curl_setopt($curl_session, CURLOPT_URL, "http://localhost:8081/staqpesa_v2.0_api/?index&");
        //    curl_setopt($curl_session, CURLOPT_URL, "http://api.staqpesa.com/?index&");
        curl_setopt($curl_session, CURLOPT_POST, true);
        curl_setopt($curl_session, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($curl_session, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl_session);
        curl_close($curl_session);
        return $response;
    }

    public function sendHttpRequestGet($data_string) {
        $curl_session = curl_init();
        curl_setopt($curl_session, CURLOPT_URL, "http://localhost/staqpesa_api/?index&" . $data_string);
//            curl_setopt($curl_session, CURLOPT_URL, "http://localhost:8081/staqpesa_v2.0_api/?index&" . $data_string);
        //    curl_setopt($curl_session, CURLOPT_URL, "http://api.staqpesa.com/?index&" . $data_string);
        curl_setopt($curl_session, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl_session);
        curl_close($curl_session);
        return $response;
    }

    public function sendHttpRequestPut($data_string) {
        $curl_session = curl_init();
        curl_setopt($curl_session, CURLOPT_URL, "http://localhost/staqpesa_api/?index&" . $data_string);
//            curl_setopt($curl_session, CURLOPT_URL, "http://localhost:8081/staqpesa_v2.0_api/?index&" . $data_string);
        //    curl_setopt($curl_session, CURLOPT_URL, "http://api.staqpesa.com/?index&" . $data_string);
        curl_setopt($curl_session, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl_session, CURLOPT_CUSTOMREQUEST, "PUT");
        curl_setopt($curl_session, CURLOPT_POSTFIELDS, $data_string);
        $response = curl_exec($curl_session);
        curl_close($curl_session);
        return $response;
    }

    private function addWebsiteUser() {
        $data['request_type'] = $_POST['action'];
        $data['firstname'] = $_POST['firstname'];
        $data['lastname'] = $_POST['lastname'];
        $data['phone_number'] = $_POST['phone_number'];
        $data['email'] = $_POST['email'];
        $data['user_type'] = $_POST['user_type'];

        $data_string = http_build_query($data);

        if (!empty($data['request_type']) && !empty($data['firstname']) && !empty($data['lastname']) && !empty($data['phone_number']) && !empty($data['email'])) {
            $process_request = $this->sendHttpRequestPost($data_string);
            if ($process_request) {
                $decoded_response = json_decode($process_request, true);
                $response['status'] = $decoded_response['status'];
                $response['message'] = $decoded_response['message'];
            } else {
                $response['status'] = 400;
                $response['message'] = "Sorry: There was an error processing the request. Please try again later";
            }
        } else {
            $response['status'] = 400;
            $response['message'] = "Error: Missing Values in Request";
        }
        return $response;
    }
    
}
