# AthlonFit

AthlonFit é um projeto web estático com suporte a back-end em PHP, desenvolvido para representar a presença online de uma academia. A aplicação contempla páginas institucionais, galeria de imagens, formulário de contato e integração com banco de dados via scripts PHP.

> Este site foi criado como parte da disciplina de Desenvolvimento Web.

## Índice

- [Características](#características)
- [Tecnologias Utilizadas](#tecnologias-utilizadas)
- [Como Executar](#como-executar)
- [Estrutura do Projeto](#estrutura-do-projeto)
- [Contribuição](#contribuição)
- [Licença](#licença)

---

## Características

- **Páginas institucionais**: Informações sobre a academia, horários, planos, equipe, etc.
- **Galeria de imagens**: Exibição de fotos das instalações e eventos.
- **Formulário de contato**: Permite que visitantes enviem mensagens diretamente pelo site.
- **Integração com banco de dados**: Scripts PHP para gerenciar formulários e possíveis funcionalidades dinâmicas.
- **Layout responsivo com Bootstrap**: Utilização do framework Bootstrap para facilitar a criação de um design moderno e adaptável.

## Tecnologias Utilizadas

- **HTML** (74.3%): Estrutura das páginas web.
- **PHP** (22.5%): Back-end para formulários e integração com banco de dados.
- **CSS** (2.4%): Estilização das páginas.
- **JavaScript** (0.8%): Funcionalidades interativas.
- **Bootstrap**: Framework CSS para facilitar o desenvolvimento de layouts responsivos e modernos.

## Como Executar

1. **Pré-requisitos**
   - Servidor web com suporte a PHP (ex: Apache, XAMPP, WAMP, etc.)
   - PHP instalado (versão 7.x ou superior recomendada)
   - Banco de dados MySQL (se aplicável)

2. **Clonar o repositório**
   ```bash
   git clone https://github.com/MarcosOki/AthlonFit.git
   ```

3. **Configurar o ambiente**
   - Copie os arquivos para o diretório do seu servidor web.
   - Configure as credenciais do banco de dados nos scripts PHP, se necessário.

4. **Acessar a aplicação**
   - Abra seu navegador e acesse `http://localhost/AthlonFit` ou o endereço configurado no seu servidor.

## Estrutura do Projeto

```
AthlonFit/
├── index.html
├── sobre.html
├── galeria.html
├── contato.html
├── assets/
│   ├── css/
│   ├── js/
│   └── images/
├── scripts/
│   └── contato.php
└── README.md
```

- **assets/**: Arquivos estáticos (CSS, JS, imagens)
- **scripts/**: Scripts PHP para integração com o back-end
- **index.html**: Página inicial
- **sobre.html**: Sobre a academia
- **galeria.html**: Galeria de imagens
- **contato.html**: Página de contato

## Contribuição

1. Fork este repositório
2. Crie uma branch com sua feature (`git checkout -b minha-feature`)
3. Commit suas alterações (`git commit -m 'Adiciona nova feature'`)
4. Push para a branch (`git push origin minha-feature`)
5. Abra um Pull Request

## Licença

Este projeto está sob a licença [MIT](LICENSE).
