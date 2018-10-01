const mysql = require('mysql');

module.exports = () => {
    return mysql.createConnection({
        host: '94.177.196.189',
        user: 'ibotcrawl.dev',
        password: 'jZJhXHclhcazzLmz',
        database: 'ibotcrawl_dev'
    });
}