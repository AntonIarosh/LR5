<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class StyleController
{
    public function style()
    {
		return new Response(

           '<html><body><h1><b>Код жанра</b></h1>
             <b>ID</b>: 50 <br/>
             <b>Название</b>: Название <br/>
			 <b>Родительский жанр</b>: 51 <br/>
           </body></html>'
       );
	   return $this->json(['id' => $id],['name' => $name],['Parent_id' => $Parent_id]);
    }
}
 ?>