package duplikat;

import java.util.Arrays;

public class duplikatMain {
    private static void duplikat(String[] param) {
        String[] copyParam = param;
        String[] hasil = new String[param.length * 2];

        System.arraycopy(param, 0, hasil, 0, param.length);
        System.arraycopy(copyParam, 0, hasil, param.length, param.length);

        System.out.println(Arrays.toString(hasil));
    }

    public static void main(String[] args) {
        String[] parameter = new String[5];
        for (int i = 0; i < 5; i++) {
            parameter[i] = String.valueOf("Index ke-" + i);
        }

        duplikat(parameter);
    }
}
