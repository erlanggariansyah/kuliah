import java.util.Arrays;

public class balikkan {
    public static void balikList(String[] param) {
        String[] hasil = new String[param.length];

        for (int i = 0; i < param.length; i++) {
            hasil[i] = param[param.length - i - 1];
        }

        System.out.println(Arrays.toString(hasil));
    }

    public static void main(String[] args) {
        String[] listBuah = new String[4];
        listBuah[0] = "mangga";
        listBuah[1] = "apel";
        listBuah[2] = "jeruk";
        listBuah[3] = "nanas";

        balikList(listBuah);
    }
}
