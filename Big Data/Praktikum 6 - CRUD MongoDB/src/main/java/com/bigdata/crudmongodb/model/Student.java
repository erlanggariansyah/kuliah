package com.bigdata.crudmongodb.model;

import lombok.AllArgsConstructor;
import lombok.Data;
import lombok.NoArgsConstructor;
import org.springframework.data.annotation.Id;
import org.springframework.data.mongodb.core.mapping.Document;

import java.time.LocalDateTime;

@Data
@Document
@AllArgsConstructor
@NoArgsConstructor
public class Student {
    @Id
    private String id;
    private String firstName;
    private String lastName;
    private String email;
    private LocalDateTime created_at;
}
