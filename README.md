Инструкция по развёртыванию
1) Копирование репозитория:
    Выберите на локальном хранилище директорию под проект, перейдите в неё и выполните команду "git clone https://github.com/Kavik22/infoservice_test_task.git"
2) Настройка .env:
    На основе файла .env.example создайте файл .env "cp .env.example .env"
3) Сборка и запуск контейнеров:
    Выполните "docker-compose up -d"
4) Настройка работы приложения и базы данных:
    Выполните последовательно "docker exec -it infoservice_app bash", "chmod 777 -R ./", "composer install", "php artisan key:generate", "php artisan migrate", "php artisan db:seed"
