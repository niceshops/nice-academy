# Shop Cart Implementierung (2h)

> __Hinweis__: Vor der Durchführung dieser Testaufgaben ist es empfehlenswert zuvor die Aufgaben unter [Shop Refactoring und Unit Tests](shop.md) zu machen.

Der Basis Namespace für alle folgenden Beispiele ist `\NiceshopsDev\NiceAcademy\Tests\Advanced\Shop`.\
Alle Klassen zu den Testaufgaben befinden sich im Ordner [src/Shop](src/Shop) bzw. [test/Shop](test/Shop) für die Unit Tests.

## Produkte anhand der Nummer von einer Produktgruppe entfernen  (~30m)
Als Vorbereitung und für eine kurze Beschreibung der Klasse [`ProductGroup`](src/Shop/ProductGroup.php) siehe unter [ProductGroup Klasse Refactoring](shop.md#productgroup-klasse-refactoring-30m).\

Für die Klasse [`ProductGroup`](src/Shop/ProductGroup.php) soll die Möglichkeit geschaffen werden Produkte anhand der Produktnummer aus der Produktgruppe entfernen zu können.\
Implementiere dazu die Methode `ProductGroup::removeProducts_with_Number(string $number, int $maxCount = null)`.
Überprüfe deine Implementierung anhand entsprechender Unit Tests. 

## PriceAwareInterface implementieren (~30m)
Um über ein einheitliches Interface den aktuellen Preis von einem Produkt oder Produktgruppe zu erhalten soll folgendes Interface für die Klassen [`Product`](src/Shop/Product.php) und [`ProductGroup`](src/Shop/ProductGroup.php) implementiert werden:
```php
interface PriceAwareInterface {
    public function getPrice(): PriceItem;
}
```
Zusätzlich soll über einen neuen Testfall `PriceAwareTest` die Implementierung des Interfaces für Produkte und Produktgruppen getestet werden.

## Cart implementieren (~30m)
Die Klasse [`Cart`](src/Shop/Cart.php) soll grundsätzlich den Warenkorb in einem Shopsystem darstellen.
Im ersten Schritt soll die Klasse um die Anwendung des [`CartInterface`](src/Shop/CartInterface.php) erweitert werden.\
Dabei ist darauf zu achten so wenig Code wie möglich zu schreiben und bereits bestehende Klassen des Shopsystems zu verwenden.\
Weiters ist die Funktionalität des [`CartInterface`](src/Shop/CartInterface.php) in einem neuen Testfall zu überprüfen. Zum Beispiel folgendes Testszenario:
- Warenkorb hat initial folgenden Inhalt:
  - 3x Produkt A, EUR 10,00
  - 2x Produkt B, EUR 15,00
  - 1x Produkt C, EUR 20,00
- 1x Produkt B entfernen
- Warenkorbwert (`CartInterface::getGrandTotal`) sollte EUR 65,00 betragen

## unterschiedliche Produkttypen (~30m)
Aktuell wird ein Produkt durch die Klasse [`Product`](src/Shop/Product.php) im gesamten Shopsystem repräsentiert. In Zukunft soll es jedoch möglich sein unterschiedliche Produkttypen über eigene Klassen abbilden zu können. Alle Produkttypen haben dabei jedoch einen gemeinsamen Nenner wie Produktnummer, Titel und Preis.
Entwickle eine entsprechende Klassenstruktur und versuche diese soweit wie möglich in das aktuelle System zu integrieren.\
Achte bei der Implementierung darauf das System lauffähig zu halten. So sollten am Ende deiner Umsetzung alle Unit Tests funktionieren.