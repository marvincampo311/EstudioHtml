console.log ("") para comunicarme con la consola 


## comentarios js 

//

para identar varias lineas de codigo 

/*

console.log("hola mundo");

*/


## VARIABLES

	Como puedo crear una vcariable en javca scrip

		let , var , const 

			var:primera forma de parar variables 
			se puede cmabiar la variable invocandola y dandole un nuevo valor 

			let y const son lso que mas se utilizan 

tenemos lo scrips que son para que mi codigo html o el navegador sepa que hay codigo de java scrip 
<scrip> </scrip>

## TIPOS DE DATOS


UNDEFINE , NULL , BOOLEAN, STRING,  SYMBOL ,  NUMBER Y OBJECT 



## como asignar valores de otra varibale en una varibale


var c = 5
var h = c

console.log(c);
console.log(h);

### inicializar varibales

var miIdioma = "español"

### varibale no inicailizada

var a 
var b 

console.log(a)
a=56
console.log(b)
b=7

## operadores

suma resta multiplicación y división

//operadores
//operadores aritmeticos

  

let number1 = 5
let number2 = 10

console.log (number1 * number2) //multiplicacion de variables
console.log (number1 - number2) //resta de variables
console.log (number1 + number2) //suma de variables
console.log (number1 / number2) //division  de variables


o tambien se puede escrubur asi 

var multiplicacion = 5 * 6;
console.log(multiplicacion);


### aumendo de validaciones de una variable

var numerosDeEstudiantes = 300;
console.log(numerosDeEstudiantes)
numerosDeEstudiantes--;
console.log(numerosDeEstudiantes);

  
otra forma de 
var t = 45;
t += 6;
t-= 5;

console.log(t);


var deudasMasCaras = 1500;
deudasMasCaras -= 500;
deudasMasCaras *= 2;
console.log(deudasMasCaras)

### cadena de caracteres

hay formas de que al momento de uno asiganar un valor de alguna cadena de caracateres y quiera añadir ocmillas no te va  a dejar pero existe una de las formas las cuales se puede opmitir y que se muestren

**se le agrega este simbolo \ y se veria asi** 

var cadenaTexto = "esta es mi cadena de texto para poder dar ea entender lo que soy el \"DIA DE HOY Y MAÑANA\" ";

console.log(cadenaTexto)


### tambien se pueden utilizar las comillas simples se veria asi 

var cadenaTexto = 'mi nombre es marivn yessid valencia y vengo exponer "modelos de l auniversdad"';

console.log(cadenaTexto)


## secuencias de escape

\n linea nueva 
\r retorno carro 
\t tabulacion
\b retroceso
\f salto de pagina 



### como sabe cuantos caracteres tiene una palabra 

con el comando lengyh puedo mirar cuantos caracteres tiene una palabra  asi se veria

var miNombre = ("marvin");
console.log( miNombre.length);


### notacion de corchetes 

esta es una de las formas las cualespodemos acceder a los caracteres de una variable existente en nuestro codigo

var lenguajeDePorgramcion = "python"
console.log(lenguajeDePorgramcion[]);


## como acceder al ultimo valor de una cadena de texto

var lenguajeDePorgramcion = "python"
	console.log(lenguajeDePorgramcion[lenguajeDePorgramcion.length - 1]);



### palabras en blanco 

asi se le puede asiganar cualquie valor a una lista de palabras asignadas 

var sujeto = "perro negro";

var accion = "se come una persona";

var novedad = "y la desecha"

  
var palabraLoca = "el " + sujeto  + " " +  accion + " con sus dientes" + " " +  novedad ;


console.log(palabraLoca)


