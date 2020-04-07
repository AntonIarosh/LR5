<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class RegistrationController extends AbstractController
{
    public function Register()
    {
	    $id  = rand();
		$login  = rand();
		$pasword = rand();
		$name = rand();
		$adress  = rand();
		$tele  = rand();
	   $id_bosket = rand();
	    return $this->json(['Айди пользователя' => $id,
			'Name' => $name,
			'Login' => $login,
			'Password' => $pasword, 
			'Id_boscet' => $id_bosket, 
			'Adress' => $adress,
			'Phone' => $tele ,
			'Data_of_birth' => '12.12.2020'
		]);
    }
}
 ?>
