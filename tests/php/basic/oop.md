# Aufgaben zum Thema objektorientiertes Programmieren

Der Basis Namespace für alle folgenden Beispiele ist `\NiceshopsDev\NiceAcademy\Tests\Basic`.

## UnitTest schreiben (~5min)
Erweitere den Testfall `NiceClassTest` um einen Test für die Methode `NiceClass::getString`.

## UnitTest mit Data Provider schreiben (~10min)
Erweitere den Testfall `NiceClassTest` um einen Test für die Methode `NiceClass::result` 
mit Hilfe der Anwendung eines Data Providers.

## Klasse erweitern (~15min)
Erstelle die Klasse `MyNiceClass` welche von der Klasse `NiceClass` ableitet.\
Die Methode `MyNiceClass::result` soll den String 'always be nice' zurückliefern.\
Achte dabei darauf so wenig Code wie möglich zu duplizieren.

Schreib weiters einen Unit Test welcher das erwartete Ergebnis überprüft.

## Interface implementieren (~15m)
Implementiere für die Klasse `NiceClass` das `\Countable` Interface (https://www.php.net/manual/en/class.countable).\
Als Ergebnis soll dabei die Anzahl der Zeichen vom Rückgabewert der Methode `NiceClass::result` verwendet werden.
```php
echo count(new NiceClass());     // 7
```

Überprüfe die korrekte Implementierung über entsprechende Unit Tests für die Klassen `NiceClass` und `MyNiceClass`.

## Methoden Sichtbarkeit ändern (~15m)
Die Methode `NiceClass::getString` soll von außerhalb der Instanz nicht mehr aufgerufen werden können.\
Achte weiters darauf, dass alle vorhandenen Unit Tests weiterhin funktionieren.\
 (Tipp: https://www.php.net/manual/en/class.reflectionmethod)
```php
$getStringMethod = new \ReflectionMethod($this->object, "getString");
```