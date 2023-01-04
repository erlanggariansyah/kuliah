require("dotenv").config();

const mysql = require("mysql");
const {
    DB_HOST,
    DB_USERNAME,
    DB_PASSWORD,
    DB_DATABASE
} = process.env;

const db = mysql.createConnection({
    host: DB_HOST,
    user: DB_USERNAME,
    password: DB_PASSWORD,
    database: DB_DATABASE
});

db.connect((e) => {
    if (e) {
        console.error("Error connection: " + e.stack);
    } else {
        console.info("Connection success.");
    }
});

module.exports = db;