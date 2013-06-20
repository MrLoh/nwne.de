# Markdown Leitfaden 

Eine Hauptüberschrift wird durch eine Raute gekennzeichnet. Bitte Erstelle in Normalfall nur eine Hauptüberschrift pro Seite. Und dies ist einfach ein Absatz mit Text. 

Um einen neuen Absatz zu beginnen, musst du einfach eine Leerzeile einfügen. Wenn keine Leerzeile eingefügt wird, werden die beiden Absätze formatiert, als ob sie einer wären. 

## Das Waren die Basics

Um eine Unterüberschrift zu erstellen füge zwei Rauten ein und so weiter. Überschritten 3. grades sind sicherlich manchmal sinnvoll zur Text strukturierung, mehr solltest du nicht verwenden, das wird dann ab da alles gleich dargestellt. 

###### Hervorhebung: 

Um Text *kursiv* zu setzen, klammere in einfach mit Sternchen ein. Um Text **fett** zu setzen nutze zwei Sternchen. Dabei kannst du auch nur Te**il**e von Wörtern formatieren. 

Um ein Wort im Text in Sternchen zu setzen, verwende einen Backslash vor dem Sternchen: \* Dieser Text ist nicht kursiv, sondern in Sternchen gesetzt \*. 

### Links:
Um Links im Text zu erzeugen schreibst du das Wort, welches ein Link werden soll in eckige Klammern und die URL danach in runde Klammer: [Dieser Text führt zu Google](http://www.google.de). Es ist dabei eventuell wichtige das 'http://' nicht wegzulassen. 

Um einen Link auf eine andere Seite deiner Website zu setzen, schreibst du einfach den Datei Pfad: [Dies führt Beispielsweise zur Startseite](index.php). Am besten setzt du für derartige Links erstmal etwas ein und sagst mir dann bescheid, damit das mit der Ordnerstruktur passt. 

Wenn du sehr viele Links im Text hast, die sich eventuell auch wiederholen, kannst du Links auch am Ende des Dokuments definieren. Dazu setzt du statt des Links in runden Klammern noch einmal eckige Klammer, welche eine ID für den Link enthalten. Um den Link zu definieren schreibst du dann die ID in eckigen Klammern gefolgt von einem Doppelpunkt und der URL: 

[Dieser Text führt zu Google][Google] und dies führt auch zu [Google][Google]. 

[Google]: http://www.google.de

Wenn der Linktext und die ID identisch sind, kannst du auch die eckigen Klammern für die ID einfach frei lassen: [Google][]

Um eine im Text ausgeschriebene URL in einen Link umzuwandeln, kannst du sie auch einfach in eckige Klammern setzen: <http://www.nwne.de>

### Bilder: 
Um ein Bild einzufügen, verwendest du eine ähnliche Schreibweise wie für Links, nur dass du ein Ausrufungszeichen vor die eckigen Klammern setzt. In den eckigen Klammern steht dann ein Name für das Bild, welcher allerdings nur angezeigt wird, wenn der Browser so eingestellt ist, dass er das Bild nicht zeigt. In den runden Klammer steht der Link zu dem Bild auf dem Server. Das Standardverzeichnis ist '../_ressources/img/BILDNAME.jpg' Generell liegen Bilder zunächst einmal im Ordner 'bilder'. Es muss bei dem Dateinamen auf Groß und Kleinschreibung und auf die Dateiendung geachtet werden. Ein Bild wird also wie folgt eingefügt: ![Dies wäre ein schönes Bild](../_ressources/img/vorlesung_2.jpg) Und danach geht es dann mit Text weiter, der in einem neuen Absatz dargestellt wird. 

### Zitate:
Um einen Zitat-Block einzufügen: 
> Setzt du einfach ein Größer-Als-Zeichen vor den Absatz
>> Zitate können dabei auch in mehreren Ebenen geschachtelt werden. 

### Listen: 
Um eine Liste zu erstellen, beginnst du einfach einen Absatz mit einen Minus davor: 

- Dies ist ein erster Stichpunkt der Liste
- Es ist dabei wichtig, die Liste durch eine Leerzeile vom Text abzutrennen! 
	- Um Listen zu schachteln, setzt du einfach einen Tab oder 4 Leerzeichen vor das Minus. 
+ Statt des Minus, kann auch ein Plus verwendet werden, 
* oder ein Stern
	* In der Formatierung macht dies überhaupt keinen Unterschied. 
1. Außerdem ist es möglich nummerierte Listen zu erstellen
2. Dafür setzt du einfach eine Zahl und einen Punkt vor den Absatz
	1. Die sich ebenso schachteln lassen 
10. Dabei spielt es eigentlich keine Rolle, welche Zahl du verwendest, die wird später sowieso vom Programm erstellt. 
	200. Der letzte Punkt bekommt also ein '3.' vorangestellt und dieser ein '1.'!
4. Nummerierte und unnumerierte Listen können nicht auf einer Ebene Gemische werden: 
	- Aber sie können geschachtelt werden. 

- Um eine neue Liste anzufangen, füge einfach eine Leerzeile ein

	Um mehrere Absätze in einem Listenpunkt zu haben, füge einfach vor jedem neuen Absatz einen Tab oder 4 Leerzeichen ein. 

Du musst darauf aufpassen, dass ausversehen Listen entstehen können, wenn man eigentlich nur einen Absatz mit einer Ordnungszahl beginnen will: 

1. Muss man aufpassen, aber 2. gibt es eine Lösung dafür, indem man 3. einfach einen Backslash for dem Punkt einfügt:

1\. Ist jetzt keine Liste mehr, sondern Teil eines ganz normalen Absatzes ganz ohne irgendeine Einrückung. 

### Trennlinien: 
Du kannst eine horizontale Linie einfügen, indem du mindestens drei Minus in eine Zeile schreibst. Achte aber darauf, dass du vorher eine Leerzeile einfügst, ansonsten erstellst du versehentlich eine Überschrift: 

---

Du kannst auch mehr Minus einfügen, um dadurch die Lesbarkeit erhöht wird. Aber vergiss die Leerzeile nicht!

----------------------------------------------------------------


[Markdown Quelltext zum Download](markdown_leitfaden.md)