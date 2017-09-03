<?php
define('USERS_FILE', __DIR__ . '/../data/users.json');
function login($login, $password){
$user = getUser($login);
if (!$user || $user['password'] !=$password){
return false;
}
else {
unset ($user['password']);
$_SESSION['user']=$user;
return true;}
function isPost()
{
    return $_SERVER('REQUEST_METHOD') == 'POST';
}
function isAuthorized(){
return !empty($_SESSION['user']);
}
function getParam($name){
    return isset($_REQUEST[$name]) ? $_REQUEST[$name]: null;

}
function getUsers(){
if (!file_exists('USERS_FILE')){
    return[];
}
$fileData = file_get_contents(USERS_FILE);
$users=json_decode($fileData, true);
if (!$users){
    return[];
    }
    return $users;
}
function getUser($login)
{
$users=getUsers();
foreach ($users as $user){
if ($user['login']==$login){
return $user;
}}
return null;

}
function redirect($page){
header("Location: $page.php");
die;
}
?>


