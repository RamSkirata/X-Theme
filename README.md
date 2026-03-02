# Kiezbrand Theme – Anleitung von A bis Z

Diese Anleitung zeigt dir Schritt für Schritt, wie du das Theme in WordPress installierst, Seiten korrekt anlegst und mit Inhalten füllst.

## 1) Voraussetzungen

- WordPress **6.0+**
- PHP **7.4+**
- Optional (empfohlen): **Elementor** bzw. Elementor Pro, wenn du Header/Footer oder Seiten visuell bauen willst.

Die Theme-Headerdaten und Anforderungen stehen in `style.css`.

## 2) Theme installieren und aktivieren

1. Theme-Ordner `X-Theme` als ZIP packen oder per SFTP in `wp-content/themes/` hochladen.
2. Im WP-Backend zu **Design → Themes** gehen.
3. **Kiezbrand Theme** aktivieren.

## 3) Wichtige Theme-Funktionen (automatisch aktiv)

Nach Aktivierung sind u. a. aktiv:

- Beitragsbilder (Featured Images)
- Menüs: `Primary` und `Footer`
- Custom Logo
- Sidebar-Widgetbereich
- Custom Post Type **Tour** (Slug: `/tours`)

Diese Logik kommt aus `functions.php`.

## 4) Basis-Setup direkt nach Aktivierung

### 4.1 Permalinks setzen

- Gehe zu **Einstellungen → Permalinks**
- Wähle z. B. **Beitragsname**
- Speichern

So werden Seiten-URLs wie `/about`, `/contact`, `/tours` sauber erzeugt.

### 4.2 Logo und Titel

- **Design → Customizer → Website-Informationen**
- Logo hochladen (Theme unterstützt `custom-logo`)
- Website-Titel/Untertitel setzen

### 4.3 Menüs anlegen

- **Design → Menüs**
- Ein Hauptmenü erstellen und der Position **Primary Menu** zuweisen
- Ein Fußmenü erstellen und der Position **Footer Menu** zuweisen

> Hinweis: Das Theme nutzt `fallback_cb => false`, d. h. ohne zugewiesenes Menü erscheint nichts in der Navigation.

## 5) Seitenstruktur richtig aufbauen (wichtig)

Das Theme bringt spezielle Templates mit. Du solltest die folgenden Seiten erstellen:

1. **Startseite**
2. **About**
3. **Tours Overview**
4. **Guides & Team**
5. **Fan Shop**
6. **Contact**

### 5.1 Startseite erstellen

1. **Seiten → Erstellen**
2. Titel z. B. `Home`
3. Veröffentlichen
4. **Einstellungen → Lesen**
5. „Eine statische Seite“ wählen und diese Seite als **Startseite** setzen

Die Datei `front-page.php` steuert die Homepage.

### 5.2 Standardseiten mit Template zuweisen

Erstelle für jede Seite eine neue WP-Seite und weise unter **Seitenattribute → Template** das passende Template zu:

- `About` → **About Brand** (`page-about.php`)
- `Contact` → **Contact & Booking** (`page-contact.php`)
- `Fan Shop` → **Fan Shop Hub** (`page-fan-shop.php`)
- `Guides & Team` → **Guides & Team** (`page-guides-team.php`)
- `Tours Overview` → **Tours Overview** (`page-tours-overview.php`)

> Tipp: Slugs möglichst passend halten (`about`, `contact`, `fan-shop`, `guides-team`, `tours-overview`).

## 6) Touren anlegen (Custom Post Type)

Im Backend gibt es den Bereich **Tours**.

1. **Tours → Add New Tour**
2. Titel, Beschreibung und Beitragsbild eintragen
3. Veröffentlichen

- Einzelansicht läuft über `single-tour.php`
- Archivseite über `/tours` (durch `has_archive => true`) und `archive.php`

## 7) Inhalte bearbeiten: ohne Elementor vs. mit Elementor

Viele Templates prüfen, ob die Seite mit Elementor erstellt wurde (`_elementor_edit_mode = builder`).

- **Wenn Elementor-Seite erkannt wird:** `the_content()` wird ausgegeben (du steuerst Layout komplett in Elementor).
- **Wenn nicht:** Theme zeigt den eingebauten Demo-/Fallback-Abschnitt aus dem jeweiligen Template.

Das gilt z. B. für Startseite und die benannten Seiten-Templates.

## 8) Blog/News nutzen

- Standardbeiträge funktionieren über `index.php`, `single.php`, `archive.php`
- Excerpt-Länge ist global auf 24 Wörter gesetzt

Wenn du einen News-Bereich willst:

1. Seite `News` erstellen
2. Unter **Einstellungen → Lesen** als Beitragsseite zuweisen
3. Beiträge normal unter **Beiträge** anlegen

## 9) Widgets/Sidebar

- Ein Widgetbereich `Sidebar` ist registriert.
- Unter **Design → Widgets** befüllbar.

## 10) Bilder, Farben, Design

- Basisstyles liegen in `style.css`
- Zusätzliche Komponenten in `assets/css/components.css`
- Editor-Styling in `assets/css/editor-style.css`
- Frontend-JS in `assets/js/main.js` (defer geladen)

## 11) Empfohlener Go-Live-Workflow

1. Logo + Menüs setzen
2. Startseite festlegen
3. Alle Kernseiten anlegen und Templates zuweisen
4. 3–6 Touren erstellen
5. Kontaktseite mit echtem Formular-Plugin ersetzen (z. B. WPForms/CF7)
6. Demo-Texte/Bilder durch echte Inhalte ersetzen
7. Footer-Menü mit Impressum/Datenschutz ergänzen
8. SEO-Plugin + Caching aktivieren

## 12) Häufige Fehler & schnelle Lösung

- **Navigation leer** → Menüs nicht zugewiesen (Primary/Footer).
- **Falsches Seitenlayout** → falsches Seitentemplate gewählt.
- **Startseite zeigt Blog statt Hero** → statische Startseite nicht gesetzt.
- **Touren nicht unter `/tours` sichtbar** → Permalinks einmal speichern.
- **Elementor-Layout erscheint nicht** → Seite nicht im Elementor-Build-Modus gespeichert.

## 13) Quick-Checkliste (Copy/Paste)

- [ ] Theme aktiviert
- [ ] Permalinks gesetzt
- [ ] Logo hochgeladen
- [ ] Primary + Footer Menü zugewiesen
- [ ] Statische Startseite gesetzt
- [ ] Seiten mit richtigen Templates erstellt
- [ ] Touren angelegt
- [ ] Kontaktformular integriert
- [ ] Impressum/Datenschutz im Footer

