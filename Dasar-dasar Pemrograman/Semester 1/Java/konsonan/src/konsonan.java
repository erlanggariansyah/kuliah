public class konsonan {
    public static void replaceKonsonan(String param) {
        Character[] vocal = new Character[6];
        vocal[0] = 'a';
        vocal[1] = 'i';
        vocal[2] = 'u';
        vocal[3] = 'e';
        vocal[4] = 'o';
        vocal[5] = ' ';

        String test = param;

        for (int i = 0; i < 6; i++) {
            test = test.replace(vocal[i].toString(), "");
        }

        System.out.println(test);
    }

    public static void main(String[] args) {
        replaceKonsonan("Nurul Fikri");
    }
}
