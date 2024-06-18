# Send Request API Service

Installation
-
1. Копировать ``.env.example`` в корне, создав ``.env``
2. Настроить окружение в .env файле
3. Установить зависимости Composer
``` bash
composer install
```
4. Создать БД
- Накатить миграции
```bash
php artisan migrate
```
5. Сгенерировать ключ приложения
```bash
php artisan key:generate
```