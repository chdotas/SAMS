# SAMS 1.0 Beta  
### Sistema de Automação para Mesas de Sinuca

## Visão Geral

O **SAMS 1.0 (Sistema de Automação para Mesas de Sinuca)** é uma solução completa para controle, monitoramento e gestão de mesas de sinuca em estabelecimentos comerciais. O sistema utiliza um dispositivo embarcado baseado em **ESP32**, que permite o gerenciamento automatizado da liberação da mesa por meio de créditos inseridos via **moedeiro, noteiro ou pagamento via PIX**.

Com conectividade via **Wi-Fi** e suporte a **módulo de comunicação móvel 4G LTE** como alternativa, o dispositivo mantém comunicação constante com um **servidor central** para registro de dados, envio de comandos remotos e sincronização de informações. Alimentado por **bateria recarregável**, o SAMS é projetado com foco em **baixo consumo de energia** para garantir longa autonomia.

O sistema é complementado por um **painel administrativo web**, dividido em dois níveis de acesso:

- **Administração da empresa** (gestão de todas as mesas e estabelecimentos)
- **Gerenciamento de estabelecimentos parceiros** (controle individual de cada local)

Essa estrutura garante controle total, relatórios financeiros completos, geolocalização das mesas, integração com pagamentos e a automação inteligente da operação das mesas de sinuca.

---

# Manual de Uso – SAMS 1.0
## Sistema de Automação para Mesas de Sinuca

Seja bem-vindo!  
Este sistema foi desenvolvido para facilitar o uso das mesas de sinuca, oferecendo praticidade, segurança e controle total para o estabelecimento e o cliente.

---

## 📋 O que o sistema faz?

- Permite que o cliente **libere a mesa automaticamente** após o pagamento.
- Aceita **fichas, cédulas** ou **PIX**.
- Mostra no visor quantos créditos foram inseridos.
- Libera a gaveta com as bolas após o pagamento.
- Envia as informações para o sistema da empresa para controle e relatórios.
- Funciona mesmo em locais sem Wi-Fi, pois também pode usar chip de celular (internet móvel).
- Funciona com **bateria**, mesmo sem energia por um bom tempo.

---

## 💳 Como pagar para usar a mesa?

### Opção 1 – Pagamento com Ficha:
1. Insira a ficha no moedeiro.
2. O visor mostrará quantos créditos você tem.
3. Quando atingir o valor necessário, a gaveta será liberada automaticamente.

### Opção 2 – Pagamento com Dinheiro:
1. Insira a cédula no noteiro (aparelho que puxa o dinheiro).
2. O visor será atualizado com o saldo.
3. Ao atingir o valor, a mesa será liberada.

### Opção 3 – Pagamento por PIX:
1. Toque no botão ou opção “Pagar com PIX”.
2. O visor mostrará um **QR Code**.
3. Escaneie com seu app do banco e realize o pagamento.
4. Após a confirmação (em poucos segundos), a mesa será liberada automaticamente.

---

## 🔐 Segurança e Controle

- O sistema é travado remotamente quando necessário.
- O dono do estabelecimento pode **ver relatórios, valores recebidos e fazer acertos** com a empresa responsável.
- Todo o funcionamento é registrado e pode ser auditado.

---

## ℹ️ Informações Adicionais

- O visor da mesa mostra:
  - Quantos créditos estão disponíveis
  - Se a mesa está bloqueada ou liberada
  - Mensagens com instruções

- Caso tenha algum problema:
  - Verifique se o visor está ligado
  - Confirme se há energia ou bateria
  - Fale com o responsável do local

---

## 🧠 Dicas

- O QR Code tem tempo de validade. Se expirar, gere um novo.
- O sistema desliga o visor e economiza bateria automaticamente. Basta inserir uma ficha ou tocar no botão para reativar.
- Fichas falsas ou dobradas podem não ser reconhecidas.

---

## ✅ Pronto para jogar?

Simplesmente pague com ficha, cédula ou PIX e aproveite sua partida.  
O sistema cuida do resto. Divirta-se!

---


## Funcionalidades Principais

### Dispositivo Embarcado (ESP32)

O módulo instalado em cada mesa de sinuca é responsável por realizar toda a automação local e comunicação com o servidor. As principais funcionalidades incluem:

- **Recebimento de Créditos**  
  Aceita pagamentos por meio de moedeiro (fichas), noteiro (cédulas) e PIX (via QR Code gerado pelo servidor).

- **Interface com o Usuário**  
  Exibe informações como saldo disponível, status da máquina, instruções e QR Code para pagamento, utilizando um display OLED ou TFT.

- **Liberação Automatizada da Mesa**  
  Ao atingir o valor mínimo em créditos, o sistema aciona automaticamente a trava ou gaveta de bolas, permitindo o uso da mesa.

- **Armazenamento Local Inteligente**  
  Guarda temporariamente dados essenciais, como:
  - Créditos inseridos
  - Contadores de uso
  - Últimos status de operação

- **Conectividade Redundante**  
  Comunicação constante com o servidor via Wi-Fi, com suporte a módulo 4G LTE opcional, garantindo operação mesmo em ambientes sem conectividade local.

- **Eficiência Energética**  
  Desenvolvido para operar com bateria recarregável, o sistema utiliza técnicas avançadas de economia de energia como o modo deep sleep, além do desligamento de periféricos em períodos de inatividade.

---

## Componentes Essenciais para o Projeto

### Simplicidade e Eficiência com Placa Integrada

Para garantir um sistema compacto, confiável e fácil de montar, a escolha por componentes integrados traz grandes vantagens. A utilização de uma placa ESP32 com relés embutidos reduz o número de conexões, economiza espaço e aumenta a robustez da instalação.

---

### 1. Módulo ESP32 com Relé Duplo Integrado (5V–60V)

**Motivo da escolha:**  
Essa placa reúne em um único módulo o microcontrolador ESP32 e dois relés de potência, otimizando o layout e eliminando a necessidade de montar relés externos.

**Benefícios:**
- ESP32-WROOM-32 integrado (Wi-Fi e Bluetooth)
- Dois relés de 250V AC / 10A integrados
- Alimentação flexível de 5V a 60V, ideal para aplicações com bateria
- Comunicação com servidores via Wi-Fi
- Permite controle direto de cargas como eletroímãs, solenóides e gavetas automáticas
- Reduz o número de componentes e pontos de falha

🔗 [Ver na Shopee](https://shopee.com.br/M%C3%B3dulo-De-Rel%C3%A9-Wi-Fi-De-Canal-Duplo-ESP32-WROOM-Placa-De-Desenvolvimento-Secund%C3%A1rio-DC5-60V-Fonte-De-Alimenta%C3%A7%C3%A3o-i.473262812.25891622684)

---

### 2. Display LCD Colorido SPI TFT de 2.4" com SD (ILI9341)

**Motivo da escolha:**  
Tela ideal para exibir créditos, mensagens de status e QR Codes para pagamentos via PIX.

**Benefícios:**
- Resolução de 240x320 pixels
- Comunicação via SPI (baixo uso de pinos)
- Suporte para imagens e gráficos (QR Code, ícones, texto)
- Compatível com a maioria das bibliotecas do ESP32

🔗 [Ver no Mercado Livre](https://produto.mercadolivre.com.br/MLB-3254322626-display-lcd-24-tft-spi-touch-ili9341-com-leitor-sd-arduino-_JM)

---

### 3. Placa PCB Fenolite Ilhada 6x8cm

**Motivo da escolha:**  
Usada para conectar o display e outros periféricos de forma fixa e segura, especialmente se houver expansão do sistema (buzzer, LEDs, sensor de gaveta, etc).

**Benefícios:**
- Estrutura resistente e organizada
- Suporte à soldagem de diversos componentes
- Alternativa segura a protoboards para uso final

🔗 [Ver no Mercado Livre](https://produto.mercadolivre.com.br/MLB-1832864841-placa-ilhada-fenolite-6x8cm-montagem-de-circuitos-eletrnicos-_JM)

---

### 4. Caixa Plástica para Circuito Eletrônico (100x74x39mm)

**Motivo da escolha:**  
Protege todo o sistema contra poeira, umidade e impactos. Ideal para ambientes comerciais ou públicos.

**Benefícios:**
- Material durável
- Dimensões ideais para a placa ESP32 com relé + display
- Visual limpo e fácil instalação em máquinas

🔗 [Ver no Mercado Livre](https://produto.mercadolivre.com.br/MLB-3803198282-caixa-plastica-para-projetos-eletronicos-100x74x39mm-kit-10-_JM)

---

### 5. Módulo de Comunicação Móvel 4G LTE (SIM7600)

**Motivo da escolha:**  
Esse módulo permite a comunicação com o servidor em locais onde o Wi-Fi não está disponível, funcionando como um canal alternativo de dados via rede móvel.

**Benefícios:**
- Compatível com o ESP32 via comunicação serial (UART)
- Suporte a redes 4G LTE, 3G e 2G (fallback automático)
- Slot para cartão SIM padrão (chip de operadora)
- Permite envio de dados via HTTP, MQTT e comandos AT
- Ideal para uso comercial em locais públicos e afastados

🔗 [Ver na Shopee](https://shopee.com.br/product/690112303/23107288650)

**Observação:**  
Este módulo é **opcional** e deve ser usado em conjunto com um chip com plano de dados ativo. Pode ser integrado por meio de comandos AT e alimentação externa, conforme as especificações do fabricante.

---

## Conclusão

A adoção da **placa ESP32 com relés integrados** torna o projeto mais compacto, robusto e fácil de replicar em escala. Com menos fios, menos soldas e menos módulos separados, o sistema ganha em confiabilidade e reduz significativamente o tempo de montagem.

Esse conjunto oferece um excelente equilíbrio entre desempenho, simplicidade e economia — ideal para aplicações comerciais que exigem estabilidade e manutenção mínima.




### Pagamento por PIX
- Geração de QR Code dinâmico via API
- Monitoramento do pagamento e liberação de crédito
- Registro e relatório de transações PIX

### Comunicação
- Envio de dados de uso, crédito, bateria, localização
- Recebimento de comandos remotos (bloqueio, reset, etc)

---





## Painel Administrativo Web (PHP + MySQL)

### Administração (Empresa)
- Gestão de todas as mesas
- Cadastro e gerenciamento de estabelecimentos parceiros
- Mapa com localização das mesas
- Controle e histórico de acertos/fechamentos financeiros
- Relatórios por período, forma de pagamento, uso e status

### Estabelecimento (Parceiro)
- Visualização de suas mesas
- Relatórios e movimentações
- Solicitação de suporte
- Acompanhamento de repasses

---

## Banco de Dados (Estrutura Principal)
- `usuarios`: admins e parceiros
- `estabelecimentos`: cadastro dos locais e contatos
- `mesas`: configuração, status, localização
- `transacoes`: registros de fichas, cédulas, PIX
- `pagamentos_pix`: controle e status dos pagamentos
- `comandos`: controle de ações remotas
- `eventos`: logs de atividade e falhas
- `acertos`: histórico de fechamentos e repasses

---

## Tecnologias Utilizadas
- ESP32 (C++ / Arduino Framework)
- Display OLED ou TFT
- PHP (API RESTful e Painel Web)
- MySQL / MariaDB
- HTML5, CSS3, Bootstrap / AdminLTE
- Módulo 3G (SIM800L / SIM7600)

---

## Etapas do Projeto

1. Definição da arquitetura geral
2. Escolha e testes dos componentes eletrônicos
3. Desenvolvimento do firmware ESP32
4. Criação da API e banco de dados
5. Integração com sistema de pagamento PIX
6. Desenvolvimento do painel web (admin e parceiro)
7. Implementação da geolocalização e mapas
8. Integração completa e testes reais
9. Validação dos relatórios e acertos financeiros
10. Documentação final e implantação

---

## Licença
Este projeto está licenciado sob os termos da MIT License.

---

## Contato
Para dúvidas ou sugestões, entre em contato com o desenvolvedor do sistema.

---

# Pagamento via PIX - Integração com Gerencianet

## Visão Geral

O sistema SAMS 1.0 permite que o cliente pague para liberar a mesa de sinuca via PIX, sem a necessidade de inserir fichas ou cédulas. Essa funcionalidade é feita através da API da **Gerencianet**, que gera um QR Code dinâmico para pagamento e notifica o sistema quando o valor é recebido.

---

## Como Funciona

1. O cliente escolhe a opção “Pagar com PIX” no display da mesa.
2. O dispositivo (ESP32) envia uma solicitação para o servidor gerar a cobrança.
3. O servidor cria uma cobrança na **API da Gerencianet**.
4. A Gerencianet retorna o **QR Code** (imagem base64) e o código "copia e cola".
5. O QR Code é exibido na tela da mesa.
6. O cliente faz o pagamento usando o app do banco.
7. A Gerencianet envia automaticamente uma **confirmação (webhook)** para o servidor.
8. O servidor valida o pagamento e avisa o ESP32 para liberar a mesa.

## Benefícios

- Pagamento sem contato
- Rápido e prático para o cliente
- Confirmação automática e segura
- Totalmente integrado com o sistema de créditos

---

## Observações

- É necessário ter uma conta Gerencianet com PIX habilitado.
- A autenticação usa **Client ID**, **Client Secret** e um **certificado .p12**.
- O sistema usa **cobranças dinâmicas com vencimento automático**.

---