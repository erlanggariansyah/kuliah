import java.util.Scanner;

public class fibonacci {
    public static Integer fibonacciRecursive(Integer param) {
        if (param == 0 || param == 1) {
            return param;
        } else {
            return (fibonacciRecursive(param - 1) + fibonacciRecursive(param - 2));
        }
    }

    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        System.out.println("Masukkan batas deret: ");
        Integer param = input.nextInt();
        int n = 1;

        for (int i = 1; i <= param; i++) {
            System.out.println(fibonacciRecursive(n));
            n++;
        }
    }
}
