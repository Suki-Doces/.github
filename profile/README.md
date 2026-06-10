# Suki Doces - Organization

## Sobre o Projeto

A **Suki Doces** é uma plataforma de e-commerce desenvolvida para oferecer uma experiência moderna, prática e segura na compra de doces e produtos para eventos. O sistema foi projetado para atender tanto consumidores que desejam realizar compras rápidas quanto clientes que precisam organizar festas e comemorações com eficiência.

A proposta é unir uma interface intuitiva, catálogo organizado, métodos de pagamento modernos e um painel administrativo completo para gerenciamento do negócio.

---

## Objetivo do Sistema

O principal objetivo da plataforma é proporcionar uma experiência de compra simples, agradável e eficiente, permitindo que os clientes encontrem produtos facilmente, realizem pedidos com segurança e acompanhem todo o processo até a entrega.

Além disso, o sistema oferece ferramentas administrativas para controle de estoque, gerenciamento de produtos, acompanhamento de pedidos e análise de vendas.

---

## Público-Alvo

### Jovens e Universitários (18 a 25 anos)

* Compras para consumo próprio;
* Presentes e pequenas comemorações;
* Busca por praticidade, rapidez e preços acessíveis.

### Pais e Responsáveis (35 a 45 anos)

* Organização de festas e eventos;
* Compras em maior volume;
* Necessidade de variedade, confiança e facilidade de pagamento.

---

## Principais Funcionalidades

### Área do Cliente

* Cadastro e autenticação de usuários;
* Catálogo completo de produtos;
* Busca e filtros por categorias;
* Carrinho de compras dinâmico;
* Finalização de pedidos;
* Pagamento via Pix, cartão e boleto;
* Acompanhamento do status dos pedidos;
* Histórico de compras.

### Área Administrativa

* Gerenciamento de produtos;
* Controle de estoque;
* Cadastro e edição de categorias;
* Gestão de pedidos;
* Controle de clientes;
* Relatórios de vendas;
* Dashboard administrativo;
* Sistema de notificações.

---

## Requisitos do Sistema

### Requisitos Funcionais

| Código | Descrição                             |
| ------ | ------------------------------------- |
| RF01   | Cadastro de clientes                  |
| RF02   | Login e autenticação                  |
| RF03   | Exibição do catálogo de produtos      |
| RF04   | Busca e filtros por categoria         |
| RF05   | Adicionar e remover itens do carrinho |
| RF06   | Cálculo automático do valor total     |
| RF07   | Finalização de pedidos                |
| RF08   | Processamento de pagamentos           |
| RF09   | Acompanhamento de pedidos             |
| RF10   | Gerenciamento de produtos             |
| RF11   | Controle de estoque                   |
| RF12   | Emissão de relatórios administrativos |

### Requisitos Não Funcionais

| Código | Descrição                                          |
| ------ | -------------------------------------------------- |
| RNF01  | Interface responsiva                               |
| RNF02  | Tempo de carregamento inferior a 3 segundos        |
| RNF03  | Criptografia de senhas                             |
| RNF04  | Proteção de dados dos usuários                     |
| RNF05  | Compatibilidade com Chrome, Firefox, Edge e Safari |
| RNF06  | Interface intuitiva e acessível                    |
| RNF07  | Disponibilidade contínua da aplicação              |

---

## Regras de Negócio

### RN01 - Frete Grátis

Pedidos acima de **R$ 50,00** recebem frete gratuito.

### RN02 - Controle de Estoque

Produtos sem estoque disponível não podem ser adicionados ao carrinho.

### RN03 - Cancelamento de Pedidos

O cancelamento pode ser realizado em até **2 horas após a confirmação da compra**.

### RN04 - Cupons Promocionais

Cupons e promoções podem ser aplicados durante o checkout.

### RN05 - Política de Devolução

As devoluções seguem as diretrizes do Código de Defesa do Consumidor.

---

## Estrutura do Banco de Dados

O banco de dados foi modelado para garantir integridade, desempenho e escalabilidade, permitindo que todas as operações da plataforma sejam realizadas de forma segura e eficiente.

### Tabelas Principais

| Tabela          | Descrição                           |
| --------------- | ----------------------------------- |
| administradores | Dados de acesso dos administradores |
| logs_admin      | Registro de ações administrativas   |
| clientes        | Informações dos clientes            |
| enderecos       | Endereços vinculados aos clientes   |
| categorias      | Categorias dos produtos             |
| produtos        | Catálogo de produtos                |
| cupons          | Controle de cupons promocionais     |
| pedidos         | Informações dos pedidos             |
| itens_pedido    | Produtos associados aos pedidos     |

---

## Relacionamentos

### Clientes → Endereços

* Um cliente pode possuir vários endereços.
* Exclusão em cascata configurada.

### Categorias → Produtos

* Uma categoria pode conter vários produtos.

### Clientes → Pedidos

* Um cliente pode realizar diversos pedidos.
* Mantém o histórico completo de compras.

### Pedidos → Itens do Pedido

* Um pedido possui um ou mais itens.
* Cada item está vinculado a um produto.

### Pedidos → Cupons

* Permite aplicação de descontos promocionais.

### Administradores → Logs

* Todas as ações administrativas ficam registradas para auditoria e rastreabilidade.

---

## Tecnologias Utilizadas

### Front-end

* Angular
* TypeScript
* HTML5
* CSS3

### Back-end

* Node.js
* Express.js
* Prisma ORM

### Banco de Dados

* MySQL

### Infraestrutura

* Vercel
* Render
* Cloudinary

---

## Arquitetura da Aplicação

O projeto segue uma arquitetura em camadas, promovendo organização, manutenção e escalabilidade.

### Estrutura Principal

```text
src/
├── controllers/
├── services/
├── routes/
├── middlewares/
├── prisma/
├── lib/
└── server.js
```

### Camadas

* **Controllers:** recebem e tratam as requisições.
* **Services:** concentram as regras de negócio.
* **Routes:** definem os endpoints da API.
* **Middlewares:** autenticação, validações e tratamento de erros.
* **Prisma ORM:** comunicação com o banco de dados.
* **MySQL:** armazenamento das informações.

---

## Objetivo Acadêmico

O projeto foi desenvolvido como uma aplicação completa de e-commerce, aplicando conceitos de:

* Desenvolvimento Web Full Stack;
* APIs REST;
* Banco de Dados Relacional;
* Arquitetura em Camadas;
* Autenticação e Autorização;
* Integração com serviços externos;
* Boas práticas de desenvolvimento de software.

---

## Equipe

Projeto desenvolvido para a organização e gestão da **Suki Doces**, com foco em proporcionar uma experiência moderna para clientes e administradores.


