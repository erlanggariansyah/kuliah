package com.bigdata.crudmongodb.service;

import com.bigdata.crudmongodb.model.Student;
import com.bigdata.crudmongodb.repository.StudentRepository;
import lombok.AllArgsConstructor;
import org.springframework.stereotype.Service;

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

    public void insert(Student student) {
        repository.insert(student);
    }

    public void delete(Student student) {
        repository.delete(student);
    }

    public void update(Student student, Student newStudent) {
        student.setEmail(newStudent.getEmail());
        student.setFirstName(newStudent.getFirstName());
        student.setLastName(newStudent.getLastName());
        repository.save(student);
    }
}
