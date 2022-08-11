<h1 align="center">Meu Campeonato</h1>
<h5 align="center">Simulador de campeonatos</h5>

### Descrição do projeto
``Nota pessoal``: Este é meu <strong>primeiro projeto</strong> utilizando [Laravel](https://laravel.com/) como framework.</br></br>
Consiste em um sistema que permite o usuário cadastrar 8 times em um campeonato, o sistema simulará os resultados e retornará um campeão no final das fases (Quartas, semifinais e finais).

`Funcionalidade 1`: Cadastrar times no banco de dados;</br>
`Funcionalidade 2`: Simular as partidas, chaveamento e fases do campeonato;</br>
`Funcionalidade 3`: Define um campeão;</br>
`Funcionalidade 4`: Guarda o campeonato em um histórico;</br>


<h3> ✔️ Técnicas e tecnologias utilizadas </h3>

- ``PHP``
- ``Laravel``
- ``PhpStorm IDEA``
- ``Sqlite``
- ``Eloquent``
- ``Bootstrap``


### Definição da estrutura de dados

- Defini 3 tabelas principais que se relacionam entre si.</br>
![Modelo do banco](https://github.com/hallisonbrancalhao/Meu-Campeonato/blob/master/assets/modelo-banco.png?raw=true) </br>

- Criei as migrations baseadas neste modelo.</br>

![Migrations](https://github.com/hallisonbrancalhao/Meu-Campeonato/blob/master/assets/migrations.png?raw=true) </br>

- Para criar as tabelas no banco de dados:
```
php artisan migrate
```
- ##### Tabelas criadas

![Tabelas](https://github.com/hallisonbrancalhao/Meu-Campeonato/blob/master/assets/tabelas.png?raw=true) </br></br>

### Telas e usabilidade

- Ao abrir o programa, será apresentada a view index
![index](https://github.com/hallisonbrancalhao/Meu-Campeonato/blob/master/assets/inicio.png?raw=true) </br>
</br>
</br>
- Não será possível inicial um campeonato sem que todos os times estejam cadastrados</br>
![Campos-required](https://github.com/hallisonbrancalhao/Meu-Campeonato/blob/master/assets/requisicao.png?raw=true) </br>
</br>
</br>
- Após o cadastro, será simulada de forma dinâmica através da view "tabela"</br>
![Simulacao-quartas](https://github.com/hallisonbrancalhao/Meu-Campeonato/blob/master/assets/view-quartas.png?raw=true) </br>
  </br>
  </br>
- E com isso a reenderização resultará na seguinte tela </br>
![Tela-quartas](https://github.com/hallisonbrancalhao/Meu-Campeonato/blob/master/assets/quartas.png?raw=true) </br>
  </br>
  </br>
- A lógica de desempate é a seguinte (por pênaltis)
``` 
public function desempate($gols)
    {
        $diferenca = 0;
        do{
            for($i = 0; $i < 5; $i++){
                $gols['casa'] = rand(0,1);
                $gols['visitante'] = rand(0,1);
                $diferenca += ($gols['casa'] - $gols['visitante']);
                if($diferenca === 2 || $diferenca === -2){
                    break;
                }
            }
        }while($diferenca === 2 || $diferenca === -2);
        return $gols;
    }
```
> Em desenvolvimento...
- A cada fase, o time vencedor receberá um UPDATE na fase que o mesmo possui
- Conforme a fase muda, a query para busca dos times também, por exemplo: Quartas de finais = "Todos os times com ```{fase=4}```", Semi finais = "Todos os times com `{fase=2}`" e assim por diante
![Update_fase](https://github.com/hallisonbrancalhao/Meu-Campeonato/blob/master/assets/updateFase.png?raw=true) </br>
  </br>
  </br>
- Por fim, será simulada a final e definido um campeão. Atribuindo o id do time campeão ao idCampeao na tabela do campeonato em vigência, e assim por diante.

![Apresentacao_campeao](https://github.com/hallisonbrancalhao/Meu-Campeonato/blob/master/assets/final.png?raw=true) </br>
  </br>
  </br>
<h1 align="center">🌎 Onde você me encontra? 🌍</h1>


<div align="center" >  
  <a href = "mailto:hallison.o.b@gmail.com"><img src="https://img.shields.io/badge/Gmail-D14836?style=for-the-badge&logo=gmail&logoColor=white" target="_blank"></a>
  <a href="https://www.linkedin.com/in/hallison-brancalhao/" target="_blank"><img src="https://img.shields.io/badge/-LinkedIn-%230077B5?style=for-the-badge&logo=linkedin&logoColor=white" target="_blank"></a> 
</div>
