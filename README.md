
# 🏗️ Construp — Gestão de Materiais para Construção

> Sistema de gerenciamento de materiais de construção, estruturado com foco em boas práticas de arquitetura de software, seguindo os princípios de Clean Architecture, SOLID e Clean Code.

---

## 📚 Sobre o Projeto

Este projeto foi desenvolvido como uma solução fullstack com foco profissional, aplicando os padrões que utilizamos em sistemas reais de produção:

- Frontend com Vue.js + Vite
- Backend com Laravel + PostgreSQL
- Arquitetura desacoplada e escalável
- Código organizado, testável e pronto para evoluir

---

## 📂 Estrutura do Projeto

```
construp/
├── apps/
│   ├── backend/       # API Laravel com Clean Architecture
│   └── frontend/      # SPA Vue.js 3 com Vite
├── /docker            # Docker config (nginx, db, etc.) 
├── README.md
```

---

## ⚙️ Tecnologias Utilizadas

### 📌 Backend
- >=PHP 8.x
- Laravel 10+
- PostgreSQL
- Clean Architecture
- Repository Pattern
- Validação com Form Requests
- Enum para domínios ricos

### 💻 Frontend
- Vue 3
- Vite
- Pinia (gerenciamento de estado)
- Axios (comunicação com API)

---

## 🚀 Como executar o projeto

### Backend (Laravel)
```bash
cd apps/backend
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
```

### Frontend (Vue.js)
```bash
cd apps/frontend
npm install
npm run dev
```

---

## 🧠 Padrões Aplicados

- Clean Architecture
- SOLID Principles
- Separation of Concerns
- Domain-Driven  Design(lightweight)
- Testabilidade e escalabilidade desde a base

---

## 🙋‍♂️ Autor
Desenvolvido por **Lucas Barcelos** – [LinkedIn](https://www.linkedin.com/in/lucas-ba)

---

## 📝 Licença

Este projeto está sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.
