// TODO 3: Import data students dari folder data/students.js
const { students } = require("../data/students");
const Student = require("../models/Student");

// Membuat Class StudentController
class StudentController {
//   index(req, res) {
//     // TODO 4: Tampilkan data students
//     const data = {
//       message: "Menampilkkan semua students",
//       data: students,
//     };

//     res.json(data);
//   }

  async index(req, res) {
    const students = await Student.all();

    const data = {
        message: "Menampilkan semua students.",
        data: students
    }

    res.json(data);
  }

  async store(req, res) {
    Student.insert(req.body);
    const student = await Student.last();

    const data = {
      message: `Menambahkan data student: ${req.body.nama}`,
      data: student
    };

    res.json(data);
  }

  update(req, res) {
    const { id } = req.params;
    const { nama } = req.body;
    let student = null;

    // TODO 6: Update data students
    for (let i = 0; i < students.length; i++) {
      if (students[i].id == id) {
        students[i].nama = nama;
        student = students[i];
      }
    }

    const data = {
      message: `Mengedit student id ${id}, nama ${nama}`,
      data: student,
    };

    res.json(data);
  }

  destroy(req, res) {
    const { id } = req.params;

    // TODO 7: Hapus data students
    for (let i = 0; i < students.length; i++) {
      if (students[i].id == id) {
        students.splice(i, i);
      }
    }

    const data = {
      message: `Menghapus student id ${id}`,
      data: null,
    };

    res.json(data);
  }
}

module.exports = new StudentController();
