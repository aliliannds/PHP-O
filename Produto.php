<? php
inclua  "InformacaoNulaException.php" ;
 classe  abstrata Produto {
	private  $ codigo ;
	private  $ preco ;

	public  function  Produto ( $ codigo , $ preco ) {
	$ this -> _constructor ( $ codigo , $ preco );
   }

}

public  function  _constructor ( $ codigo , $ preco ) {
	if ( is_null ( $ codigo ) || is_null ( $ preco )) {
			lance  novo  InformacaoNulaException ();
		} else {
$ this -> codigo = $ codigo ;
		$ this -> preco = $ preco ;	
	}
	
}


	public  function  __get ( $ atributo ) {
		return  $ this -> $ atributo ;
	}
	public  function  getCodigo () {
		return  $ this -> codigo ;
	}
	public  function  getPreco () {
		return  $ this -> preco ;
	}

	public  function  setCodigo ( $ codigo ) {
		$ this -> codigo = $ codigo ;
	}
	
	public  function  setPreco ( $ preco ) {
		$ this -> preco = $ preco ;
	}	
}
?>