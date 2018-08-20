<h1>gagonzasSocialNetwork</h1>
<p>My project of social network with a chat, notifications about who see your profile and counter of visits, insert publications, customize your personal data and other news coming soon</p>

<h1>Readme en español</h1>
<p>Este proyecto funciona con las siguientes dependencias: Laravel Echo Server (servidor NodeJS), socket.io client y Redis. Para Laravel Echo Server, se instala la dependencia con <pre>sudo npm install -g laravel-echo-server</pre> Una vez listo, se ingresa el siguiente comando:<pre> laravel-echo-server init </pre> Luego le va a pedir algunas configuraciones y el servidor para socket.io estará listo con <pre>laravel-echo-server start</pre>
</p>
Con socket.io client, se instala con <pre>sudo npm install --save-dev laravel-echo socket.io-client pusher-js</pre> Las llamadas a socket.io client con javascript ya vienen listas, por lo que no hay que hacer nada más y mantener el servidor de laravel echo arriba. 

Y redis se instala situándose en la carpeta del proyecto con <pre>composer require predis/predis</pre>

Cómo debería estar el archivo .env para el funcionamiento:
<pre>
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:oyoKplMouVYQyi0iZNJ0F997AdL+YsJsnSDzjjMDbo4=
APP_DEBUG=true
APP_LOG_LEVEL=debug
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=friendbook
DB_USERNAME=root
DB_PASSWORD=

BROADCAST_DRIVER=redis // Brodcast y caché driver deben estar sí o sí con redis
CACHE_DRIVER=redis     //
SESSION_DRIVER=file
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=

</pre>

<strong>El archivo de base de datos no deben ejecutarse todos los insert, puesto que las publicaciones del usuario de la red social y del usuario de chat incluyen imágenes y video. Las publicaciones existentes en el archivo sql enlazan a archivos en storage que no existen, por lo que habrán problemas al visualizar las publicaciones. Es recomendable crear las tablas `chatcomments`, `publications_users` y `face_user` sin datos por defecto</strong>
