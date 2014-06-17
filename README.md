HackBook
========

O código simplesmente recebe um user e password vindo de um form do facebook, salva em arquivo e redireciona de volta
para o facebook, entretanto o facebook nao aceita as dados via POST vindo de outro endereço e acaba pedindo novamente 
o login e senha.

Para usar basta abrir no inspecionar elemento a tag FORM e alterar o action para http://hackbook.freevar.com/ sem que a 
vítima veja e pronto. Quando ela logar estará entregando sua senha. Se tratando de usuários que não entendem de programação,
eles provavelmente nem vão achar estranho o fato de não terem logado na primeira vez e acabarão fazendo o login novamente. Só
que desta vez com exito pelo fato do servidor atualizar a página.

Por enquanto estou procurando por uma forma de manter o controle sobre a atualização da página para que seja possível
configurar a tag form de uma única vez. Se isso for possível, qualquer um que tentar logar no facebook em meu PC estará
me passando sua senha.   
