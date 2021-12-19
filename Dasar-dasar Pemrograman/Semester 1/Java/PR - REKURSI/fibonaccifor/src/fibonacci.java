import java.util.Scanner;

public class fibonacci {
    public static void main(String[] args) {
        System.out.println("Masukkan batas deret: ");
        Scanner input = new Scanner(System.in);
        Integer param = input.nextInt();

        int f1 = 1, f2 = 1, next = 0;

        for (int i = 1; i <= param; i++) {
            if (i == 1){
                System.out.println(f1);
                continue;
            }

            if (i == 2){
                System.out.println(f2);
                continue;
            }

            next = f1 + f2;
            f1 = f2;
            f2 = next;

            System.out.println(next);
        }
    }
}
