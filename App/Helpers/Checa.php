<?php
  class checa{
    public static function checarNome($nome){
        if(!preg_match('/^([áÁàÀãÃâÂéÉèÈêÊíÍìÌóÓòÒõÕôÔúÚùÙçÇaA-zZ]+)+((\s[áÁàÀãÃâÂéÉèÈêÊíÍìÌóÓòÒõÕôÔúÚùÙçÇaA-zZ]+)+)?$/', $nome)):
            return true;
        else:
            return false;
        endif;
    }//fim da função checarNome

    public static function checarEmail($email){
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)):
        return true;
      else:
        return false;
      endif;
    }//fim da função checarEmail

    public static function dataBR($data){
      if(isset($data)):
        return date('d/m/Y H:i', strtotime($data));
      else: 
        return false;
      endif;
    }// Fim da função dataBR
}//fim da classe Checa