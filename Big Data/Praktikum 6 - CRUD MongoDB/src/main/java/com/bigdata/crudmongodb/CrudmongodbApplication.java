package com.bigdata.crudmongodb;

import com.bigdata.crudmongodb.data.StudentRaw;
import com.bigdata.crudmongodb.model.Student;
import com.bigdata.crudmongodb.repository.StudentRepository;
import org.springframework.boot.CommandLineRunner;
import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.context.annotation.Bean;

import java.time.LocalDateTime;

@SpringBootApplication
public class CrudmongodbApplication {

	public static void main(String[] args) {
		SpringApplication.run(CrudmongodbApplication.class, args);
	}

	@Bean
	CommandLineRunner runner(StudentRepository repository) {
		return args -> {
			Student student = new Student(null, "Angga", "Riansyah", "erlanggariansyah@gmail.com", LocalDateTime.now());
			repository.insert(student);
		};
	}
}
