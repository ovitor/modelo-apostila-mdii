# Modelo Apostila: e-Jovem 

Modelo de apostila baseado no template da [ABNTex2](https://github.com/abntex/abntex2) (Trabalho acadêmico). Esse modelo tem como objetivo
ser a base para as futuras apostilas do [programa e-jovem](http://www.projetoejovem.com.br) do Governo do Estado do Ceará. 

## Por onde começar?

1. Leia esse arquivo.
2. Tire suas dúvidas.
3. Ao trabalho!

## Estrutura
O projeto conta com uma estrutura fixa para facilitar a escrita da apostila:

```
modelo-dissertacao-ppgcc
├── capitulos
│   ├── cap1.tex
│   ├── ...
│   └── capn.tex
├── codigos 
├── figuras 
├── tabelas 
├── utils 
├── main.tex
...
├── README.md
└── referencias.bib
```

  - Todo capítulo deve ser inserido no diretório `capitulos`;
  - As figuras devem ser salvas no diretório `figuras/imagens`;
  - Se a apostila a ser escrita, tiver códigos (php, python, sql, javascript), estes devem ser colocados dentro de 
  `codigos`. A separação por capítulo é opcional;
  - As tabelas no `LaTex` são grandes, portanto, separe-as no diretório `tabelas`;
 maneira você tem um projeto mais organizado.
  - Diretório `utils` contém arquivos importantes:
    - `ejovem-modelo.sty`: contém comandos `LaTeX` utilizado em todas as apostilas, configurações gerais e facilitadores;
    - `pacotes.tex`: contém as chamadas dos pacotes necessários para a compilação do arquivo principal; e
    - `ejovem-programacao-web.sty`: contém comandos relacionados a apostila de programação web (que está servindo de base
    para o modelo).

Outros diretórios como `anexos` e `apendices` e o arquivo `referencias.bib` não estão sendo utilizados até o 
momento (isso pode mudar).

## Compilando 
Você vai precisar do `LaTeX` instalado na sua máquina (procure a versão certa para o seu sistema operacional). O
arquivo a ser compilado é nomeado de `main.tex`. Não tente compilar o capítulo sozinho (vai dar erro).
Após a compilação você deve ter no mesmo diretório da apostila, o arquivo `main.pdf`.

## Facilitadores
Facilitadores são comandos que facilitam o uso de outros comandos. Como por exemplo, a inclusão
de imagens. Dois comandos foram criados para simplificar essa inclusão. Os comandos são
`\figurasimples` e `\figuradupla`.

O comando `\figurasimples` recebe 3 parâmetros. 

```
% sintaxe:
\figurasimples{nome-do-arquivo}{Legenda da imagem}{tamanho}

% exemplo:
\figurasimples{logo-ifce-sem-nome}{Logotipo do IFCE sem nome}{4cm}
```

O comando `\figuradupla` recebe 4 parâmetros.
```
% sintaxe:
\figuradupla{nome-do-arquivo-1}{Legenda da imagem 1}
{nome-do-arquivo-2}{Legenda da imagem 2}

% exemplo:
\figuradupla{logo-ifce-sem-nome}{Logotipo do IFCE sem nome}
{logo-ifce-padrao}{Logotipo do IFCE padrão}
```

## Dúvidas?
 - [Vitor Carvalho](mailto:vitorcarvalhoml@gmail.com)