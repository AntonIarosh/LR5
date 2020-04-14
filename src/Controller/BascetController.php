<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\BascetsRepository;
class BascetController extends AbstractController
{

   /* public function getBasket($id)
    {
	   	$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		substr(str_shuffle($permitted_chars), 0, 16);
	    $id_publishhouse = rand();
		
		$prace = rand();
		$id_book = rand();
		
		$id_audio_dook = rand();
		$total_cost = rand();
		$number = rand();
        return $this->json(['Name_author' =>  substr(str_shuffle($permitted_chars), 0, 16) ,
			'Id' => $id,
			'Id book' => $id_book,
			'Id audio dook' => $id_audio_dook, 
			'Total_book_cost' => $total_cost, 
			'Number_of_books' => $number,
			'Date' => '06.12.2020', 
			'Price' => $prace
		]);
    }*/
	
		public function show(int $id_bascet,BascetsRepository $repository) {
		
		/*$repository = $this->getDoctrine()
				   ->getRepository(Bascets::class);*/
		$Bascet = $repository -> find($id_bascet);
			
		return $this->json([ 'id' => $Bascet-> getId(),
			'Id payer' => $Bascet-> getIdPayer(),
			'Id book' =>  $Bascet->getIdPayBook(),
			'Id bascet' =>  $Bascet->getIdBascet(),
			
			'Countaty book' => $Bascet-> getCoutatyOfBook(),
			'Date' => $Bascet-> getDate(), 
			'Price' => $Bascet-> getPrice()
		]);
	}
}
 ?>
