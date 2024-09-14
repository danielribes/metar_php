# TODO

## 0.1
* ~~Bootstrap de l'app mostrant per defecte METAR de LELL~~
* ~~tancament v 0.1 i tag a git~~ 

## 0.2
* ~~Admet per URL un parametre en format: https://danielribes.com/metar/lell  que és el nom OACI de l'aeroport del que volem el METAR~~
* Validar que el parametre rebut és un OACI valid de 4 caracters i que correspont a algun dels aeroports de la llista airports.csv
  * muntar phpunit per fer tests
  * refactor a classes que siguin necessaries per muntar test i compoments ok
  * fer test amb regexp per validar:
    * son 4 caracters text segons nomencaltura oaci
  * fer test per validar que esta dins llista aeroports
  * posar llista aeroports com un array que es carrega en una class
* Demana METAR del aeroport OACI indicat i mostra nom de l'aeroport
* CSS per posar en sans-serif, color fondo i centrat a pantalla METAR i nom aeroport
* tancament v 0.2 i tag a git

## 0.3
* scripts per automatitzar  crear llista aeroports OACI
* Filtrar error connexió: No trobar el fitxer OACI de l'aeroport, malgrat ser una OACI validat.
* Filtrar errors de connexió al directori de METARS: 404, 301, 500, acces prohibit.
* Refactors (detallar quins s'han fet)
* tancament v 0.3 i tag a git

## 0.4
* Parser del METAR per mostrar descripcions en text
* Refactors (detallar quins s'han fet)
* tancament v 0.4 i tag a git

## 0.5
* Pensar funcionalitats 0.5: guardar dades per mostrar evolució/tendencies?, cache?, mostrar pista i vent o info aeroport?, ...
