package com.bigdata.crudmongodb.repository;

import com.bigdata.crudmongodb.model.Student;
import org.springframework.data.mongodb.repository.MongoRepository;

public interface StudentRepository extends MongoRepository<Student, String> {
}
