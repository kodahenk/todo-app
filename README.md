# Todo App

Kullanıcıların register/login olduğu ve kendi todo listlerini gördüğü uygulama.

Kullanımıyla ilgili video https://youtu.be/gUybUxdRnlk

## Docker İçin Hazırlıklar

```bash
# mysql
docker run --name mysql-server -p 3306:3306 -v /Users/devorhan/Desktop/my:/etc/mysql/conf.d -e MYSQL_ROOT_PASSWORD=test123 -d mysql

# phpmyadmin
docker run --name padmin -p 8080:80 --link mysql-server:db phpmyadmin/phpmyadmin
```

## Proje İçin Hazırlıklar

phpmyadmin user: root

phpmyadmin pass: test123

http://localhost:8080/ PHPMyAdmin ile **todo_app** adında veritanı oluşturun.

### Veritabanı Tabloları Oluşturmak İçin

```bash
php artisan migrate
```

### Tablolara Örnek Veri Eklemek İçin

15 Tane Demo task ekler

```bash
php artisan db:seed
```

### Projeyi Ayağı Kaldırmak için

```bash
php artisan serve
```

