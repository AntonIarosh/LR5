<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Users;
use App\Repository\UsersRepository;

class RegistrationController extends AbstractController
{
    /*public function Register($login,$password,$name,$telephone,$address_delivery,$user_e_mail,$date_birth)
    {
	    $id  = rand();
		$id_bascet = rand();
		$id_user = rand();
	
	    return $this->json(['Айди пользователя' => $id,
			'Name' => $name,
			'Login' => $login,
			'Password' => $pasword, 
			'Id_boscet' => $id_bosket, 
			'Adress' => $adress,
			'Phone' => $tele ,
			'Data_of_birth' => '12.12.2020'
		]);
		
		
    }*/
	public function create (Request $request) {
		$entityManager = $this->getDoctrine()->getManager();
		$users = new Users();
		//$users->setId(rand());
		$id_user = rand();
		$users->setIdUser($id_user );
		$users->setLogin($request->get('login'));
		$users->setPassword($request->get('password'));
		$users->setUserEMail($request->get('e-mail'));
		$users->setTelephone($request->get('telephone'));
		$users->setDateBirth($request->get('data'));
		$users->setIdBascet(rand());
		$users->setAddressDelivery($request->get('adress'));
		
		$entityManager ->persist($users);
		$entityManager ->flush();
		
		return $this->json(['id_user' => $id_user ,
			
		]);
	}
}
 ?>
