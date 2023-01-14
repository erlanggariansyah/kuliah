package com.bigdata.crudmongodb.data;

import com.bigdata.crudmongodb.model.Student;
import lombok.Data;

@Data
public class StudentRaw {
    private Student student;

    private StudentRaw() {}

    public static StudentRaw getInstance() {
        return new StudentRaw();
    }

    public void setStudent(Student student) {
        this.student = student;
    }
}
