# Objektorientierte Programmierung

Der Basis Namespace für alle folgenden Beispiele ist `\NiceshopsDev\NiceAcademy\Tests\Basic`.\
Alle Klassen zu den Testaufgaben befinden sich im Ordner [src](src) bzw. [test](test) für die Unit Tests.

## UnitTest schreiben (~5min)
Erweitere den Testfall [`NiceClassTest`](test/NiceClassTest.php) um einen Test für die Methode [`NiceClass::getString`](src/NiceClass.php).

## UnitTest mit Data Provider schreiben (~10min)
Erweitere den Testfall [`NiceClassTest`](test/NiceClassTest.php) um einen Test für die Methode [`NiceClass::result`](src/NiceClass.php)
mit Hilfe der Anwendung eines Data Providers.

## Klasse erweitern (~15min)
Erstelle die Klasse `MyNiceClass` welche von der Klasse [`NiceClass`](src/NiceClass.php) ableitet.\
Die Methode `MyNiceClass::result` soll den String 'always be nice' zurückliefern.\
Achte dabei darauf so wenig Code wie möglich zu duplizieren.

Schreib weiters einen Unit Test welcher das erwartete Ergebnis überprüft.

## Interface implementieren (~15m)
Implementiere für die Klasse [`NiceClass`](src/NiceClass.php) das `\Countable` Interface (https://www.php.net/manual/en/class.countable).\
Als Ergebnis soll dabei die Anzahl der Zeichen vom Rückgabewert der Methode [`NiceClass::result`](src/NiceClass.php) verwendet werden.
```php
echo count(new NiceClass());     // 7
```

Überprüfe die korrekte Implementierung über entsprechende Unit Tests für die Klassen [`NiceClass`](src/NiceClass.php) und `MyNiceClass`.

## Methoden Sichtbarkeit ändern (~15m)
Die Methode [`NiceClass::getString`](src/NiceClass.php) soll von außerhalb der Instanz nicht mehr aufgerufen werden können.\
Achte weiters darauf, dass alle vorhandenen Unit Tests weiterhin funktionieren.\
 (Tipp: https://www.php.net/manual/en/class.reflectionmethod)
```php
$getStringMethod = new \ReflectionMethod($this->object, "getString");
```