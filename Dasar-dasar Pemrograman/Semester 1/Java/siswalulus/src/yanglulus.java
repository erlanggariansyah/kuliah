public class yanglulus {
    public static class Murid {
        private String nama;
        private Integer nilai;

        public String getNama() {
            return nama;
        }

        public Integer getNilai() {
            return nilai;
        }

        public void setNama(String nama) {
            this.nama = nama;
        }

        public void setNilai(Integer nilai) {
            this.nilai = nilai;
        }
    }

    public static void filterNilai(Object[] param) {
        for (int i = 0; i < param.length; i++) {
            Murid murid = (Murid) param[i];
            if (murid.getNilai() > 65) {
                System.out.println(murid.getNama());
            }
        }
    }

    public static void main(String[] args) {
        Object[] param = new Object[4];

        Murid reza = new Murid();
        reza.setNama("reza");
        reza.setNilai(70);

        Murid ciut = new Murid();
        ciut.setNama("ciut");
        ciut.setNilai(63);

        Murid dian = new Murid();
        dian.setNama("dian");
        dian.setNilai(80);

        Murid badu = new Murid();
        badu.setNama("badu");
        badu.setNilai(40);

        param[0] = reza;
        param[1] = ciut;
        param[2] = dian;
        param[3] = badu;

        filterNilai(param);
    }
}
