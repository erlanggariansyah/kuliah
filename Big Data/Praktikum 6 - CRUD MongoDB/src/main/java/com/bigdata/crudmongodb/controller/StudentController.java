package com.bigdata.crudmongodb.controller;

import com.bigdata.crudmongodb.data.StudentRaw;
import com.bigdata.crudmongodb.model.Student;
import com.bigdata.crudmongodb.service.StudentService;
import lombok.AllArgsConstructor;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;

import java.time.LocalDateTime;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

@RestController
@RequestMapping("/api/v1")
@AllArgsConstructor
public class StudentController {
    private StudentService service;

    @GetMapping("/students")
    public ResponseEntity<List<Student>> getAll() {
        return ResponseEntity.ok(service.getAll());
    }

    @GetMapping("/students/get")
    public ResponseEntity<Student> getById(@RequestParam String id) {
        return ResponseEntity.ok(service.getById(id));
    }

    @PostMapping("/students")
    public ResponseEntity<Map<String, String>> insert(
            @RequestParam String firstName,
            @RequestParam String lastName,
            @RequestParam String email
    ) {
        service.insert(new Student(null, firstName, lastName, email, LocalDateTime.now()));
        return ResponseEntity.ok(new HashMap<>(){{put("status", "success");}});
    }

    @DeleteMapping("/students")
    public ResponseEntity<Map<String, String>> delete(
            @RequestParam String id
    ) {
        Student student = service.getById(id);
        service.delete(student);

        return ResponseEntity.ok(new HashMap<>(){{put("status", "success");}});
    }

    @PutMapping("/students")
    public ResponseEntity<Map<String, String>> update(
            @RequestParam String id,
            @RequestParam String firstName,
            @RequestParam String lastName,
            @RequestParam String email
    ) {
        Student student = service.getById(id);
        Student newStudent = new Student(null, firstName, lastName, email, null);
        StudentRaw studentRaw = StudentRaw.getInstance();
        studentRaw.setStudent(newStudent);

        service.update(student, studentRaw);
        return ResponseEntity.ok(new HashMap<>(){{put("status", "success");}});
    }
}
