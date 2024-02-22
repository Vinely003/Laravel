# Beüzemelés

```.env.example```-t le kell másolni ```.env```-nek majd be kell állítani a következőket 
```DB_HOST``` Szerver IP-je 
```DB_DATABASE``` Adatbázis neve
```DB_USERNAME``` Szerveren megadott név
```DB_PASSWORD``` Szerveren megadott jelszó
Többi beállítás marad alapértelmezett

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