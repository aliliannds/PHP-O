<? php
require_once  "Produto.php" ;
classe  DVD  extends  Produto {
	private  $ titulo ;
	 $ ano privado ;	





	 função  pública Leite ( $ codigo , $ preco , $ titulo , $ ano ) {
	$ this -> _constructor ( $ codigo , $ preco , $ titulo , $ ano );
   }


public  function  _constructor ( $ codigo , $ preco , $ titulo , $ ano ) {
	if ( is_null ( $ codigo ) || is_null ( $ preco ) || is_null ( $ titulo ) || is_null ( $ ano )) {
			lance  novo  InformacaoNulaException ();
		} else {
	parent :: __construct ( $ codigo , $ preco );
	$ this -> titulo = $ titulo ;
		$ this -> ano = $ ano ;
	}
}




	public  function  getAno () {
		retornar  $ this -> ano ;
	}
	public  function  getTitulo () {
		return  $ this -> titulo ;
	}



	public  function  __toString () {
		return  	"Codigo: $ this-> codigo <br>
				Preço: $ this-> preco <br> 
				Titulo: $ this-> titulo <br>
				Ano: $ this-> ano " ;			
	}
}
?>