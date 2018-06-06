// Añadimos la configuracion del servidor
const app = require('./config/server');

// Añadimos la ruta de users pasandole el server
require('./app/routes/users')(app);

// Iniciamos el servidor
app.listen(app.get('port'), () => {
    console.log('Servidor iniciado en el puerto: ', app.get('port'));
});