<?php 

function is_logged_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('auth');
    }
}
function is_loggin()
{
    $ci = get_instance();
    if ($ci->session->userdata('email')) {
        redirect('panel');
    }
}
function is_admin()
{
    $ci = get_instance();
    if ($ci->session->userdata('level') <> 'Admin') {
        redirect('admin/blocked');
    }
}
function is_reseller()
{
    $ci = get_instance();
    if ($ci->session->userdata('level') == 'Member') {
        redirect('reseller/blocked');
    }
}