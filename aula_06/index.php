<?php 
//FUNCOES PARA STRINGS 

//Recortar uma string
$conteudo = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur porttitor vehicula porta. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam at venenatis ante. Duis bibendum, leo non posuere pharetra, odio nunc cursus neque, ut maximus dolor ex non leo. Fusce id bibendum magna, quis dignissim enim. Ut nulla nisl, feugiat sed efficitur sed, mollis a urna. Duis ac leo sit amet est ultrices consectetur vitae sit amet nisi. Pellentesque bibendum, eros quis eleifend accumsan, quam dolor lobortis turpis, aliquet feugiat quam risus eget mi. Duis vitae leo sed erat varius consequat eu non libero. In accumsan ac dui quis tincidunt. Vivamus hendrerit, augue quis ullamcorper elementum, eros tellus facilisis mauris, vitae maximus orci est at nisl. Morbi nec lacus finibus, pharetra ex vel, venenatis nibh. Aenean accumsan ultricies volutpat. Quisque blandit nec libero ut sodales. Duis molestie, erat quis molestie congue, enim orci vehicula tortor, nec tristique neque quam id mi.';

//echo substr($conteudo, 0, 20);


//Serve para juntar uma array com um delimitador. No caso espaço
$nome = 'João Ambrosio';

$nomes = explode(' ',$nome);

//print_r($nomes);

$nomes = implode('', $nomes);
//echo $nomes;

//Strip_tags serve para retirar todo codigo html.
$conteudo1 = '<h1>João</h1>outra coisa';
//echo strip_tags($conteudo1);


//htmlentities mostra o codigo na pagina
echo htmlentities('<div></div>');

?>