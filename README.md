# 🚀 GLPI Production Stack

Este repositório contém a configuração e o guia de deploy para o sistema GLPI 10 utilizando Docker Compose.

## 📂 Estrutura do Projeto

- `glpi-prod/`: Pasta principal com os arquivos de orquestração.
  - `docker-compose.yml`: Configuração dos serviços.
  - `config/`: Configurações persistentes do PHP/GLPI.
  - `files/`: Anexos, sessões e logs.
  - `marketplace/`: Plugins instalados.
  - `mysql/`: Dados do banco de dados MariaDB.
- `.env`: Variáveis de ambiente e senhas (não versionar dados reais).

---

## 🛠️ Pré-requisitos

Antes de iniciar, certifique-se de que o ambiente possui:
1. **Docker** e **Docker Compose** instalados.
2. Rede Docker `stack_network` criada (necessária para o compose).

---

## 🚀 Como Subir o Sistema (Passo a Passo)

### 1. Preparar a Rede
O stack utiliza uma rede externa chamada `stack_network`. Se ela ainda não existir, crie-a com:
```powershell
docker network create stack_network
```

### 2. Configurar Variáveis
Certifique-se de que o arquivo `.env` na raiz contém as credenciais desejadas.

### 3. Iniciar os Containers
Na raiz do projeto, execute:
```powershell
docker-compose up -d
```

### 4. Acessar o Sistema
Abra seu navegador em:
**URL:** [http://localhost:8080](http://localhost:8080)

---

## 🔐 Credenciais Padrão do GLPI

O GLPI cria os seguintes usuários por padrão. **Altere as senhas no primeiro acesso!**

| Usuário | Senha | Perfil |
| :--- | :--- | :--- |
| **glpi** | **glpi** | Administrador |
| **tech** | **tech** | Técnico |
| **normal** | **normal** | Usuário Comum |
| **post-only** | **post-only** | Apenas abertura de Tickets |

---

## 💾 Manutenção e Backup

### Fazer Backup
Para garantir a segurança dos seus dados, faça cópia das pastas `mysql`, `config`, `files` e `marketplace`.

### Atualizar o Sistema
1. Altere a `GLPI_VERSION` no arquivo `.env`.
2. Rode `docker-compose pull` e depois `docker-compose up -d`.
3. Siga as instruções de atualização na interface web do GLPI.

---

## ⚙️ Configurações Aplicadas (Best Practices)
- **GLPI Version**: Fixada em `10.0.14` (evita quebras automáticas).
- **PHP Memory Limit**: `512M`.
- **Upload Max Size**: `32M`.
- **Database**: MariaDB 10.11 LTS.
- **Log Rotation**: Máximo de 3 arquivos de 10MB para economizar disco.

---
*Gerado por Antigravity AI*
