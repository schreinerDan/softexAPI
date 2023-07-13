<?php
/**
 * @author Daniel Schreiner
 * @email schreiner.daniel@gmail.com
 */

class UserRepository extends Repository {
    public function __construct(PgsqlConnectionPool $connectionPool) {
        parent::__construct($connectionPool);
        $this->table = "users";
    }

    public function getAllUsers() {
        return $this->getAll();
    }

    public function getUserById($id) {
        return $this->getById($id);
    }

    public function createUser(User $user) {
        $data = [
            'username' => $user->username,
            'password' => $user->password,
            'is_enabled' => $user->is_enabled,
            'register_date' => $user->register_date,
            'name' => $user->name,
            'surname' => $user->surname,
            'email' => $user->email,
            'phone' => $user->phone,
            'role' => $user->role
        ];
        return $this->create($data);
    }

    public function updateUser($id, User $user) {
        $data = [
            'username' => $user->username,
            'password' => $user->password,
            'is_enabled' => $user->is_enabled,
            'register_date' => $user->register_date,
            'name' => $user->name,
            'surname' => $user->surname,
            'email' => $user->email,
            'phone' => $user->phone,
            'role' => $user->role
        ];
        return $this->update($id, $data);
    }

    public function deleteUser($id) {
        return $this->delete($id);
    }
}
