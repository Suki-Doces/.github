# Suki Doces - Organization

<h1> 🍬 Informações do nosso projeto – Loja Suki Doces <br> </h1>

<h2> 🖥️ Objetivo do nosso sistema:  <br><br></h2>
<p>
O projeto “Loja Suki Doces” foi criado com o objetivo de oferecer uma plataforma prática, intuitiva e encantadora para quem deseja comprar doces de forma rápida e segura.  
Nossa missão é proporcionar uma experiência agradável, organizada e eficiente tanto para jovens que buscam praticidade quanto para pais que precisam planejar festas e eventos.

Por meio de um catálogo completo, carrinho de compras funcional e opções modernas de pagamento, buscamos fortalecer a marca e transformar o processo de compra em algo simples e prazeroso, garantindo satisfação em cada etapa.
</p>

<img width="100%" src="https://github.com/SamirPaulb/SamirPaulb/blob/main/assets/rainbow-superthin.webp"/>

<h2> 🚻 Público-Alvo:  <br><br></h2>
<p>
A Loja Suki Doces atende consumidores que valorizam variedade, praticidade e rapidez.  
Nosso público-alvo inclui:

<b>• Jovens e universitários (18 a 25 anos):</b> procuram doces para consumo, pequenos eventos e presentes, priorizando agilidade e preço justo.  
<b>• Pais e responsáveis (35 a 45 anos):</b> buscam doces para festas infantis, datas comemorativas e compras em maior quantidade.

O site foi pensado para facilitar a navegação dessas pessoas, oferecendo um catálogo organizado, várias opções de compra e um atendimento acessível para diferentes necessidades.
</p>

<img width="100%" src="https://github.com/SamirPaulb/SamirPaulb/blob/main/assets/rainbow-superthin.webp"/>

<h2> 🏪 Funcionalidades do Sistema: <br><br></h2>

• Catálogo completo com imagens, descrição, preço e disponibilidade. <br>
• Busca e filtros por categorias, tipos de doces ou faixa de preço. <br>
• Carrinho de compras com cálculo automático do total. <br>
• Finalização de pedido com pagamento via Pix, cartão ou boleto. <br>
• Envio de confirmação por e-mail ou WhatsApp. <br>
• Acompanhamento do status do pedido. <br>
• Área administrativa para gerenciar produtos, estoque e pedidos. <br>
• Relatórios de vendas e produtos mais pedidos. <br>
• Sistema conectado ao backend em PHP + MySQL. <br>
• Navegação simulada via protótipo no Figma. <br>

<img width="100%" src="https://github.com/SamirPaulb/SamirPaulb/blob/main/assets/rainbow-superthin.webp"/>

<h2> 🚀 REQUISITOS FUNCIONAIS <br><br></h2>

| Funcionais ✔️  | Não Funcionais ❌ |
| ------------- | ----------------- |
| Cadastro e login de clientes. | Sistema responsivo (desktop, tablet e celular). |
| Exibir catálogo de doces com imagens e preço. | Carregamento rápido (até 3 segundos). |
| Busca e filtro por categoria. | Senhas criptografadas e proteção de dados. |
| Adicionar e remover produtos do carrinho. | Compatibilidade com Chrome, Firefox, Edge e Safari. |
| Calcular total da compra. | Interface simples e intuitiva. |
| Finalizar pedido com pagamento digital. | |
| Enviar confirmação por e-mail/WhatsApp. | |
| Acompanhar status do pedido. | |
| Gerenciar produtos e estoque (admin). | |
| Gerar relatórios básicos (admin). | |

<img width="100%" src="https://github.com/SamirPaulb/SamirPaulb/blob/main/assets/rainbow-superthin.webp"/>

<h2> 📋 Regras de Negócio <br><br></h2>

• Compras acima de R$50 possuem frete grátis. <br>
• Produtos sem estoque não podem ser adicionados ao carrinho. <br>
• Cancelamento do pedido permitido até 2 horas após a compra. <br>
• Cupons e promoções podem ser aplicados no checkout. <br>
• Política de devolução segue o Código de Defesa do Consumidor. <br>

<img width="100%" src="https://github.com/SamirPaulb/SamirPaulb/blob/main/assets/rainbow-superthin.webp"/>

<h2> 🗂️ Estrutura do Banco de Dados <br><br></h2>

<p>
O banco de dados foi projetado para integrar todas as funcionalidades do sistema de forma segura e eficiente, garantindo que operações como cadastro de clientes, controle de estoque e pedidos ocorram sem erros.
</p>

<h3> 🔹 Tabelas Principais </h3>

1. <b>administradores</b> – Dados de acesso e identificação de administradores. <br>
2. <b>logs_admin</b> – Registro de ações administrativas (exclusão, alteração, etc.). <br>
3. <b>clientes</b> – Armazena dados pessoais e login dos clientes. <br>
4. <b>enderecos</b> – Múltiplos endereços vinculados a cada cliente. <br>
5. <b>categorias</b> – Agrupamento dos produtos (bolos, brigadeiros, combos…). <br>
6. <b>produtos</b> – Catálogo da loja (nome, descrição, preço, estoque, imagem). <br>
7. <b>cupons</b> – Gerenciamento de códigos promocionais. <br>
8. <b>pedidos</b> – Informações completas da compra. <br>
9. <b>itens_pedido</b> – Quais produtos estão em cada pedido e suas quantidades. <br>

<h3> 🔗 Relacionamentos </h3>

• <b>clientes → enderecos</b> (1:N) com exclusão em cascata. <br>
• <b>categorias → produtos</b> (organização do catálogo). <br>
• <b>clientes → pedidos</b> (histórico individual). <br>
• <b>pedidos → itens_pedido → produtos</b> (estrutura central da compra). <br>
• <b>pedidos → cupons</b> (gerenciamento de descontos). <br>
• <b>administradores → logs_admin</b> (rastreabilidade total). <br>

