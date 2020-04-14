<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\StylesRepository;
class StyleController extends AbstractController
{
 /*   public function style()
    {
		$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

		substr(str_shuffle($permitted_chars), 0, 16);
		
	    $number = rand();
        return $this->json(['id_Style' => $number , 'Style' => substr(str_shuffle($permitted_chars), 0, 16)]);
	}*/
	
	public function show(StylesRepository $repository) {
	/*	$repository = $this->getDoctrine()
				   ->getRepository(Styles::class);*/
				   
		$styleCover = $repository->findAll();
		
		return $this->json([
			'Id cover'  => $styleCover[0]->getIdStyle(),
			'Style cover' => $styleCover[0]->getStyleBook()
		]);
	}
}
 ?>