<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class PublishingController
{
    public function publishing()
    {
      return new Response(
          '<html><body><h1><b>Код издательства</b></h1>
             <b>ID</b>: 3 <br/>
             <b>Название</b>: Название <br/>
           </body></html>'
       ); 
	 //  return $this->json(['id' => $id],['name' => $name]);
    }
}
 ?>
