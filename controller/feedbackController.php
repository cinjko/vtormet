<?php

class FeedbackForm {

    function __construct()
    {
        $data_post = $_POST;
        $this->checkData($data_post);
    }

    public static function checkData($data)
    {
        if($data['name'] === "" || $data['email'] === "" || $data['phone'] === "" || $data['massage'] ==="") {
            $_SESSION['error'] = "Пожалуйста заполните все поля!";
        } else {

            include_once "../model/feedbackModel.php";
            $result = Form::validate($data);

            if (is_array($result)) {
                $massage = Form::recUserComments($result);
                $massage = implode(';', $massage);
                $send_message = wordwrap($massage, 70, "\r\n");
                mail('cinjko21@gmail.com', 'vtormet.loc',$send_message);
                header('Location: ../pages/contact.php');
            }
        }
    }
}


