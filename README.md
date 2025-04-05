# Arhitektur WordPress Tema

Ova tema je WordPress tema za stranicu **Arhitektur**. Slijedite ove upute kako biste postavili temu i bazu podataka na LocalWP.

## Postavljanje

1. **Preuzimanje repozitorija**:
   - Preuzmite repozitorij i raspakirajte ZIP datoteku s temom.
   - Preuzmite **`local.sql`** datoteku iz ovog repozitorija (to je SQL baza podataka).

2. **Instalacija LocalWP**:
   - Preuzmite i instalirajte **LocalWP** s [LocalWP](https://localwp.com/).
   - Kreirajte novu stranicu u LocalWP-u s imenom **Arhitektur**.
     
3. **Uvoz baze podataka**:
   - U LocalWP-u, otvorite karticu **Database** i kliknite **Adminer**.
   - U Adminer-u, kliknite **Import**, odaberite **`local.sql`** i kliknite **"Execute"**.

4. **Instalacija teme**:
   - Kopirajte preuzetu temu u **wp-content/themes/** direktorij unutar LocalWP-a.
   - Aktivirajte temu u **WordPress adminu** pod **Appearance > Themes**.

5. **Provjera**:
   - Posjetite **http://arhitektur.local** i provjerite funkcionalnost teme i podataka.

## Korištene tehnologije:

- **WordPress** - CMS platforma za izradu stranice.
- **Advanced Custom Fields (ACF)** - Za unos specifičnih podataka od strane korisnika.
- **GSAP** - Za animacije prilikom skrolanja stranice.
- **Underscores** - Osnovna tema za razvoj.
- **PixelPerfekt** - Za postizanje vizualne sličnosti s Figma predloškom.

## Kako postaviti WordPress temu i bazu podataka iz GitHub-a na LocalWP

### 1. Preuzimanje teme i baze:
- Preuzmite repozitorij s GitHub-a i raspakirajte ZIP datoteku s temom.
- Preuzmite `local.sql` datoteku iz GitHub-a (to je SQL baza podataka).

### 2. Instalacija LocalWP:
- Preuzmite i instalirajte **LocalWP** s [LocalWP](https://localwp.com/).
- Kreirajte novu stranicu s imenom `Arhitektura`.

### 3. Uvoz baze podataka:
- U **LocalWP-u**, otvorite karticu **Database** i kliknite **Adminer**.
- U **Adminer-u**, kliknite **Import**, odaberite `local.sql` i kliknite **Execute**.

### 4. Kopiranje teme u WordPress:
- Kopirajte preuzetu temu u `wp-content/themes/` direktorij unutar **LocalWP-a**.
- Aktivirajte temu u WordPress adminu pod **Appearance > Themes**.

### 5. Provjera:
- Posjetite [http://arhitektur.local](http://arhitektur.local) i provjerite funkcionalnost teme i podataka.

## Korištene datoteke i resursi:

### 1. Datoteke teme:
- **index.php** – Glavni predložak stranice koji prikazuje blog postove na početnoj stranici.
- **footer.php** – Predložak za podnožje stranice, uključujući informacije kao što su copyright, linkovi i drugi podaci.
- **header.php** – Predložak za zaglavlje stranice, uključujući navigaciju, logotip i druge bitne elemente na vrhu stranice.
- **functions.php** – Datoteka koja sadrži funkcije za dodatne prilagodbe teme, kao što su registracija menija, prilagodba postavki i sl.
- **single.php** – Predložak za prikazivanje pojedinačnih blog postova ili članaka s njihovim detaljima.
- **animation.js** – JavaScript datoteka koja sadrži animacije pomoću **GSAP**-a, primijenjene prilikom skrolanja stranice.

### 2. ACF polja:
- Tema koristi **Advanced Custom Fields (ACF)** za unos specifičnih podataka od strane korisnika, kao što su naslovi, podnaslovi, slike i drugi podaci vezani uz članke. Polja omogućuju lako dodavanje i prilagodbu sadržaja kroz WordPress admin sučelje.

### 3. GSAP Animacije:
- **GSAP.js** – za animacije prilikom skrolanja stranice. Uključuje efekte poput fade-in i pomicanje elemenata prilikom skrolanja, čineći stranicu dinamičnijom i vizualno privlačnijom.

### 4. Baza podataka:
- **local.sql** – SQL datoteka koja sadrži podatke za stranicu. Ova baza uključuje sve potrebne podatke za ispravan rad teme, uključujući postove i prilagođene podatke za blogove.

### 5. Resursi:
- **assets/images/** – Mapa koja sadrži slike za stranicu, uključujući logo i ostale vizualne elemente.
- **assets/icons/** – Mapa s ikonama koje se koriste na stranici, uključujući društvene mreže i druge ikone potrebne za funkcionalnost stranice.



