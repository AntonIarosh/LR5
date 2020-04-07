<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class PublishingBookController extends AbstractController
{

    public function getPublishingBook($id)
    { 
	   $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		substr(str_shuffle($permitted_chars), 0, 16);
	   
	    return $this->json(['Id_genre' => $id,
			'Name' => substr(str_shuffle($permitted_chars), 0, 16),
		]);
    }
}
 ?>
