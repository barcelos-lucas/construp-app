# 🧱 Backend - Construp

Este é o backend do sistema **Construp**, desenvolvido com **Laravel 11** e banco de dados **PostgreSQL**. O projeto adota os princípios de **Clean Architecture**, **SOLID** e **Clean Code**.

---

## ✅ Requisitos

Antes de iniciar, verifique se você possui instalado:

* PHP >= 8.2
* Composer
* PostgreSQL
* Node.js (apenas se for trabalhar com o frontend)

---

## ⚙️ Como rodar o projeto

### 1. Clone o repositório

```bash
git clone https://github.com/seu-usuario/construp-app.git
cd construp-app/apps/backend
```
### 2. Instale as dependências do Laravel
```bash
composer install
```


### 3. Copie o .env e configure as variáveis
```bash
cp .env.example .env

DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=construp
DB_USERNAME=postgres
DB_PASSWORD=suasenha

```

### 4. Gere a chave da aplicação
```bash
php artisan key:generate
```


### 5. Execute as migrations do banco
```bash
php artisan migrate

```
▶️ Rodando o servidor de desenvolvimento

```bash
php artisan serve
```
Acesse em: http://localhost:8000

🧱 Estrutura do projeto
A estrutura segue os princípios de Clean Architecture:

```bash
app/
├── Domain/
├── Application/
├── Infrastructure/
└── Http/
```
Cada módulo é separado por domínio e respeita as camadas de responsabilidade.

## 🧪 Qualidade e Boas Práticas

- Princípios **SOLID** e Clean Architecture
- Separação por camadas (Domain, Service, Controller)

---

📂 Extras

Frontend: consulte o diretório apps/frontend/ para o projeto Vue 3.
Docker (em breve): containerização futura para ambientes padronizados.


## 👤 Autor

Desenvolvido por **Lucas Barcelos** – [LinkedIn](https://www.linkedin.com/in/lucas-ba)

---