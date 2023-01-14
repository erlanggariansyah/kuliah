package com.bigdata.crudmongodb.service;

import com.bigdata.crudmongodb.data.StudentRaw;
import com.bigdata.crudmongodb.model.Student;
import com.bigdata.crudmongodb.repository.StudentRepository;
import lombok.AllArgsConstructor;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

import java.util.List;

@AllArgsConstructor
@Service
public class StudentService {
    private StudentRepository repository;

    public List<Student> getAll() {
        return repository.findAll();
    }

    public Student getById(String id) {
        return repository.findById(id).orElse(null);
    }

    @Transactional
    public void insert(Student student) {
        repository.insert(student);
    }

    @Transactional
    public void delete(Student student) {
        repository.delete(student);
    }

    @Transactional
    public void update(Student student, StudentRaw newStudent) {
        student.setEmail(newStudent.getStudent().getEmail());
        student.setFirstName(newStudent.getStudent().getFirstName());
        student.setLastName(newStudent.getStudent().getLastName());
        repository.save(student);
    }
}
