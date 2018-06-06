const dbConnection = require('../../config/database');

module.exports = app => {

    const connection = dbConnection();

    app.get('/users', (req, res) => {
        connection.query('SELECT * FROM ibc_users', (err, result) => {
            const date = new Date().toISOString().replace(/T/, ' ').replace(/\..+/, '');
            res.json({
                success: true,
                message: "Todos los usuarios",
                date: date,
                result: result
            });
        });
    });

    app.get('/user/:id', (req, res) => {
        const id = req.params.id;
        connection.query('SELECT * FROM ibc_users WHERE ID = ' + id, (err, result) => {
            const date = new Date().toISOString().replace(/T/, ' ').replace(/\..+/, '');
            res.json({
                success: true,
                message: "Datos de usuario",
                date: date,
                result: result
            });
        });
    });

    app.post('/users', (req, res) => {
        const { user_login, user_pass, user_email } = req.body;
        const user_registered = new Date().toISOString().replace(/T/, ' ').replace(/\..+/, '');
        connection.query('INSERT INTO ibc_users SET ? ', {
            user_login,
            user_pass,
            user_email,
            user_registered
        }, (err, result) => {
            if (err) {
                res.json({
                    success: false,
                    message: "Error al insertar los datos",
                    result: req.body
                });
            } else {
                res.redirect('/users');
            }
        });
    });
};