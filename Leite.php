<? php
require_once  "Perecivel.php" ;
require_once  "Produto.php" ;
class  Leite  extends  Produto  implementa  Perecivel {
	private  $ marca ;
	 $ volume privado ;
	private  $ dataValidade ;


	public  function  estaVencido () {

		getdate ([int $ timestamp = time ()]): array
		$ dataHoje = getDate ();

		if ( $ this -> dataValidade > = $ dataHoje ) {
			return  false ;
		} else {
			return  true ;
		}
	}
	public  function  Leite ( $ codigo , $ preco , $ marca , $ volume , $ dataValidade ) {
	$ this -> _constructor ( $ codigo , $ preco , $ marca , $ volume , $ dataValidade );
   }

}

public  function  _constructor ( $ codigo , $ preco , $ marca , $ volume , $ dataValidade ) {
	if ( is_null ( $ codigo ) || is_null ( $ preco ) || is_null ( $ marca ) || is_null ( $ volume ) || is_null ( $ dataValidade )) {
			lance  novo  InformacaoNulaException ();
		} else {
	parent :: __construct ( $ codigo , $ preco );
	$ this -> marca = $ marca ;
		$ this -> volume = $ volume ;
		$ this -> dataValidade = $ dataValidade ;
	}
}


	
	public  function  getMarca () {
		return  $ this -> marca ;
	}
	public  function  getVolume () {
		return  $ this -> volume ;
	}
	public  function  getDataValidade () {
		retornar  $ this -> dataValidade ;
	}
	public  function  __toString () {
		return  	"Codigo: $ this-> codigo <br>
				Preço: $ this-> preco <br> 
				Marca: $ this-> marca <br>
				volume: $ this-> volume <br>
				Data de validade: $ this-> dataValidade " ;
	}
}
?>