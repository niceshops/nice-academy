# Shop Refactoring und Unit Tests (~1h45m)

Der Basis Namespace für alle folgenden Beispiele ist `\NiceshopsDev\NiceAcademy\Tests\Advanced\Shop`.\
Alle Klassen zu den Testaufgaben befinden sich im Ordner [src/Shop](src/Shop) bzw. [test/Shop](test/Shop) für die Unit Tests.

## PriceItem Klasse Refactoring (~15m)
Bei genauerer Betrachtung der Klasse [`PriceItem`](src/Shop/PriceItem.php) gibt es an zwei Stellen Potential für Verbesserungen:
- Eigenschaft [`price`](src/Shop/PriceItem.php)
- Methode [`PriceItem::addPrice`](src/Shop/PriceItem.php)

Nimm die deiner Meinung nach notwendigen Anpassungen vor und erweitere den Testfall [`PriceItemTest`](test/Shop/PriceItemTest.php) entsprechend.

## Product Klasse Refactoring (~1h)
Die Klasse [`Product`](src/Shop/Product.php) repräsentiert ein einzelnes Produkt im Shop und besteht aus einer Produktnummer, einem Titel und dem Preis.

### PriceItem Anwendung (~15m)
Für das Preis-Handling soll das [`PriceItem`](src/Shop/PriceItem.php) verwendet werden.

### String-Repräsentation anpassen (~15m)
Weiters soll die Methode [`Product::__toString`](src/Shop/Product.php) einen String nach folgendem Schema zurückliefern:\
`#<PRODUCT_NUMBER> <PRODUCT_TITLE>, EUR <PRODUCT_PRICE #,##>`\
Der Preis soll dabei auf 2 Kommastellen gerundet werden.\
Passe die Methode [`Product::__toString`](src/Shop/Product.php) entsprechend an und erweitere den Testfall [`ProductTest`](test/Shop/ProductTest.php) um einen Test für die Methode `Product::__toString`.

### Produktvergleich optimieren (~30m)
Über die Methode [`Product::hasSameNumber`](src/Shop/Product.php) kann überprüft werden ob zwei Produkte dieselbe Produktnummer aufweisen.\
Die Vergleichslogik dazu ist aktuell direkt in der Methode implementiert, obwohl es dafür eine eigene Klasse [`ProductComparator`](src/Shop/ProductComparator.php) gibt.

Wende für den Vergleich in der Methode [`Product::hasSameNumber`](src/Shop/Product.php) die Klasse [`ProductComparator`](src/Shop/ProductComparator.php) entsprechend an.\
Achte dabei darauf das die Funktionalität der Methode [`Product::hasSameNumber`](src/Shop/Product.php) erhalten bleibt.\
Überprüfe deine Implementierung anhand entsprechender Unit Tests.

## ProductGroup Klasse Refactoring (~30m)
Die Klasse [`ProductGroup`](src/Shop/ProductGroup.php) repräsentiert eine Gruppe von Produkten.\
Es können beliebige Produkte hinzugefügt und wieder entfernt werden sowie diverse aggregierte Informationen (Anzahl) abgefragt werden.

### Produkte entfernen (~15m)
Bei genauerer Betrachtung der Methode [`ProductGroup::removeProduct`](src/Shop/ProductGroup.php) besteht die Möglichkeit für eine Performance-Optimierung.\
Nimm die deiner Meinung nach notwendigen Anpassungen an der Methode vor und implementiere im Testfall [`ProductGroupTest`](test/Shop/ProductGroupTest.php) für die Methode folgende Unit Tests:
- Produktliste ist `[]`; 1x Produkt A entfernen; Produktliste ist `[]`.
- Produktliste ist `[ "Produkt A", "Produkt B" ]`; Produkt A entfernen; Produktliste ist `[ "Produkt B" ]`. 
- Produktliste ist `[ "Produkt A", "Produkt B" ]`; Produkt B entfernen; Produktliste ist `[ "Produkt A" ]`. 
- Produktliste ist `[ "Produkt A", "Produkt B", "Produkt A" ]`; Produkt A entfernen; Produktliste ist `[ "Produkt B" ]`.

### Anzahl der Produkte (~15m)
Die Methode [`ProductGroup::getProductCount`](src/Shop/ProductGroup.php) berechnet die Anzahl für das an die Methode übergebene Produkt in der Produktgruppe.\
Für den Produktvergleich soll die Klasse [`ProductComparator`](src/Shop/ProductComparator.php) verwendet werden.\
Bau die Methode für die Anwendung der Klasse [`ProductComparator`](src/Shop/ProductComparator.php) entsprechend um.\
Überprüfe deine Implementierung anhand entsprechender Unit Tests.