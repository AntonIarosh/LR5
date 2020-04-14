<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\PublishingHousesRepository;
class PublishingBookController extends AbstractController
{

   /* public function getPublishingBook($id)
    { 
	   $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		substr(str_shuffle($permitted_chars), 0, 16);
	   
	    return $this->json(['Id_genre' => $id,
			'Name' => substr(str_shuffle($permitted_chars), 0, 16),
		]);
    }*/
	
	public function show(int $id_publishing_house,PublishingHousesRepository $repository) {
		
	/*	$repository = $this->getDoctrine()
				   ->getRepository(PublishingHouses::class);*/
		$publishingHouse = $repository->find($id_publishing_house);
		
		 return $this->json(['Id Publishing House' => $publishingHouse->getIdPublishingHouse(),
			'Name' => $publishingHouse->getName()
		]);
	}
}
 ?>
