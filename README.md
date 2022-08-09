<h1 align="center">Meu Campeonato</h1>
<h2 align="center">Simulador de campeonato</h2>

<h3> Descrição do projeto </h3>
Nota pessoal: Este é meu <strong>primeiro projeto</strong> utilizando Laravel com PHP </br></br>
Consiste em um sistema que permite o usuário cadastrar 8 times em um campeonato, o sistema simulará os resultados e retornará um campeão no final das fases (Quartas, semifinais e finais).

`Funcionalidade 1`: Cadastrar times no banco de dados;</br>
`Funcionalidade 2`: Simular as partidas, chaveamento e fases do campeonato;</br>
`Funcionalidade 3`: Define um campeão;</br>
`Funcionalidade 4`: Guarda o campeonato em um histórico;</br>


<h3> ✔️ Técnicas e tecnologias utilizadas </h3>

- ``PHP``
- ``Laravel``
- ``PhpStorm IDEA``
- ``sqlite``
- ``Bootstrap``


## Definição da estrutura de dados

- Defini 3 tabelas principais que se relacionam entre si.</br>
![Modelo do banco](https://github.com/hallisonbrancalhao/Meu-Campeonato/blob/master/assets/modelo-banco.png?raw=true) </br>

- Criei as migrations baseadas neste modelo.</br>
![Modelo do banco](https://github.com/hallisonbrancalhao/Meu-Campeonato/blob/master/assets/migrations.png?raw=true) </br>

- O projeto possui o padrão MVC estabelecido

## Telas e usabilidade

- Ao abrir o programa, será apresentada a view index
  ![Modelo do banco](https://github.com/hallisonbrancalhao/Meu-Campeonato/blob/master/assets/inicio.png?raw=true) </br>
- Não será possível inicial um campeonato sem que todos os times estejam cadastrados</br>
  ![Modelo do banco](https://github.com/hallisonbrancalhao/Meu-Campeonato/blob/master/assets/requisicao.png?raw=true) </br>
- Após o cadastro, será simulada de forma dinâmica através da view "tabela"</br>
  ![Modelo do banco](https://github.com/hallisonbrancalhao/Meu-Campeonato/blob/master/assets/view-quartas.png?raw=true) </br>
- E com isso a reenderização resultará na seguinte tela </br>
![Modelo do banco](https://github.com/hallisonbrancalhao/Meu-Campeonato/blob/master/assets/quartas.png?raw=true) </br>
- A cada fase, o time vencedor receberá um UPDATE na fase que o mesmo possui
- Conforme a fase muda, a query para busca dos times também, por exemplo: Quartas de finais = "Todos os times com {fase=4}", Semi finais = "Todos os times com {fase=2}" e assim por diante
- Por fim, será simulada a final e definido um campeão. Atribuindo o id do time campeão ao idCampeao na tabela do campeonato em vigência, e assim por diante.
  ![Modelo do banco](https://github.com/hallisonbrancalhao/Meu-Campeonato/blob/master/assets/final.png?raw=true) </br>

<h1 align="center">🌎 Onde você me encontra? 🌍</h1>


<div align="center" >  
  <a href = "mailto:hallison.o.b@gmail.com"><img src="https://img.shields.io/badge/Gmail-D14836?style=for-the-badge&logo=gmail&logoColor=white" target="_blank"></a>
  <a href="https://www.linkedin.com/in/hallison-brancalhao/" target="_blank"><img src="https://img.shields.io/badge/-LinkedIn-%230077B5?style=for-the-badge&logo=linkedin&logoColor=white" target="_blank"></a> 
</div>
