<?php 
require '../conec/conexion.php';
require '../asset/menuBar.php';
require '../asset/startHome.php';
require '../asset/boxsBlog.php';
require '../asset/footer.php';
require '../asset/matrix.php';
require '../asset/scripts.php';
require '../asset/cubes.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
    <title>Blog/GraphQL</title>
    <!-- Meta Tags -->
    <meta name="Description" content="Biscoder">
    <meta name="distribution" content="global">
    <meta name="Robots" content="index, follow, all">
    <meta name="googlebot" content="index, follow, all">
    <meta name="google" content="traslate">
    <meta name="author" content="Bismarck Colombo">
    <meta name="keywords" content="Web Design, Web Developer, Full Stack, programer, freelance, programador web, desarrollador web">
    <meta name="X-UA-Compatible" content="IE=Edge">
    <meta name="revisit-after" content="7 days">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <!-- - - - -->
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon.png">
    <!-- - - - -->
    
    <!-- CSS Plugins -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/jquery.animatedheadline.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/swiper.min.css">
    <link rel="stylesheet" href="../css/fancybox.css">
    <link rel="stylesheet" href="../css/odometer-theme-minimal.css">
    <!-- - - - -->
    <!-- Main CSS Files -->
    <link rel="stylesheet" href="../css/style_dark.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="stylesheet" href="../css/matrix.css">
    <link rel="stylesheet" href="../css/cubes.css">
    <link rel="stylesheet" href="../css/styles.css">
    <!-- - - - -->
</head>
<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="load-splitter"></div>
        <div class="load-splitter"></div>
        <div class="loader">
            <p class="text">GraphQL<span> ....</span></p>
            <div class="loading-bar">
                <span></span>
            </div>
        </div>
    </div>
    <!-- - - - -->

    <!-- Start Header -->
    <header class="header-sliding">
        <?php echo menublog(); ?>
    </header>
    <!-- End Header -->

    <!-- Start cubes -->
    <?php echo cubes(); ?>
    <!-- End cubes -->

    <!-- start Articulo -->
    <div class="container-articles">
     <h2>Que es GraphQL?</h2>
     <p>GraphQL es un lenguaje de consulta y manipulación de datos de código abierto desarrollado por Facebook en 2012 y lanzado como proyecto de código abierto en 2015. Se utiliza para obtener datos de una API de manera eficiente y estructurada.</p>
     <p>A diferencia de las APIs REST tradicionales, donde los clientes pueden recibir datos innecesarios o insuficientes en una sola llamada, GraphQL permite que los clientes especifiquen exactamente los datos que necesitan y la estructura en la que deben ser devueltos, lo que reduce la cantidad de solicitudes necesarias para completar una tarea y mejora el rendimiento de la aplicación.</p>
     <p>GraphQL también proporciona una gran flexibilidad al permitir a los clientes definir sus propios tipos de datos y operaciones, lo que permite una mayor personalización y capacidad de integración. Además, es independiente del lenguaje y puede ser utilizado con cualquier lenguaje de programación.</p>
     <h2>GraphQL ofrece varias ventajas para el desarrollo de aplicaciones:</h2>
     <ol>
        <li>Menor cantidad de solicitudes: GraphQL permite a los clientes solicitar exactamente los datos que necesitan en una sola llamada, lo que reduce la cantidad de solicitudes necesarias para completar una tarea y mejora el rendimiento de la aplicación.</li>
        <li>Mayor flexibilidad: GraphQL permite a los clientes definir sus propios tipos de datos y operaciones, lo que permite una mayor personalización y capacidad de integración.</li>
        <li>Documentación autogenerada: GraphQL genera automáticamente una documentación clara y fácil de leer sobre los tipos de datos disponibles y las operaciones que se pueden realizar en la API.</li> 
        <li>Evolución de la API sin interrupciones: GraphQL permite que la API evolucione sin interrupciones para los clientes, lo que significa que se pueden agregar campos y tipos de datos sin afectar a los clientes existentes.</li>  
        <li>Menor carga de trabajo para los desarrolladores: GraphQL simplifica el proceso de integración de datos, ya que los desarrolladores pueden solicitar solo los datos necesarios y trabajar con ellos en un formato fácilmente manejable.</li>
        <li>Compatibilidad con múltiples fuentes de datos: GraphQL permite que los clientes soliciten datos de múltiples fuentes, lo que puede ser útil en aplicaciones que dependen de datos de varias fuentes diferentes.</li> 
    </ol> 
    <p>En general, GraphQL proporciona una forma eficiente y flexible de obtener y manipular datos en aplicaciones, lo que puede mejorar significativamente la experiencia del usuario y la eficiencia del desarrollo </p>
    <div class="content-imag">
           <img src="../images/blog/graphql/gra1.png" alt="">
    </div>
    <h2>GraphQL se utiliza en una gran variedad de proyectos en diversas áreas, incluyendo:</h2> 
    <ol>
        <li>Aplicaciones móviles: GraphQL es una solución popular para aplicaciones móviles, ya que permite solicitar solo los datos necesarios para la aplicación, lo que puede mejorar significativamente la velocidad de la aplicación y reducir la cantidad de datos utilizados.</li> 
        <li>Aplicaciones web: GraphQL también se utiliza en aplicaciones web para reducir la cantidad de solicitudes necesarias para obtener los datos necesarios y mejorar la experiencia del usuario.</li>
        <li>Integración de servicios: GraphQL puede ser utilizado para integrar servicios de diferentes fuentes y permitir que los clientes soliciten datos de diferentes servicios en una sola llamada.</li> 
        <li>Análisis de datos: GraphQL se puede utilizar para solicitar y manipular grandes cantidades de datos de una manera estructurada y eficiente.</li><li>Internet de las cosas (IoT): GraphQL también puede ser utilizado en proyectos de IoT para permitir que los dispositivos soliciten y envíen datos en tiempo real.</li>
    </ol>
    <p>Algunos de los proyectos principales que utilizan GraphQL incluyen Facebook, GitHub, Shopify, Pinterest, Yelp, entre otros.</p>
    <h2>Diferencias entre REST y GraphQL</h2>
    <p>La principal diferencia entre REST y GraphQL es que REST está basado en recursos y utiliza diferentes URLs para acceder a diferentes recursos, mientras que GraphQL está basado en consultas y tiene un solo punto final para acceder a todos los datos. REST es mejor para sistemas simples y pequeños, mientras que GraphQL es mejor para sistemas más grandes y complejos donde la eficiencia en el envío y recepción de datos es crucial.</p>
    <p>REST (Representational State Transfer) es un protocolo de estilo arquitectónico para la comunicación entre sistemas, que se basa en la transferencia de datos a través de HTTP (Hypertext Transfer Protocol). REST utiliza métodos HTTP estándar (GET, POST, PUT, DELETE, etc.) para realizar operaciones CRUD (Create, Read, Update, Delete) en los recursos. Los recursos son identificados por URLs (Uniform Resource Locators) y se pueden enviar diferentes tipos de datos en diferentes formatos, como JSON (JavaScript Object Notation), XML (eXtensible Markup Language) o HTML (Hypertext Markup Language).</p>
    <p>GraphQL, por otro lado, es un lenguaje de consulta para APIs que permite a los clientes (como aplicaciones móviles o páginas web) solicitar datos específicos de un servidor y recibir solo los datos que solicitan. En lugar de tener múltiples puntos finales para diferentes recursos, GraphQL tiene un solo punto final y utiliza un esquema para definir cómo se pueden solicitar los datos. Esto permite una mayor flexibilidad y eficiencia en la comunicación entre el cliente y el servidor.</p>
    <div class="content-imag">
        <img src="../images/blog/graphql/graphql-difference.jpg" alt="">
    </div>
    <h2>GraphQL y Python</h2> 
    <h4>Existen varias librerías de Python que pueden ser utilizadas para implementar GraphQL en proyectos, continuación se describen algunas de las principales:</h4>
    <ol>
        <li>Graphene: es una de las principales librerías de Python para construir APIs basadas en GraphQL. Proporciona un conjunto de herramientas para definir los tipos de datos, resolver las consultas y manejar las mutaciones. También es compatible con una variedad de frameworks web de Python.</li>  
        <li>Ariadne: es otra librería popular de Python para implementar GraphQL. Ofrece un esquema de tipos de datos basado en Python, lo que significa que los tipos de datos y campos se pueden definir utilizando clases y atributos de Python.</li>
        <li>Strawberry: es una librería relativamente nueva que se enfoca en la simplicidad y facilidad de uso. Utiliza la anotación de tipos de Python para definir los tipos de datos y proporciona herramientas para resolver las consultas y manejar las mutaciones.</li>
        <li>GraphQL-core: es la librería principal de GraphQL en Python y proporciona una implementación completa de la especificación de GraphQL. Sin embargo, es una librería de bajo nivel y requiere más trabajo para implementar una API completa.</li>
        <li>Graphene-Python-Extras: es una extensión de Graphene que proporciona herramientas adicionales, como la paginación y la validación de entrada, para simplificar el proceso de construcción de una API basada en GraphQL.</li>
        <li>Taritflette: es otra librería popular de Python para construir APIs GraphQL. Se basa en la especificación de GraphQL y proporciona herramientas para definir el esquema de la API, resolver las consultas y manejar las mutaciones.</li>
    </ol>
    <p>En general, estas librerías proporcionan una forma fácil y eficiente de implementar GraphQL en proyectos de Python, y la elección de una depende de las necesidades específicas del proyecto.</p>
    
    <h3>Graphene Uso</h3>
    <p> para crear una API GraphQL en Python. En este ejemplo, definiremos un tipo de objeto "Persona" con dos campos (nombre y edad), y resolveremos una consulta para devolver una lista de personas.</p>
    <p>Primero, necesitamos instalar Graphene. Puedes hacerlo ejecutando el siguiente comando en la terminal:</p>
    <div class="code-container"> 
        <pre><code>
             pip install graphene
         </code></pre> 
         <button class="copy-button">Copiar</button> 
     </div>
     <p>Luego, creamos un archivo app.py y escribimos el siguiente código:</p> 
     <div class="code-container">
        <pre><code> 
            <span class="blue">import</span> graphene
            <span class="blue">Class</span> <span class="red">Persona</span>(graphene.ObjectType): 
                nombre = graphene.String() 
                edad = graphene.Int() 
            <span class="blue">Class</span> <span class="red">Query</span>(graphene.ObjectType):
                personas = graphene.List(Persona)

                <span class="blue">def</span> <span class="red">resolve_personas</span>(self, info):  
                <span class="blue">return</span> [
                     Persona(nombre=<span class="green">'Juan'</span> , edad=30, email=<span class="green">'juan@gmail.com'</span>),
                     Persona(nombre=<span class="green">'Maria'</span>, edad=25, email=<span class="green">'maria@gmail.com'</span>), 
                     Persona(nombre=<span class="green">'Pedro'</span>, edad=35, email=<span class="green">'pedro@gmail.com'</span>) 
                        ]

            schema = graphene.Schema(query=Query) 

            <span class="blue">if</span> __name__ == '__main__': 
                query = <span class="green">''' 

                personas { 
                    nombre 
                    edad 
                }
                ''' 
            </span>
                result = schema.execute(query)
                <span class="gold">print</span>(result.data) 
                <span class="gris"># Recorrer los objetos del resultado</span>
                <span class="blue">for</span> obj <span class="blue">in</span> result.data:
                     <span class="gris"># Recorrer los campos del objeto</span> 
                     <span class="blue">for</span> field <span class="blue">in</span> result.data[obj]:  
                     <span class="gris"># Imprimir el nombre del campo y su valor</span>  
                     <span class="gold">print</span>(<span class="green">f"Nombre : {field['nombre']}"</span>) 
                     <span class="gold">print</span>(<span class="green">f"Edad : {field['edad']}"</span>) 
                     <span class="gold">print</span><span class="green">(f"Correo : {field['email']}"</span>) 
                     <span class="gold">print</span>(<span class="green">"-----------------------------"</span>) 
            </code></pre>
            <button class="copy-button">Copiar</button> 
        </div>
    <h3>Consultas Graphql</h3>
    <p>En GraphQL, las consultas se definen utilizando un lenguaje de consulta propio, que permite al cliente especificar exactamente qué datos necesita del servidor. Las consultas pueden incluir argumentos y también pueden incluir fragmentos, que permiten al cliente reutilizar partes de la consulta en varias consultas diferentes.</p>
    
    <div class="content-imag">
        <img src="../images/blog/graphql/3.png" alt="">
    </div>

</div>

<!-- End Articulo -->



<!-- Start Footer -->
<?php echo foter(); ?>
<!-- End Footer -->

<!-- Start Cursor -->
<!--
<div class="fancy-cursor-dot"></div>
<div class="fancy-cursor-circle"></div>
-->
<!-- End Cursor -->

<!-- JS Files -->

<?php   echo scripts(); ?>
<!-- - - - -->

<script type="text/javascript">
const copyButtons = document.querySelectorAll('.copy-button');

copyButtons.forEach(copyButton => {

  copyButton.addEventListener('click', () => {

    // Buscar el contenedor de código correspondiente al botón de copiar
    const codeContainer = copyButton.closest('.code-container');
    const codeSnippet = codeContainer.querySelector('code');

    // Copiar el contenido del contenedor de código
    const range = document.createRange();
    range.selectNode(codeSnippet);
    window.getSelection().removeAllRanges();
    window.getSelection().addRange(range);
    document.execCommand('copy');
    window.getSelection().removeAllRanges();

    // Actualizar el botón de copiar
    copyButton.textContent = 'Copiado';
    copyButton.style.backgroundColor='red';
    setTimeout(() => {
      copyButton.textContent = 'Copiar';
      copyButton.style.backgroundColor = 'blue';
    }, 1500);

  });

});

</script>
</body>
</html>