	priemro que todo debemos de tener en cuenta que en el idex siempre se tiene que escribir una linea que tiene que exportar los estilos del css al index se veria asi 

	ej :  <link rel="stylesheet" href="style.css">


## **selectores** 

	la forma que tenemos que seleciconar uno o variosa elementos en html 

		para un aclase normal solo se pone el elemento y ya 
		si tenemos una clase se le pone el .
		si tenemos un id sele pone el # (se utiliza solo en un elemento)

### propiedades de texto

	priemero que todo tenemos los textos desd eaqui se pueden cambiar tambei ntener en cuenta que se pueden agregar mas tipo de texto con una coma por que si el priemro no  coge el otro si si no solo se cambia dependiendo de lo que el cliente quiera.

	ej: font-family: 'Times New Roman' (definir la letra)
	
		font-weight: bold; (se utiliza para poner la letra en negrita)

		font-style: italic; (se utiliza para darle algun estilo a la letra)

		text-align: center; (se utiliza para centrar el texto)
		
		text-decoration: underline; (se utiliza para subrayar texto)
		tamebien se utiliza muchoi para tachar lo que es un linea de texto 
		te pongo un ejemplo con la etiqueta span podemos seleccionar una fraccion            del texto y lo podemos tachar con este comando
		 
		line-height: 2; (tamañao de la linea)


		@font-face {
		font-family:"marvin" ; 
		src: url(se pone la letra que se descarga); (de esta manera podemos llevar
		acabo una forma de texto predeterminada que por ejemplo si tenemos un 
		tamaño cercano al texto que hicimos se va a poner automaticamente 
		dependiendo de lo que se esta haciendo la podemos llamar por tamaño)


### box model

		esta es una configuracion que se utiliza para poder trabajar en cajas es un          ejemplo tambien como interactuan y sus valores predeterminados

	tenemos varios conceptos que son:
	contendio 
	padding (distancia entre el contenido y los bordes)
	border (bordes s epuede hacer lo que quiera si lo queremos personalizar )
	border radius (redondear los borde)
	margin (es el espacio despues der los bordes con otras box)


## border

	como border tenemos una forma de que las cosas no se vean tan rusticas 
	
		   border-width: 10px; (para darle el tamaño al borde )
	
		    border-color: green ; (darle color al borde)
		
		    border-style: solid; (para darle el estilo al borde)
		
		    border-radius: 20px ; (para darle una form aamaigable al borde)
		   
		    
	tenemos una manera de poder llamar las funciones de los bordes en una sola

		border: 10px red solid;

	tambien tenemos para personalizar la parte superior y inferior 

		border-top: 5px green solid 
		border-bottom: 4px yellow solid
		border-radius: 5px 10px

# importante

		box-sizing: border-box; (es importante ya que almomento de nosotros generar un cmabio por ejemplo le agregamos mas padding o mas border o mas de esas cosas nuestra caja se va a ir agrandando para eso utilizamos este codigo para que conserve su tamaño natural o se adapta)


		

