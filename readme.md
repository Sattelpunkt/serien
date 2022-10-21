# Medienverwaltung/Mediathek

Herzlich Willkommen bei meinem PHP-Projekt zur Realisierung einer Medienverwaltung/Mediathek.

Im Frühjahr geht meine Bewerbungsphase für meine *Fachpraktische Ausbildung* los. Mit diesem PHP-Projekt möchte ich mich vorstellen und mein Können präsentieren.

## Das Projekt

Das Projekt soll eine Datenbank für alle Leute sein, die Ihren Überblick über …

- Filme (0)
- Serien (1)
- Bücher (2)
- Hörbücher (3)

… verloren haben und diese kategorisieren wollen.

### PHP-Anforderungen

- [MVC](https://de.wikipedia.org/wiki/Model_View_Controller)-Architektur
- [OOP](https://de.wikipedia.org/wiki/Objektorientierte_Programmierung)
  - Autoload
  - [PDO](https://de.wikipedia.org/wiki/PHP_Data_Objects)
- Session Flash Messages

## Geplante Features

### Features für Benutzer

- Für jedes Thema soll es folgende Möglichkeiten geben:<!-- was heißt Thema? -->
  - Aktuelle🟢<!-- was bedeutet das? -->
  - Wunschliste🟢<!-- was bedeutet das? -->
  - Abgeschlossen🟢<!-- was bedeutet das? -->
  - Abgebrochen🟢<!-- was bedeutet das? -->
  - Jedes Medium soll in frei wählbare Genres kategorisierbar sein🟢
  - Bewertungen sollen möglich sein🟢
  - Freitext für Gedanken/Meinungen zum Medium🟢

### Software-seitige Features

- User-Management
  - Registierung🟢 (vorerst ohne E-Mail-Versand)
  - Login🟢
  - Passwort ändern🟢
  - E-Mail-Adresse ändern🟢
- Mögliche Session Message Types
  - success🟢
  - danger🟢
  - warning🟢
  - info🟢
- Genre
  - Genre anlegen🟢, bearbeiten🔴, löschen🔴

🟢 = done  
🔴 = to do
