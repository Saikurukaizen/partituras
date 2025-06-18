# Ejercicio de examen POO - Partitura musical

## 👤 Alumno
Marc Sanchez

## 📄 Descripción
En este repo resume 3 modos que se ha querido plasmar, del examen de POO. (Para menos palabrería, ver el folder del modo3)

Para una copia de la repo, usar el comando:

```bash

git clone https://github.com/Saikurukaizen/partituras

```

## Implementación

  ##### - Modo1

  - La intención era crear una clase abstracta de "notas" y un método abstracto "mostrarNotas" y que Melodía y Armonía usaran ese método.
  PROBLEMA: No respeta el principio de Herencia, ya que Melodía y Armonía NO SON notas, sino que se componen de ella. Y al no respetarse eso, tampoco respeta 
  la herencia.
  SOLUCION: Usar un Trait de mostrarNotas() ya que es la misma lógica, hacer un use de ambas clases, y respetar una clase Partitura para realizar la composición

##### - Modo2
  - Aquí sí se usa la composición, con arrays de melodías y armonías, sin herencia de clases. Y se aplica un enum de Notas, del cual se instancia en el objeto creado.

##### - Modo3

  - Hemos añadido un interface "piezaMusical", el cual la armonía y la melodía lo implementa. Este interface es llamado al constructor para agregar piezas a la partitura (una partitura
  también son un conjunto de secciones, y también son modificables). Cada vez que se muestra una partitura se instancia la armonía y la melodía (instanceOf) de cada pieza del conjunto de piezas.

  - Además, se sigue usando un enum Notas, solo que esta vez, no es en formato String. El motivo es por los métodos para mostrarNotas(). El por qué quería usar un array_map() es para que:
    . Los casos enumerados de notas, los transfiera (o convierta) en un array
    . Después realizar un implode() y crear una cadena de texto con ese array de cases ya creado.

El resultado es un código más limpio, ordenado y escalable. Si se quisiera implementar otras características a una pieza o añadir más secciones a una partitura.
