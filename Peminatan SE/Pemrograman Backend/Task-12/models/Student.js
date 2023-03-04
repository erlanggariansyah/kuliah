const db = require("../config/database");

class Student {
    static last() {
        return new Promise((resolve, reject) => {
            db.query("SELECT * FROM students ORDER BY id DESC LIMIT 1", (e, r) => {
                resolve(r);
            })
        })
    }

    static all() {
        return new Promise((resolve, reject) => {
            const query = "SELECT * FROM students";

            db.query(query, (e, r) => {
                resolve(r);
            })
        })
    }

    static async insert(req) {
        // maaf kak serba manual, just keep the core concepts alive (padahal memang tidak tahu express :D)
        const latestStudent = await this.last();
        const id = latestStudent.id + 1;
        const { nama, nim, email, jurusan } = req;

        return new Promise((resolve, reject) => {
            const query = `INSERT INTO students (id, nama, nim, email, jurusan, updated_at, created_at) VALUES
            (\"${id}\", \"${nama}\", \"${nim}\", \"${email}\", \"${jurusan}\"   , NOW(), NOW())`;

            db.query(query, (e, r) => {
                if (e) console.error(e.message);
                resolve(r);
            })
        })
    }

    static async find(id) {
        return new Promise((resolve, reject) => {
            const query = "SELECT * FROM students WHERE id = " + id;

            db.query(query, (e, r) => {
                const [ student ] = r;
                resolve(student);
            })
        });
    }
}

module.exports = Student;
