<?php

namespace Test;

use App\Utilisateur;

use PHPUnit\Framework\TestCase;

class UtilisateurTest extends TestCase
{
  private $user;

  /**
   * Fonction appelé avant les tests, initialise les objets utilisés
   */
  public function setUp() : void {
    $this->user = new Utilisateur("LACHEHEB", "Thomas", "thomas.lacheheb@hotmail.fr", 25);
  }
  
  public function tearDown() : void {
    $this->user = null;
  }

	public function testIsValidOK() {
    $this->assertTrue($this->user->isValid());
  }

	public function testIsValidKO() {
    $this->user->setNom('');
		$this->assertFalse($this->user->isValid());
  }
}