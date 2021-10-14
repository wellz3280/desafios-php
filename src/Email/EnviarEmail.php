<?php

namespace Desafios\Php\Email; 

class EnviarEmail
{
	private string $delimitador;
    private string $email;

    public function arrayEmail(string $delimitador,string $email):array
    {
    	$this->delimitador = $delimitador;
        $this->email = $email;
    	$emails = explode($delimitador,$email);

        return $emails;
    }

    public static function enviarMensagem(array $emails):void
    {  
        for($i=0 ;$i< count($emails); $i++){
            
            $mensagem = "Obrigado por se cadastrar na locawell";
            $host = "localwell@locawell.com";

            $destinatario = $emails[$i];

            echo "<p>De: <strong>$host</strong> Para: <strong>$destinatario</strong></p>
                  <p>Mensagem: $mensagem</p>
            ";


        }
        
        
       
    }   

}
