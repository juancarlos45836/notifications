<?php
interface Notifications
{
    public function setVariable($user, $message);

}

class SMSNotification implements Notifications
{
    public function __construct(){

    }
    public function setVariable($user, $message){
        echo 'Send Message to Logs';
    }

}
class EmailNotification implements Notifications
{
    public function __construct(){

    }
    public function setVariable($user, $message){
        echo 'Send Message to Logs';
    }

}
class PushNotification implements Notifications
{
    public function __construct(){

    }
    public function setVariable($user, $message){
        echo 'Send Message to Logs';
    }

}

class User {
    public $id;
    public $nombre;
    public $email;
    public $phone;
    public $suscribed;
    public $channels;

    public function __construct($id, $nombre, $email, $phone,$suscribed, $channels){
        $this->id = $id;
        $this->nombre = $nombre;
        $this->email = $email;
        $this->phone = $phone;
        $this->suscribed = $suscribed;
        $this->channels = $channels;
    }
}
