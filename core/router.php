<?php
//Call to the processing file via request

$request_path = MODULESPATH . DIRECTORY_SEPARATOR . get_module() . DIRECTORY_SEPARATOR . 'controllers' . DIRECTORY_SEPARATOR . get_controller().'Controller.php';

if (file_exists($request_path)) {
    require $request_path;
} else {
    echo "Not found: $request_path ";
}

$action_name = get_action().'Action';

call_function(array('construct', $action_name));

if (!is_login() && get_module() =='admin' && get_action() != 'login') {
    redirect('login');
}
