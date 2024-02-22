# Beüzemelés

```.env.example```-t le kell másolni ```.env```-nek. 
```bash
$ copy .env.example .env
```
Be kell állítani a következőket a ```.env```-en belül. 
```DB_HOST``` Szerver IP-je. 
```DB_DATABASE``` Adatbázis neve. 
```DB_USERNAME``` Szerveren megadott név. 
```DB_PASSWORD``` Szerveren megadott jelszó. 
Többi beállítás marad alapértelmezett.

## Terminálban
### Függőségek letöltése, Migrációk elindítása
```bash
$ composer install
...
$ php artisan migrate
...
$ php artisan db:seed
```
### Project elindítása
```bash
$ php artisan serve
```