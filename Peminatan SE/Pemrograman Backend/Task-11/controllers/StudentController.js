// TODO 3: Import data students dari folder data/students.js
import { students } from "../data/students.js";

// Membuat Class StudentController
class StudentController {
  index(req, res) {
    // TODO 4: Tampilkan data students
    const data = {
      message: "Menampilkkan semua students",
      data: students,
    };

    res.json(data);
  }

  store(req, res) {
    const { nama } = req.body;

    // TODO 5: Tambahkan data students
    students.push({
      "id": students[students.length - 1].id + 1,
      "nama": nama
    });

    const data = {
      message: `Menambahkan data student: ${nama}`,
      data: students[students.length - 1],
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

export default new StudentController();
