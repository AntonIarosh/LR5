<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class RegistrationController
{
    public function Register($id="3434343",$login="login132",$pasword="12345",
            $name="name12",$id_boscet="2376",$adress="adress",$tele="+7978",$date="date12")
    {
        return new Response(
           '<html><body><h1> Айди пользователя <b> '. $id .' </b></h1>
             <b>Имя</b>: '.$name.'<br/>
			 <b>Логин </b>: '.$login.'<br/>
			 <b>Пароль</b>: '.$pasword.'<br/>
             <b>Код корзины </b>: '.$id_boscet.' <br/>
			 <b>Адрес</b>: '.$adress.' <br/>
			 <b>Телефон</b>:'.$tele.'<br/>
             <b>ДАта рождения</b>: '.$date.' <br/>
           </body></html>'
       );
    }
}
 ?>
