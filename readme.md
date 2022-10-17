## Herzlich Willkommen bei dem Projekt "Medien Datenbank"

Im Frühjahr geht meine Bewerbungsphase für meine "Fachpraktische Ausbildung" los.
Dadurch, dass ich große Lücken im Lebenslauf habe, werde mich mit einem PHP Projekt vorstellen.

Das Projekt soll eine Datenbank für alle Leute sein, die Ihren Überblick über
- Filme (0)
- Serien (1)
- Bücher (2)
- Hörbücher (3)

verloren haben und diese kategorisieren wollen.
Jeder User soll frei entscheiden, welche, der oben genannten Medien, er nutzen möchte



### Folgende Features soll das Projekt erfüllen
- Für jedes Thema soll es folgende Möglichkeiten geben
  - Aktuelle 
  - Wunschliste
  - Abgeschlossen
  - Abgebrochen
  - Jedes Medium soll in frei wählbaren Genres kategorisierbar sein
  - Bewertung sollen möglich sein
  - Freitext für Gedanken/Meinungen zum Medium


### PHP Anforderungen
- OOP
- MVC
- Autoload
- Datenbanklasse PDO
- Session MSG

### Nächste Schritte: 

- Basissystem
  - ~~View einfügen(Navigation, Content)~~
  - ~~Template einfügen sowie anpassen(Navigation,~~ SessionMSG)
  - ~~Error Template einfügen(NotFound, ???)~~
  - ~~Session Message mit Aufruf von der MainView~~
  - ~~Datenbank mit Aufruf- Erbbar von allen Klassen~~
  

- UserManagement
  - Registieren(ohne Email versand vorerst)
  - Login
  - Password Ändern
  - Email Ändern

### Mögliche Session Message Types

- success
- danger
- warning
- info

### Folgende Elemente aus dem Core sind fertig:
- Router (MVC)
- Main (View, Controller, Main)
- Session (inklusive Session MSG)
- Helpers
- Database
- Security
