### Zadatak
**1. Kreirati api autentifikacijski sustav (prijava i registracija)**

***2. Potrebno je prijavljenom korisniku omogućiti kreiranje, ažuriranje, brisanje, dohvaćanje jednog i dohvaćanje svih kontakta***

***3. Kontakt će se sastojati od 2 modela:***

- Contact (contacts tablica):
     - ```id```
    - ```user_id``` (foreign key na users tablicu, ```on delete cascade```)
    - ```first_name```
    - ```last_name```
    - ```level```
    - ```created_at```
    - ```updated_at```
- ContactData (contact_datas tablica):
    - ```id```
    - ```contact_id``` (foreign key na contacts tablicu, ```on delete cascade```)
    - ```phone```
    - ```email```
    - ```address```
        
**4. Validacijska pravila:**
- first_name: obvezan, string
- last_name: obvezan, string
- user_id: obvezan, postoji u tablici users pod id kolumnom
- level: obvezan, vrijednosti public,private
- phone: obvezan, string
- email: opcionalan, email
- address: opcionalan, string
 
**5. Potrebne rute:**
- ```register ```
- ```login```
- ```contacts/create``` - samo prijavljeni korisnik
- ```contacts/{id}/update``` - samo prijavljeni korisnik koji je vlasnik
- ```contacts/{id}/delete``` - samo prijavljeni korisnik koji je vlasnik
- ```contacts/{id}/show``` - samo prijavljeni korisnik koji je vlasnik ako je status private
(Contact + ContactData, povlaćenje kroz relacije)
- ```contacts``` - lista imena (first_name + last_name)
    - prijavljenom korisniku prikazati sve njegove kontakte i one koji nisu njegovi ali su public
    - ne prijavljenom korisniku prikazati samo public kontakte
