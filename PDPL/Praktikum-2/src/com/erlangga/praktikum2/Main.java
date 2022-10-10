package com.erlangga.praktikum2;

import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        System.out.println("NAMA : Erlangga Riansyah");
        System.out.println("NIM : 0110221188");
        System.out.println("MATKUL : Pola Desain Perangkat Lunak");
        System.out.println("=".repeat(10));

        int a = 0, b = 0;
        double x = 0;
        Scanner scanner = new Scanner(System.in);
        try {
            System.out.println("Input nilai A: ");
            a = scanner.nextInt();
            System.out.println("\nInput nilai B: ");
            b = scanner.nextInt();
            System.out.println("\nInput nilai X: ");
            x = scanner.nextDouble();
        } catch (Exception e) {
            System.out.println("Input tidak sesuai.");
        }

        x = Math.toRadians(x);
        double result = Math.sqrt((a * a + b * b) - 2 * (a * b) + Math.cos(x));

        System.out.println("HASIL: " + result);
    }
}
