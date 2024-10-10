# Fejlesztői környezet kijelző indikátor

## Telepítés

```bash
composer require nedal-network/enviroment-indicator
```

## Használat
Az oldalon található layout(ok) body részében el kell helyezni az alábbi kódrészletet
```php
...
<body>
    <x-enviroment-indicator/>
...
</body>
...
```

## Működés
Az oldal tetején középen megjelenik egy indikátor, ha a fejlesztői környezet aktív vagyis az .env fájlban a `APP_DEBUG=true` vagy `APP_ENV=local` szerepel
