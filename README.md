# SAMS 1.0 Beta

##Sistema de Automação para Mesas de Sinuca

## Visão Geral
Este projeto tem como objetivo automatizar e gerenciar mesas de sinuca utilizando um dispositivo baseado em ESP32 com funcionalidades de crédito via moedeiro, noteiro e pagamento via PIX. O sistema conta com comunicação via Wi-Fi e backup 3G, opera com bateria recarregável e possui painel administrativo completo para controle da empresa e dos estabelecimentos parceiros.

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

