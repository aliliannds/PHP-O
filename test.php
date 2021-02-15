<? php
require_once  "Leite.php" ;
require_once  "DVD.php" ;

$ estoque = [];
para ( $ i = 1 ; $ i <= 10 ; $ i ++) {
    if ( $ i <= 4 ) {
        array_push ( $ estoque , ( novo  Dvd ( $ i , 10 , "FILME {$ i}" , "200 {$ i}" )));
        continue ;
    }

    array_push ( $ estoque , ( novo  Leite ( $ i , 2.5 , "Marca {$ i}" , 1 , data ( "Ymd" , strtotime ( "-" . ( $ i - 6 ). "dias" )))) );
}


$ somaProdutos = nulo ;
para ( $ i = 1 ; $ i <= 10 ; $ i ++) {
	$ somaProdutos + = $ estoque [ $ i ] -> preco ;
}
echo  "Soma produtos em estoque: $ somaTotalProdutos <br>" ;

?>