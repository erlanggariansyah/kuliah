import java.util.Scanner;

class Spooky {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        System.out.println("Nama    :   Erlangga Riansyah\n");
        System.out.println("NIM     :   0110221188\n");
        System.out.println("Masukkan nomor lantai: ");
        int floor = 0;
        int actualFloor = 0;
        try {
            floor = scanner.nextInt();
            scanner.close();
        } catch (Exception e) {
            System.out.println("Maaf, lantai yang anda masukkan tidak valid.");
        }

        if (floor > 13) {
            actualFloor += floor - 1;
        } else {
            actualFloor += floor;
        }

        System.out.println("Lantai anda: " + actualFloor);
    }
}
