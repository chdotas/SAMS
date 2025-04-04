# SAMS 1.0 Beta  
### Sistema de Automação para Mesas de Sinuca

## Visão Geral

O **SAMS 1.0 (Sistema de Automação para Mesas de Sinuca)** é uma solução completa para controle, monitoramento e gestão de mesas de sinuca em estabelecimentos comerciais. O sistema utiliza um dispositivo embarcado baseado em **ESP32**, que permite o gerenciamento automatizado da liberação da mesa por meio de créditos inseridos via **moedeiro, noteiro ou pagamento via PIX**.

Com conectividade via **Wi-Fi** e suporte a **módulo 3G** como alternativa, o dispositivo mantém comunicação constante com um **servidor central** para registro de dados, envio de comandos remotos e sincronização de informações. Alimentado por **bateria recarregável**, o SAMS é projetado com foco em **baixo consumo de energia** para garantir longa autonomia.

O sistema é complementado por um **painel administrativo web**, dividido em dois níveis de acesso:  
- **Administração da empresa** (gestão de todas as mesas e estabelecimentos)  
- **Gerenciamento de estabelecimentos parceiros** (controle individual de cada local)  

Essa estrutura garante controle total, relatórios financeiros completos, geolocalização das mesas, integração com pagamentos e a automação inteligente da operação das mesas de sinuca.

---

## Funcionalidades Principais

### Dispositivo (ESP32)
- Entrada de créditos via moedeiro, noteiro e PIX
- Exibição de informações via display OLED ou TFT
- Liberação automática da gaveta com bolas
- Armazenamento local de dados (créditos, contadores, status)
- Comunicação com servidor via Wi-Fi e fallback 3G
- Otimização de energia com modo deep sleep

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

