"# bewerbungsaufgabe1"


**Aufgabe2** (Beschreibung)
<br>
<br>
PHP-Skript, Clientanwendung

Zahlen 1-200 ausgeben und wie folgt ersetzen:

Zahlen durch 2 teilbar, Zwei <br>
Zahlen durch 7 teilbar, Sieben<br>
Zahlen durch 2 und 7 teilbar, ZweiSieben

**Review**<br>
1. Funktion erstellt, die Zahlen durch 2 teilt und ersetzt mit Zwei<br>
2. Funktionen erstellt für Zahlen 7 und 2,7<br>
3. Schleife erstellt, um Zahlen von 1-200 auszugeben<br>

Schwierigkeiten<br>
Eingebewert muss für weitere if Abfragen erhalten bleiben


Ausblick<br>
eventuell if Abfrage verkürzen<br>
if Abfrage durch PHP-Case ersetzen
<br>
<br>
<br>
**Aufgabe3** (Beschreibung)<br>
<br>
Weboberfläche, Webserver zur Ausführung, 

Termine speichern:
<br>
Datum (YYYY-MM-DD HH:MM:SS)<br>
Textnachricht 1-255 Zeichen
Speicherort wählbar

Termine anzeigen als Liste

**Review** <br>
1. html als Bausteine eingefügt, um Eingebefelder zu erzeugen<br>
2. PHP eingebaut, um Eingabewerte mit Get in Variablen zu speichern<br>
3. Baustein für erstellen/öffnen und speichern in einer Testdatei<br>
4. Auslesen der Datei mit Baustein

Schwierigkeiten<br>
Leere Zeilen in der Textdatei bei mehrfachen Aufruf 
der Seite: <br>
-Post statt Get,<br> -if-empty funktion

Abblocken von Leereinträgen durch required

Falschen Code einschleusen durch Textffeld:<br>
-htmlentities (htmlspecialchars)

Ausblick

-Datenbank MySQL<br>
-CSS Oberflächengestaltung<br>
-Daten löschen