<?php

    class Usuario extends Model {

        public $username;
        public $password;
        public $email;
        public $admin;
        public $firstname;
        public $surname;

        public function __construct() {
            parent::__construct();
        }

        public function insert($data) {
            try {
                $pass = md5($data['password']);
                $query = $this->db->connect()->prepare('INSERT INTO users (username, password, email, firstname, surname) VALUES (:username, :password, :email, :firstname, :surname)');
                $query->execute(['username' => $data['username'], 'password' => $pass, 'email' => $data['email'], 'firstname' => $data['firstname'], 'surname' => $data['surname']]);
                
                return true;
            } catch (PDOException $e) {
                return false;
            }
        }
        
        public function getall() {
            try {
                $items = [];
                $query = $this->db->connect()->query('SELECT * FROM users');

                while ($row = $query->fetch()) {
                    $user = new Usuario();
                    $user->username     = $row['username'];
                    $user->email        = $row['email'];
                    $user->admin        = $row['admin'];
                    $user->firstname    = $row['firstname'];
                    $user->surname      = $row['surname'];

                    array_push($items, $user);
                }

                return $items;
            } catch (PDOException $e) {
                return [];
            }
        }

        public function getuser($user) {
            try {
                $u = new Usuario();
                $query = $this->db->connect()->prepare('SELECT * FROM users WHERE username=:username');
                $query->execute(['username' => $user]);
                while ($row = $query->fetch()) {
                    $u->username     = $row['username'];
                    $u->email        = $row['email'];
                    $u->admin        = $row['admin'];
                    $u->firstname    = $row['firstname'];
                    $u->surname      = $row['surname'];
                }

                return $u;
            } catch (PDOException $e) {
                return null;
            }
        }

        private function getfulluser($user) {
            try {
                $u = new Usuario();
                $query = $this->db->connect()->prepare('SELECT * FROM users WHERE username=:username');
                $query->execute(['username' => $user]);
                while ($row = $query->fetch()) {
                    $u->username     = $row['username'];
                    $u->password     = $row['password'];
                    $u->email        = $row['email'];
                    $u->admin        = $row['admin'];
                    $u->firstname    = $row['firstname'];
                    $u->surname      = $row['surname'];
                }

                return $u;
            } catch (PDOException $e) {
                return null;
            }
        }

        public function validateuser($user) {
            $us = new Usuario();
            $us = $this->getfulluser($user['username']);
            if ($us != null) {
                if (md5($user['password']) == $us->password) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }

        public function isadmin($user) {
            $us = $this->getfulluser($user);
            if ($us != null) {
                if ($us->admin == 1) return true;
                else return false;
            } else {
                return false;
            }
        }

        public function update($data) {
            try {
                $query = $this->db->connect()->prepare("UPDATE users SET email=:email, admin=:admin, firstname=:firstname, surname=:surname WHERE username=:username");
                $query->execute(['email' => $data['email'], 'firstname' => $data['firstname'], 'admin' => $data['admin'], 'surname' => $data['surname'], 'username' => $data['username']]);

                return true;
            } catch (PDOException $e) {
                return false;
            }
        }

        public function delete($data) {
            try {
                $query = $this->db->connect()->prepare("DELETE FROM users WHERE username=:username");
                $query->execute(['username' => $data['username']]);

                return true;
            } catch (PDOException $e) {
                return false;
            }
        }

        public function getstats() {
            try {
                $query = $this->db->connect()->query('SELECT COUNT(*) FROM users');
                $noofusers = $query->fetch()[0];

                $query = $this->db->connect()->query('SELECT COUNT(*) FROM users WHERE admin=1');
                $noofadmins = $query->fetch()[0];

                $query = $this->db->connect()->query('SELECT username FROM users WHERE admin=1');
                $admins = [];
                while ($name = $query->fetch()) {
                    array_push($admins, $name);
                }


                return [
                    'noofusers' => $noofusers,
                    'noofadmins' => $noofadmins,
                    'admins' => $admins
                ];
            } catch (PDOException $e) {
                return [];
            }
        }

    }

?>