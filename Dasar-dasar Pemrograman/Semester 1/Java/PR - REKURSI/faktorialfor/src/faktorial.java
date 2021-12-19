import java.util.Scanner;

public class faktorial {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        Integer faktor = 1;

        System.out.println("Masukkan nilai: ");
        Integer param = input.nextInt();

        for (int i = 1; i < param + 1; i++) {
            faktor *= i;
        }

        System.out.println("Hasil faktorial: "+faktor);
    }
}
