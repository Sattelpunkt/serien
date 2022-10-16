## Herzlich Willkommen bei dem Projekt "Serien Datenbank"

Im Frühjahr geht meine Bewerbungsphase für meine "Fachpraktische Ausbildung" los.
Dadurch, dass ich große Lücken im Lebenslauf habe, werde mich mit einem PHP Projekt vorstellen


Das Projekt soll eine Serien Datenbank sein, mit allen Serien, die ich bislang geschaut habe sowie eine ToDo.

### Folgende Features soll das Projekt erfüllen
- Wunschliste mit Prio
- Genres anlegen und danach sortieren
- Aktuelle Serien nach Genres/Prio sortieren
- Abgeschlossene Serien mit Bewertung(1-100)
- unterbrochende Serie mit Begründung
  - Sortierung nach Bewertung
- Zu jeder Serie soll es einen Freitext geben
- uvm.


### PHP Anforderungen
- OOP
- MVC
- Autoload
- Datenbanklasse PDO
- Sortierungsspeicherung via Session
- Session MSG
- Es wird auf folgende Punkte verzichtet
  - Sicherheit
  - Login



### Nächste Schritte: 

- Basissystem
  - ~~View einfügen(Navigation, Content)~~
  - ~~Template einfügen sowie anpassen(Navigation,~~ SessionMSG)
  - ~~Error Template einfügen(NotFound, ???)~~
  - Session Message mit Aufruf von der MainModel
  - Datenbank mit Aufruf von der MainModel

- Projekt
  - Genres Anlegen, Bearbeiten, löschen

### Mögliche Session Message Types

- success
- danger
- warning
- info