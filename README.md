# examen_algoritmos_marco_nava
Examen de algoritmos
Patrones de Diseño.
Problema 1: Un cliente requiere utilizar sendgrid para envíos de email, pero otro cliente
requiere enviarlos por mandril. Se quiere evitar el uso de IF, y realizar un diseño en donde
podamos utilizar más servicios en caso de que un cliente requiera alguno en específico 
¿Qué patrón de diseño utilizarías y por qué?
R = Patron Adapter.  
R= El porque:  es un patrón de diseño el cual convierte la interfaz de un objeto, de forma que otro objeto pueda comprenderla, esto es permite la colaboración entre objetos con interfaces incompatibles, en este caso podríamos utilizar sendgrid, mandril o algún otro gestor de correos.

Problema 2: Explica en tus propias palabras la diferencia entre Factory Method y Abstract Factory.
R= Ambos son patrones creacionales, la diferencia es que el Abstract Factory que este crea una familia de objetos, los cuales tienen una relacion o dependencia entre ellos. y el Factory Method. Cada clase concreta se especializa en crear solo un tipo concreto de objeto.

Y proporciona un caso de uso A), B).
R=A).- Factory Method.- Crear un objeto que tiene muchas dependncias o configuración que debe hacerse al inicializarlo, o en donde hay diferentes formas o algoritmos para crear el objeto.

R=B).- Abstract Factory.- Crear múltiples objetos de distintos tipos pero que tienen una relación o dependencia con otros; esto es, crear una familia de objetos.
