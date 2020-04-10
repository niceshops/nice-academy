# Shop Refactoring und Unit Tests (~1h15m)

Der Basis Namespace für alle folgenden Beispiele ist `\NiceshopsDev\NiceAcademy\Tests\Advanced\Shop`.

## PriceItem Klasse Refactoring (~15m)
Bei genauerer Betrachtung der Klasse gibt es an zwei Stellen Potential für Verbesserungen:
- Eigenschaft `price`
- Methode `PriceItem::addPrice`

Nimm die deiner Meinung nach notwendigen Anpassungen vor und erweitere den Testfall `PriceItemTest` entsprechend.

## Product Klasse Refactoring (~1h)
Die Klasse `Product` repräsentiert ein einzelnes Produkt im Shop und besteht aus einer Produktnummer, einem Titel und dem Preis.\

### PriceItem Anwendung (~15m)
Für das Preis-Handling soll das `PriceItem` verwendet werden.

### String-Repräsentation anpassen (~15m)
Weiters soll die Methode `Product::__toString` einen String nach folgendem Schema zurückliefern:\
`#<PRODUCT_NUMBER> <PRODUCT_TITLE>, EUR <PRODUCT_PRICE #,##>`\
Der Preis soll dabei auf 2 Kommastellen gerundet werden.\
Passe die Methode `Product::__toString` entsprechend an und erweitere den Testfall `ProductTest` um einen Test für die Methode `Product::__toString`.

### Produktvergleich optimieren (~30m)
Über die Methode `Product::hasSameNumber` kann überprüft werden ob zwei Produkte dieselbe Produktnummer aufweisen.\
Die Vergleichslogik dazu ist aktuell direkt in der Methode implementiert, obwohl es dafür eine eigene Klasse `ProductComparator` gibt.\

Wende für den Vergleich in der Methode `Product::hasSameNumber` die Klasse `ProductComparator` entsprechend an.\
Achte dabei darauf das die Funktionalität der Methode `Product::hasSameNumber` erhalten bleibt.\
Überprüfe deine Implementierung anhand von entsprechenden Unit Tests.