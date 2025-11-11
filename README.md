# Projeto de Microsserviços com Docker, Nginx, PHP e MySQL

Este projeto demonstra uma arquitetura simples de **microsserviços** utilizando **Docker Compose**, com balanceamento de carga via **Nginx**, múltiplas instâncias de **PHP** e um banco **MySQL**.

## Como Executar

1️⃣ Suba os containers:

```bash
docker-compose up --build
```

2️⃣ Acesse no navegador:  
👉 **http://localhost:4500**

Cada atualização da página será direcionada a um container PHP diferente (via Nginx).

---

## O que o app faz

- Exibe a versão do PHP
- Conecta ao banco MySQL
- Insere registros aleatórios
- Mostra o hostname do container ativo

---

## Tecnologias

Docker, Nginx, PHP 8.1, MySQL 8.0

---
