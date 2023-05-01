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
    <title>Blog/FastApi</title>
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
            <p class="text">FastApi<span> ....</span></p>
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
        <h2>Introducción a FastAPI</h2>
        <h3>¿Qué es FastAPI?</h3>
        <p>FastAPI es un framework de Python que se utiliza para construir aplicaciones web. Se caracteriza por su velocidad y eficiencia, gracias a su arquitectura basada en ASGI (Asynchronous Server Gateway Interface). FastAPI está diseñado para ser fácil de usar, rápido y seguro, y ofrece muchas funcionalidades útiles, como la generación automática de documentación y la validación de entrada y salida. Además, está diseñado para ser compatible con el estándar OpenAPI, lo que permite una fácil integración con otras herramientas y servicios.</p>
        <h3>¿Por qué utilizar FastAPI?</h3>
        <p>FastAPI es una buena opción para desarrolladores que deseen crear aplicaciones web rápidas y eficientes en Python. Algunas de las razones por las que puede ser útil incluyen:</p>
        <ul>
            <li>
                Velocidad: FastAPI se ha diseñado para ser uno de los frameworks más rápidos y eficientes para construir aplicaciones web en Python. Su arquitectura basada en ASGI permite manejar muchas conexiones simultáneas con poco impacto en el rendimiento.
            </li>
            <li>Documentación automática: FastAPI tiene una característica útil que genera automáticamente documentación interactiva para la API en base a la especificación OpenAPI. Esto facilita la comprensión y el uso de la API por parte de otros desarrolladores.</li>
            <li>Validación de entrada y salida: FastAPI permite validar automáticamente la entrada y salida de datos, lo que ayuda a evitar errores y a garantizar la calidad de los datos que se envían y reciben a través de la API.</li>
            <li>Fácil integración con otras herramientas: FastAPI es compatible con el estándar OpenAPI, lo que permite una fácil integración con otras herramientas y servicios que también lo utilizan.</li>
        </ul>
        <h3>Historia y evolución de FastAPI</h3>   
        <p>FastAPI fue lanzado en 2019 por Sebastián Ramírez, un desarrollador de software colombiano. Desde su lanzamiento, FastAPI ha experimentado un crecimiento constante en popularidad debido a sus características y funcionalidades útiles, como su velocidad, su facilidad de uso y su compatibilidad con OpenAPI. FastAPI sigue siendo un proyecto activo, y se continúa desarrollando y mejorando continuamente.</p>     
        <h2>Instalación y configuración</h2>
        <h3>Requisitos previos</h3>
        <p>FastAPI requiere de una versión de Python 3.6 o superior para poder funcionar. También es recomendable utilizar un entorno virtual de Python para mantener las dependencias del proyecto aisladas del sistema global de Python. Se puede crear un entorno virtual mediante la herramienta virtualenv o utilizando el módulo venv que viene incluido en Python 3.6 y versiones posteriores.</p>
        <h3>Instalación de FastAPI</h3>
        <p>
            Para instalar FastAPI, se recomienda utilizar el gestor de paquetes de Python pip. Se puede instalar con el siguiente comando en la terminal: <b>pip install fastapi</b>. También se recomienda instalar la biblioteca uvicorn, que es un servidor ASGI que se utiliza para ejecutar la aplicación FastAPI. Se puede instalar con el siguiente comando: <b>pip install uvicorn</b>.    
        </p>
        <h3>Configuración básica</h3>
        <p> Una vez instalado FastAPI y uvicorn, se puede crear un archivo Python para la aplicación web. En este archivo, se debe importar la clase FastAPI desde la biblioteca fastapi. Se debe crear una instancia de esta clase para representar la aplicación web. A continuación, se deben definir las rutas de la aplicación utilizando decoradores de Python. Por ejemplo, se puede definir una ruta para la página principal de la aplicación con el siguiente código:</p>

        <div class="code-container">
            <pre>
                <code> 
                <span class="blue">from</span> fastapi <span class="blue">import</span> FastAPI

                app = FastAPI()

                @app.get("/")
                <span class="blue">async def</span> root():
                        <span class="blue">return</span> {<span class="green">"message": "Hello World"</span>}
                </code>
            </pre>
            <button class="copy-button">Copiar</button> 
        </div><!--End Code-->
        <p>En este ejemplo, se define una ruta que toma un parámetro <b>name</b> en la URL. La función <b>hello_name</b> se ejecutará cuando se visite esta ruta, y devolverá un objeto JSON que contiene el mensaje "Hello" y el valor del parámetro <b>name</b>.</p>
        <p>En resumen, la instalación y configuración básica de FastAPI es sencilla y rápida, y permite comenzar a construir aplicaciones web en Python de manera eficiente.</p>

        <h2>Estructura básica de una aplicación FastAPI</h2>
        <h3>Creación de la aplicación</h3>
        <p> Para crear una aplicación FastAPI, se debe crear un archivo Python y definir una instancia de la clase <b>FastAPI</b>. Por ejemplo, se puede crear una aplicación llamada <b>my_app</b> de la siguiente manera:</p>
         <div class="code-container">
            <pre>
                <code> 
                <span class="blue">from</span> fastapi <span class="blue">import</span> FastAPI

                app = FastAPI()
                </code>
            </pre>
            <button class="copy-button">Copiar</button> 
        </div><!--End Code-->
        <h3>Definición de rutas</h3>
        <p>Una vez creada la instancia de <b>FastAPI</b>, se pueden definir las rutas de la aplicación utilizando los decoradores de Python <b>@app.get()</b>, <b>@app.post()</b>, <b>@app.put()</b>, <b>@app.delete()</b>, entre otros. Por ejemplo, se puede definir una ruta para la página principal de la aplicación con el decorador <b>@app.get("/")</b> de la siguiente manera:</p>
        <div class="code-container">
            <pre>
                <code> 
                @app.get("/")
                <span class="blue">async def</span> root():
                        <span class="blue">return</span> {<span class="green">"message": "Hello World"</span>}
                </code>
            </pre>
            <button class="copy-button">Copiar</button> 
        </div><!--End Code-->
        <p>En este ejemplo, se define una ruta para la página principal de la aplicación que devuelve un objeto JSON que contiene el mensaje "Hello World".</p>
        <h3>Uso de decoradores</h3>
        <p>     
        FastAPI utiliza decoradores de Python para definir las rutas y los parámetros de entrada de la aplicación. Los decoradores @app.get(), @app.post(), @app.put(), @app.delete(), entre otros, se utilizan para definir las rutas de la aplicación. Además, se pueden utilizar otros decoradores para especificar los parámetros de entrada de las rutas, como <b>@app.path()</b> , <b>@app.query()</b>, <b>@app.header()</b>, entre otros.
        </p>
        <h3>Respuestas HTTP y códigos de estado</h3>
        <p>FastAPI permite devolver respuestas HTTP personalizadas y códigos de estado utilizando el objeto <b>Response</b> de la biblioteca <b>fastapi</b>. Por ejemplo, se puede devolver una respuesta HTTP personalizada con el código de estado 201 (Creado) de la siguiente manera:</p>
        <div class="code-container">
            <pre>
                <code> 
                <span class="blue">from</span> fastapi <span class="blue">import</span> FastAPI, Response

                my_app = FastAPI()

                @my_app.post(<span class="green">"/items"</span>)
                <span class="blue">async def</span> <span class="red">create_item</span>(item: str, response : Response):
                        response.status_code = <span class="red">201</span>
                        <span class="blue">return</span> {<span class="green">"item": item</span>}
                </code>
            </pre>
            <button class="copy-button">Copiar</button> 
        </div><!--End Code-->
        <p>En este ejemplo, se define una ruta para crear un nuevo elemento utilizando el método <b>POST</b>. Se utiliza el objeto <b>Response</b> para devolver una respuesta HTTP personalizada con el código de estado 201.</p>
        <p>En resumen, la estructura básica de una aplicación FastAPI se basa en la creación de una instancia de <b>FastAPI</b>, la definición de rutas utilizando decoradores de Python, el uso de decoradores para especificar los parámetros de entrada y la posibilidad de devolver respuestas HTTP personalizadas y códigos de estado.</p>


        <h2>Especificación OpenAPI</h2>
        <h3>¿Qué es OpenAPI?</h3>
        <p>OpenAPI es una especificación para describir APIs de manera estándar y que permite la interoperabilidad entre herramientas y servicios que utilizan esta especificación. OpenAPI se basa en un formato JSON o YAML y describe los recursos, operaciones, parámetros de entrada, códigos de estado, entre otros aspectos de la API.</p>
        <h3>Generación automática de documentación</h3>
        <p> FastAPI utiliza la especificación OpenAPI para generar automáticamente documentación interactiva para la API. Esta documentación incluye una descripción de los recursos y operaciones de la API, los parámetros de entrada y los códigos de estado que se pueden devolver. Además, se pueden probar las diferentes rutas de la API desde la documentación generada.</p>
        <h3>Especificación de parámetros de entrada</h3>
        <p>FastAPI utiliza la especificación OpenAPI para especificar los parámetros de entrada de las rutas de la API. Se pueden especificar diferentes tipos de parámetros, como rutas, consultas, encabezados, entre otros. Además, se pueden especificar los esquemas de validación de los datos de entrada para garantizar que los datos sean válidos antes de procesarlos.</p>
        <h3>Validación de entrada y salida</h3>
        <p>FastAPI utiliza la especificación OpenAPI para validar automáticamente la entrada y salida de datos de la API. Esto ayuda a evitar errores y a garantizar la calidad de los datos que se envían y reciben a través de la API. FastAPI utiliza la biblioteca pydantic para definir los esquemas de datos y validar los datos de entrada y salida.</p>
        <h3>Estructura OpenAPI</h3>
        <div class="content-imag">
            <img src="../images/blog/fastApi/open.png" >
        </div>
         <p>En resumen, FastAPI utiliza la especificación OpenAPI para generar documentación automática, especificar los parámetros de entrada de las rutas de la API y validar automáticamente la entrada y salida de datos. Esto hace que el desarrollo de la API sea más rápido y eficiente, y garantiza la calidad de los datos que se procesan.</p>


        <h2>Integración con bases de datos</h2>
        <h3>Configuración de bases de datos</h3>
        <p>FastAPI se puede integrar con diferentes bases de datos, como SQL, MongoDB, Redis, entre otras. Para configurar una base de datos, se debe instalar el controlador o driver correspondiente para la base de datos y configurar la conexión en la aplicación FastAPI. Por ejemplo, para conectar una aplicación FastAPI a una base de datos PostgreSQL, se puede utilizar el controlador <b>asyncpg</b> y configurar la conexión de la siguiente manera:</p>
        <div class="code-container">
            <pre>
                <code> 
                <span class="blue">from</span> asyncpg

                DATABASE_URL = <span class="green">"postgresql://user:password@localhost/dbname"</span>

                <span class="blue">async def</span> <span class="red">connect_db</span>():
                    <span class="blue">return await </span> asyncpg.connect(DATABASE_URL)

                <span class="blue">async def</span> <span class="red">close_db_connection</span>(db):
                    <span class="blue">await</span> db.close()
                </code>
            </pre>
            <button class="copy-button">Copiar</button> 
        </div><!--End Code-->
        <p>En este ejemplo, se define una función <b>connect_to_db()</b> que utiliza el controlador <b>asyncpg</b> para conectarse a una base de datos PostgreSQL utilizando la URL de conexión <b>DATABASE_URL</b>. Además, se define una función <b>close_db_connection()</b> que cierra la conexión a la base de datos.</p>
        <h3>ORM y motores de base de datos compatibles</h3>
        <p>FastAPI es compatible con diferentes ORMs (Object-Relational Mappers) y motores de base de datos, como SQLAlchemy, Tortoise ORM, entre otros. Estos ORMs permiten mapear los objetos de la aplicación a la estructura de la base de datos y simplificar el proceso de manipulación de datos en la base de datos. Por ejemplo, se puede utilizar SQLAlchemy para mapear los objetos de la aplicación a una base de datos SQLite de la siguiente manera:</p>
        <div class="code-container">
            <pre>
                <code> 
                <span class="blue">from</span> sqlalchemy <span class="blue">import </span> create_engine, Column, Integer, String
                <span class="blue">from</span> sqlalchemy.orm <span class="blue">import</span> sessionmaker
                <span class="blue">from</span> sqlalchemy.ext.declarative <span class="blue">import</span> declarative_base

                DATABASE_URL = <span class="green">"sqlite:///./test.db"</span>

                engine = create_engine(DATABASE_URL, connect_args={<span class="green">"check_same_thread"</span>: <span class="blue">False})</span>
                SessionLocal = sessionmaker(autocommit= <span class="blue">False</span>, autoflush=<span class="blue">False</span>, bind=engine)
                Base = declarative_base()

                <span class="blue">class</span> <span class="red">User</span>(<span class="red">Base</span>):
                    __tablename__ = <span class="green">"users"</span>

                    <span class="gold">id</span> = Column(Integer, primary_key= <span class="blue">True</span>, index=<span class="blue">True</span>
                    name = Column(String(<span class="red">50</span>))
                    email = Column(String(<span class="red">50</span>), unique=<span class="blue">True</span>) 

                Base.metadata.create_all(bind=engine)
                </code>
            </pre>
            <button class="copy-button">Copiar</button> 
        </div><!--End Code-->
        <p>En este ejemplo, se utiliza SQLAlchemy para crear una tabla users en una base de datos SQLite y definir una clase User que mapea los objetos de la aplicación a la estructura de la tabla.</p>
        <h3>Modelado de datos y esquemas Pydantic</h3>
        <p>FastAPI utiliza la biblioteca <b>pydantic</b> para definir los esquemas de datos de la aplicación y validar los datos de entrada y salida. <b>pydantic</b> permite definir modelos de datos utilizando clases de Python y validar los datos automáticamente. Por ejemplo, se puede definir un modelo de datos para un usuario de la siguiente manera:</p>
         <div class="code-container">
            <pre>
                <code> 
                <span class="blue">from</span> pydantic <span class="blue">import</span> BaseModel

                <span class="blue">class</span> <span class="red">User</span>(<span class="red">BaseModel</span>):
                    name: <span class="gold">str</span>    
                    email: <span class="gold">str</span>    
                </code>
            </pre>
            <button class="copy-button">Copiar</button> 
        </div><!--End Code-->
        <p>En este ejemplo, se define una clase <b>User</b> que hereda de la clase <b>BaseModel</b> de <b>pydantic</b>. La clase <b>User</b> tiene dos atributos <b>name</b>  y <b>email</b> que se validan automáticamente según sus tipos de datos.</p>
        <p>En resumen, FastAPI se puede integrar con diferentes bases de datos utilizando diferentes ORMs y motores de base de datos. Además, FastAPI utiliza la biblioteca <b>pydantic</b> para definir los modelos de datos.</p>


        <h2>Autenticación y autorización</h2>
        <h3>Implementación de esquemas de autenticación y autorización</h3>
        <p>FastAPI permite implementar diferentes esquemas de autenticación y autorización, como BasicAuth, OAuth2, JWT, entre otros. Para implementar estos esquemas, se pueden utilizar diferentes bibliotecas como <b>fastapi-users</b>, <b>fastapi-jwt-auth</b>, entre otras. La implementación de esquemas de autenticación y autorización permite proteger las rutas y recursos de la API y garantizar que los usuarios tengan los permisos necesarios para acceder a ellos.</p>
        <h3>Uso de tokens JWT</h3>
        <p>FastAPI permite utilizar tokens JWT (JSON Web Tokens) para autenticar y autorizar las solicitudes de los usuarios. Los tokens JWT son un estándar abierto para la creación de tokens de acceso que se utilizan para autenticar y autorizar las solicitudes. Para utilizar tokens JWT en FastAPI, se pueden utilizar bibliotecas como <b>fastapi-jwt-auth</b>, que proporciona funciones para generar y validar tokens JWT. Los tokens JWT permiten proteger las rutas y recursos de la API de manera segura y escalable.</p>
        <h3>Protección de rutas y recursos</h3>
        <p>FastAPI permite proteger las rutas y recursos de la API utilizando diferentes esquemas de autenticación y autorización, como tokens JWT, BasicAuth, OAuth2, entre otros. Para proteger las rutas y recursos de la API, se pueden utilizar los decoradores de Python <b>@fastapi.security()</b> y <b>@fastapi.depends()</b>. Por ejemplo, se puede proteger una ruta de la API utilizando el esquema de autenticación JWT de la siguiente manera:</p>
        <div class="code-container">
            <pre>
                <code> 
                <span class="blue">from</span> fastapi <span class="blue">import</span> Depends, FastAPI, HTTPException
                <span class="blue">from</span> fastapi.security <span class="blue">import</span> JWTBearer, HTTPBearer

                security = HTTPBearer()
                app = FastAPI()

                <span class="gris">@app.get(<span class="green">"/"</span>)</span>
                <span class="blue">async def </span> <span class="red">root</span>(token: HTTPBearer = Depends(security)):
                    <span class="blue">return </span>{<span class="green">"message": "Hello World"</span>}   
                </code>
            </pre>
            <button class="copy-button">Copiar</button> 
        </div><!--End Code-->
        <p>En este ejemplo, se utiliza el decorador <b>@app.get()</b> para definir una ruta para la página principal de la aplicación. Además, se utiliza el decorador <b>Depends()</b> para requerir que se proporcione un token JWT válido para acceder a la ruta. El decorador <b>HTTPBearer()</b> define el esquema de autenticación JWT y el objeto <b>security</b> se utiliza para proteger la ruta de la API.</p>
        <p>En resumen, FastAPI permite implementar diferentes esquemas de autenticación y autorización, como tokens JWT, BasicAuth, OAuth2, entre otros. Además, FastAPI proporciona herramientas para proteger las rutas y recursos de la API de manera sencilla y escalable utilizando decoradores de Python.</p>


        <h2>Despliegue y escalabilidad</h2>
        <h3>Empaquetamiento de la aplicación</h3>
        <p>Para desplegar una aplicación desarrollada con FastAPI, se debe empacar la aplicación y sus dependencias en un paquete o contenedor. Esto se puede hacer utilizando herramientas como <b>Docker</b>, <b>PyInstaller</b> o <b>pip</b>. Empaquetar la aplicación y sus dependencias asegura que la aplicación se puede desplegar de manera consistente y reproducible en diferentes entornos.</p>
        <h3>Despliegue en diferentes entornos</h3>
        <p>FastAPI se puede desplegar en diferentes entornos, como servidores web, servidores de aplicaciones, contenedores, entre otros. Para desplegar una aplicación desarrollada con FastAPI, se deben configurar las variables de entorno, los archivos de configuración y los permisos de acceso. Además, se pueden utilizar herramientas de automatización como <b>Ansible</b>, <b>Terraform</b> o <b>Chef</b> para simplificar y estandarizar el proceso de despliegue.</p>
        <h3>Carga de balanceo y escalabilidad horizontal</h3>
        <p>FastAPI se puede escalar horizontalmente para manejar grandes volúmenes de solicitudes utilizando herramientas como <b>NGINX</b>, <b>HAProxy o AWS Elastic Load Balancer</b>. La escalabilidad horizontal se refiere a agregar más instancias de la aplicación en diferentes servidores o contenedores para distribuir la carga de trabajo y mejorar el rendimiento. Para escalar horizontalmente una aplicación desarrollada con FastAPI, se debe configurar la infraestructura de red, el equilibrador de carga y los servidores o contenedores adicionales.</p>
        <div class="content-imag">
            <img src="../images/blog/fastApi/balanceo.jpg" alt="">
        </div>

        <h2>Ejemplos y prácticas recomendadas</h2>
        <h3>Ejemplos de aplicaciones completas</h3>
        <p>FastAPI proporciona una variedad de ejemplos de aplicaciones completas que se pueden utilizar como base para el desarrollo de aplicaciones. Estos ejemplos incluyen aplicaciones de CRUD (Create, Read, Update, Delete), aplicaciones de chat en tiempo real, aplicaciones de reconocimiento de imágenes, entre otras. Los ejemplos de aplicaciones completas permiten comprender mejor cómo funciona FastAPI en un contexto real y pueden utilizarse como punto de partida para el desarrollo de nuevas aplicaciones.</p>
        <h3>Prácticas recomendadas para el desarrollo de aplicaciones FastAPI</h3>
        <p>Para desarrollar aplicaciones con FastAPI de manera efectiva, se deben seguir algunas prácticas recomendadas. Entre ellas se incluyen:</p>
        <ul>
            <li>Utilizar los esquemas de <b>pydantic</b> para validar los datos de entrada y salida.</li>
            <li>Utilizar los decoradores de <b>fastapi</b> para proteger las rutas y recursos de la API.</li>
            <li>Utilizar la biblioteca <b>SQLAlchemy</b> o <b>Tortoise ORM</b> para interactuar con la base de datos.</li>
            <li>Utilizar la biblioteca <b>pytest</b> para crear pruebas unitarias y de integración.</li>
            <li>Utilizar la biblioteca <b>uvicorn</b> como servidor de aplicaciones para maximizar el rendimiento.</li>
        </ul>
        <h3>Integración con otras herramientas y servicios</h3>
        <p>FastAPI se puede integrar con diferentes herramientas y servicios para mejorar la funcionalidad de la aplicación. Entre las herramientas y servicios se incluyen:</p>
        <ul>
            <li><b>Docker</b>  para el empaquetamiento y la distribución de la aplicación.</li>
            <li><b>Swagger UI</b>  para la documentación interactiva de la API.</li>
            <li> <b> Celery</b> para la ejecución de tareas en segundo plano y la programación de trabajos.</li>
            <li><b>AWS Lambda</b> o <b>Google Cloud Functions</b> para la ejecución de la aplicación sin servidores.</li>
            <li> <b>GitHub Actions</b> o <b>Travis CI</b> para la integración continua y la entrega continua.</li>
        </ul>
        <p>En resumen, FastAPI proporciona ejemplos de aplicaciones completas, prácticas recomendadas y herramientas para el desarrollo y la integración de aplicaciones. Siguiendo las prácticas recomendadas y utilizando herramientas como <b>Docker</b>, <b>Swagger UI </b>, <b>Celery</b>, entre otras, se puede mejorar la funcionalidad y escalabilidad de la aplicación.</p>





        <a href="https://fastapi.tiangolo.com/">Documentación de FastAPi</a>
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