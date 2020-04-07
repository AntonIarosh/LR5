<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class AuthorController  extends AbstractController
{

    public function getAuthor($id)
    {
	   	$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		substr(str_shuffle($permitted_chars), 0, 16);
	    $id_publishhouse = rand();
		$id_author = rand();
		$id_user = rand();
		$id_user = rand();
		$id_genre = rand();
		$prace = rand();
        return $this->json(['Name_author' =>  substr(str_shuffle($permitted_chars), 0, 16) ,
			'Id' => $id,
			'Id_author' => $id_author,'Id_genre' => $id_genre, 'book_name' => substr(str_shuffle($permitted_chars),0, 16),
			'Id_publishhouse' => $id_publishhouse, 
			'Date_of_publish' => '06/12/2020', 
			'Type_of_cover_art' => $id_genre, 
			'book_name' => substr(str_shuffle($permitted_chars),0, 16),
			'Price' => $prace
		]);
    }
}
 ?>
