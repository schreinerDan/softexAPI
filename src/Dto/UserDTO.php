<?php
/**
 * @author Daniel Schreiner
 * @email schreiner.daniel@gmail.com
 */

class UserDTO {
    public $id;
    public $username;
    public $is_enabled;
    public $register_date;
    public $name;
    public $surname;
    public $email;
    public $phone;
    public $role;
    
    public function __construct(User $user) {
        $this->id = $user->id;
        $this->username = $user->username;
        $this->is_enabled = $user->is_enabled;
        $this->register_date = $user->register_date;
        $this->name = $user->name;
        $this->surname = $user->surname;
        $this->email = $user->email;
        $this->phone = $user->phone;
        $this->role = $user->role;
    }
}


