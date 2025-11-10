# Grundlagen der Webentwicklung

Überblick über die wichtigsten Grundlagen der Webentwicklung: Aufbau von Webanwendungen, Entwicklungsumgebung, Sicherheitsrisiken und Schutzmaßnahmen.

---

## 1. Kommunikation zwischen Client und Server

Webseiten funktionieren durch das Zusammenspiel von **Client** (Browser) und **Server**:

- Der Browser sendet eine Anfrage an den Server (z. B. „zeige diese Webseite“).  
- Der Server verarbeitet die Anfrage, z. B. über **PHP**, und sendet die Daten zurück.  
- Der Browser stellt die Seite dar, die der Nutzer sieht.

---

## 2. Entwicklungsumgebung

Um eigene Webanwendungen zu entwickeln, benötigst man:

- Einen **Webserver** (z. B. Apache oder Nginx)  
- Eine **Datenbank** (MySQL oder MariaDB)  
- Einen **Editor** mit PHP-Support (z. B. VS Code, PhpStorm, Notepad++)

Damit kann man Webseiten lokal testen, bevor sie online gestellt werden.

---

## 3. Sicherheitsrisiken von Webanwendungen

Webanwendungen sind häufig ein Angriffsziel. Typische Risiken:

- **Phishing:** Nutzer werden zu gefälschten Webseiten gelockt, um Daten zu stehlen.  
- **Datendiebstahl:** Hacker stehlen gespeicherte Nutzerdaten.  
- **SQL-Injections:** Schadcode wird in Datenbankanfragen eingeschleust.  
- **Cross-Site-Scripting (XSS):** Schadcode wird über Formulare oder URLs in Webseiten eingebettet.  
- **Session-Hijacking:** Hacker übernehmen die Sitzung eines Nutzers.  
- **Denial-of-Service (DoS):** Server wird durch Überlastung lahmgelegt.

---

## 4. Schutzmaßnahmen

Wichtige Maßnahmen, um Webanwendungen zu schützen:

- **Verschlüsselung:** Datenübertragung per HTTPS sichern.  
- **Multi-Faktor-Authentifizierung (MFA):** Anmeldung absichern.  
- **Prepared Statements / Sanitizing:** Datenbankanfragen sichern, SQL-Injections verhindern.  
- **Eingabevalidierung:** Nutzer-Eingaben prüfen, bevor sie verarbeitet werden.  
- **Regelmäßige Updates:** Software und Bibliotheken aktuell halten.

