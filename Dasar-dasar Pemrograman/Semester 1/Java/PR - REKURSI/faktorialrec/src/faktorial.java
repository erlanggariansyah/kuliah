import java.util.Scanner;

public class faktorial {
    public static Integer faktor(Integer param) {
        if (param == 2) {
            return 2;
        }

        if (param > 2) {
            return param * faktor(param - 1);
        }

        return 1;
    }

    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        System.out.println("Masukkan nilai: ");
        Integer param = input.nextInt();

        Integer hasil = faktor(param);
        System.out.println("Hasil faktorial: "+hasil);
    }
}
