var tabuleiro;
var board;
var aviso;
var jogador;
var lin, col;


function inicia() {
    tabuleiro = new Array(3);
    board = document.getElementById('board');
    aviso = document.getElementById('aviso');
    jogador = 1;

    for (let i = 0; i < 3; i++)
        tabuleiro[i] = new Array(3);

    for (let i = 0; i < 3; i++)
        for (let j = 0; j < 3; j++)
            tabuleiro[i][j] = 0;

    exibe();
}


function exibe()
{
 HTML = '<table  cellpadding="10" border="1">';
 for(let i=0; i<3 ; i++){
  HTML += '<tr>';
  for(let j=0 ; j<3 ; j++)
   if(tabuleiro[i][j]==0)
   HTML += '<td id="celula-' + i + '-' + j + '" onclick="jogar(' + i + ',' + j + ')"></td>';
   else 
    if(tabuleiro[i][j]==1)
     HTML +='<td id=x> X </td>';
    else
     HTML +='<td id=o> O </td>';
  HTML += '</tr>';
 }
 HTML += '</table><br />';
 board.innerHTML = HTML
 
}



function jogar(lin, col) {
    if (tabuleiro[lin][col] == 0) {
        if (jogador % 2){
            tabuleiro[lin][col] = 1;
        }else{
            tabuleiro[lin][col] = -1;
        }
        jogador++;
        exibe();
        checa();
    } else {
        aviso.innerHTML = 'Campo já foi marcado!';
    }
}

function checa()
{
 var soma;

 //Linhas
 for(let i=0 ; i<3 ; i++){
  soma=0;
  soma=tabuleiro[i][0]+tabuleiro[i][1]+tabuleiro[i][2];

  if(soma==3 || soma==-3)
   aviso.innerHTML="Jogador " + ((jogador)%2 + 1) + " ganhou! Linha " + (i+1) + " preenchida!";
 }

 //Colunas
 for(let i=0 ; i<3 ; i++){
  soma=0;
  soma=tabuleiro[0][i]+tabuleiro[1][i]+tabuleiro[2][i];

  if(soma==3 || soma==-3)
   aviso.innerHTML="Jogador " + ((jogador)%2 + 1) + " ganhou! Coluna " + (i+1) + " preenchida!";
 }

 //Diagonal
 soma=0;
 soma = tabuleiro[0][0]+tabuleiro[1][1]+tabuleiro[2][2];
 if(soma==3 || soma==-3)
   aviso.innerHTML="Jogador " + ((jogador)%2 + 1) + " ganhou! Diagonal preenchida!";

 //Diagonal
 soma=0;
 soma = tabuleiro[0][2]+tabuleiro[1][1]+tabuleiro[2][0];
 if(soma==3 || soma==-3)
   aviso.innerHTML="Jogador " + ((jogador)%2 + 1) + " ganhou! Diagonal preenchida!";
}

function reiniciar() {
    // Limpar o tabuleiro (defina todas as células como vazias)
    for (let i = 0; i < 3; i++) {
        for (let j = 0; j < 3; j++) {
            tabuleiro[i][j] = 0;
        }
    }

    // Reiniciar o jogador para 1
    jogador = 1;

    // Limpar o aviso
    aviso.innerHTML = '';

    // Atualizar a exibição do tabuleiro
    exibe();
}