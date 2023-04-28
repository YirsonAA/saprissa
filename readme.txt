Migraciones:
database/migrations/2023_04_28_000000_create_estadios_table.php: El archivo que describe cómo crear la tabla de estadios en la base de datos.
database/migrations/2023_04_28_000001_create_partidos_table.php: El archivo que describe cómo crear la tabla de partidos en la base de datos.

Rutas:
routes/web.php: El archivo que indica cómo se conectan las URLs con los controladores y vistas.

Modelos:
app/Models/Estadio.php: El archivo que define cómo se maneja la información de los estadios en la base de datos.
app/Models/Partido.php: El archivo que define cómo se maneja la información de los partidos en la base de datos.

Controladores:
app/Http/Controllers/EstadioController.php: El que controla cómo se manejan los estadios (crear, leer, actualizar y eliminar).
app/Http/Controllers/PartidoController.php: El que controla cómo se manejan los partidos (crear, leer, actualizar y eliminar).

Vistas:
resources/views/layouts/app.blade.php: La plantilla base que contiene la estructura y elementos comunes para todas las páginas.

resources/views/estadios/index.blade.php: La página que muestra la lista de estadios.

resources/views/estadios/create.blade.php: La página para agregar un estadio nuevo.

resources/views/estadios/edit.blade.php: La página para modificar un estadio existente.

resources/views/estadios/show.blade.php: La página que muestra los detalles de un estadio.

resources/views/partidos/index.blade.php: La página que muestra la lista de partidos.

resources/views/partidos/create.blade.php: La página para agregar un partido nuevo.

resources/views/partidos/edit.blade.php: La página para modificar un partido existente.

resources/views/partidos/show.blade.php: La página que muestra los detalles de un partido.

resources/views/partidos/estadio.blade.php: La página que muestra los partidos de un estadio específico.

resources/views/welcome.blade.php: La página de bienvenida con enlaces a las listas de estadios y partidos.

resources/views/gestor.blade.php: La página con enlaces para gestionar estadios y partidos, con un sistema simple de usuario y contraseña.


