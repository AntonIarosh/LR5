<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
class StyleBookController extends AbstractController
{

    public function gerStyleBook($id)
    {
		$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		substr(str_shuffle($permitted_chars), 0, 16);
	    $id_paren_genre = rand();;
	    return $this->json(['Id_genre' => $id,
			'Name' => substr(str_shuffle($permitted_chars), 0, 16),
			'Id paren genre' => $id_paren_genre,
		]);
    }
}
 ?>
