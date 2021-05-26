<?php

namespace App;

class Utilisateur {
    private $email;
    private $nom;
    private $prenom;
    private $age;

    public function __construct($email, $nom, $prenom, $age)
    {
        $this->email = $email;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
    }

    public function isValid() {
		return $this->isNameOK() && $this->isEmailOK() && $this->isAgeOK();
	}

	private function isNameOK() {
		return !empty($this->prenom) && !empty($this->nom);
	}

	private function isEmailOK() {
		return !empty($this->email);
	}

	public function isAgeOK() {
		return !empty($this->age) && $this->age >= 18;
	}

	public function setPrenom($prenom) {
		$this->prenom = $prenom;
	}

	public function setNom($nom) {
		$this->nom = $nom;
	}

	public function setEmail($email) {
		$this->email = $email;
	}

	public function setAge($age) {
		$this->age = $age;
	}
}