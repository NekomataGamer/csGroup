<?php

if (!function_exists('showMessage')){
    function showMessage($type, $message, $redirect=''){
        $CI = &get_instance();
        $CI->session->set_flashdata(array('message_type' => $type, 'message' => $message));

        if ($redirect !== '') redirect($redirect);
    }
}

if (!function_exists('throwError')){
    function throwError($message, $redirect=''){
        showMessage("danger", $message, $redirect);
    }
}

if (!function_exists('showSuccess')){
    function showSuccess($message, $redirect=''){
        showMessage("success", $message, $redirect);
    }
}