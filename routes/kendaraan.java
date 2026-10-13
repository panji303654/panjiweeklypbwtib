```java
// ==========================================================
// TUGAS PBO - IMPLEMENTASI KONSEP PBO DALAM SATU PROGRAM
// Tema: Sistem Manajemen Kendaraan
// ==========================================================

// ==========================================================
// INTERFACE
// ==========================================================
interface BisaBerjalan {
    void berjalan();
}

// ==========================================================
// ABSTRACT CLASS
// Memiliki abstract method dan method konkret
// ==========================================================
abstract class Kendaraan {

    // ENCAPSULATION
    // Atribut dibuat private
    private String merk;
    private int tahun;

    // CONSTRUCTOR
    public Kendaraan(String merk, int tahun) {
        this.merk = merk;
        setTahun(tahun);
    }

    // GETTER
    public String getMerk() {
        return merk;
    }

    // SETTER
    public void setMerk(String merk) {
        this.merk = merk;
    }

    public int getTahun() {
        return tahun;
    }

    // SETTER DENGAN VALIDASI
    public void setTahun(int tahun) {
        if (tahun >= 2000) {
            this.tahun = tahun;
        } else {
            System.out.println("Tahun kendaraan minimal 2000.");
            this.tahun = 2000;
        }
    }

    // ABSTRACT METHOD
    public abstract void tampilkanInfo();

    // METHOD KONKRET
    public void nyalakanMesin() {
        System.out.println("Mesin kendaraan dinyalakan.");
    }

    // METHOD OVERLOADING
    public void servis() {
        System.out.println("Kendaraan sedang melakukan servis umum.");
    }

    public void servis(String jenisServis) {
        System.out.println("Kendaraan melakukan servis: " + jenisServis);
    }
}

// ==========================================================
// INHERITANCE + INTERFACE
// Class Mobil mewarisi Kendaraan
// ==========================================================
class Mobil extends Kendaraan implements BisaBerjalan {

    private int jumlahPintu;

    public Mobil(String merk, int tahun, int jumlahPintu) {
        super(merk, tahun);
        this.jumlahPintu = jumlahPintu;
    }

    public int getJumlahPintu() {
        return jumlahPintu;
    }

    public void setJumlahPintu(int jumlahPintu) {
        this.jumlahPintu = jumlahPintu;
    }

    // METHOD OVERRIDING
    @Override
    public void tampilkanInfo() {
        System.out.println("Jenis          : Mobil");
        System.out.println("Merk           : " + getMerk());
        System.out.println("Tahun          : " + getTahun());
        System.out.println("Jumlah Pintu   : " + jumlahPintu);
    }

    // IMPLEMENTASI INTERFACE
    @Override
    public void berjalan() {
        System.out.println("Mobil sedang berjalan di jalan raya.");
    }
}

// ==========================================================
// INHERITANCE
// Class Motor juga mewarisi Kendaraan
// ==========================================================
class Motor extends Kendaraan {

    private boolean memilikiBox;

    public Motor(String merk, int tahun, boolean memilikiBox) {
        super(merk, tahun);
        this.memilikiBox = memilikiBox;
    }

    public boolean isMemilikiBox() {
        return memilikiBox;
    }

    public void setMemilikiBox(boolean memilikiBox) {
        this.memilikiBox = memilikiBox;
    }

    // METHOD OVERRIDING
    @Override
    public void tampilkanInfo() {
        System.out.println("Jenis          : Motor");
        System.out.println("Merk           : " + getMerk());
        System.out.println("Tahun          : " + getTahun());
        System.out.println("Memiliki Box   : " +
                (memilikiBox ? "Ya" : "Tidak"));
    }
}

// ==========================================================
// CLASS PEMILIK
// Contoh class tambahan untuk memenuhi konsep Class & Object
// ==========================================================
class Pemilik {

    private String nama;
    private String alamat;

    public Pemilik(String nama, String alamat) {
        this.nama = nama;
        this.alamat = alamat;
    }

    public String getNama() {
        return nama;
    }

    public void setNama(String nama) {
        this.nama = nama;
    }

    public String getAlamat() {
        return alamat;
    }

    public void setAlamat(String alamat) {
        this.alamat = alamat;
    }

    public void tampilkanPemilik() {
        System.out.println("Nama Pemilik   : " + nama);
        System.out.println("Alamat         : " + alamat);
    }
}

// ==========================================================
// MAIN CLASS
// ==========================================================
public class Main {

    public static void main(String[] args) {

        System.out.println("==============================================");
        System.out.println("       SISTEM MANAJEMEN KENDARAAN");
        System.out.println("==============================================");

        // ==================================================
        // CLASS DAN OBJECT
        // Membuat object dari beberapa class
        // ==================================================
        Pemilik pemilik = new Pemilik(
                "Panji Satria Pratama",
                "Semarang"
        );

        Mobil mobil = new Mobil(
                "Toyota",
                2022,
                4
        );

        Motor motor = new Motor(
                "Honda",
                2021,
                true
        );

        // ==================================================
        // DATA PEMILIK
        // ==================================================
        System.out.println("\n--- DATA PEMILIK ---");
        pemilik.tampilkanPemilik();

        // ==================================================
        // DATA MOBIL
        // ==================================================
        System.out.println("\n--- DATA MOBIL ---");
        mobil.tampilkanInfo();

        // Method konkret dari abstract class
        mobil.nyalakanMesin();

        // Method interface
        mobil.berjalan();

        // Method overloading
        mobil.servis();
        mobil.servis("Ganti Oli");

        // ==================================================
        // DATA MOTOR
        // ==================================================
        System.out.println("\n--- DATA MOTOR ---");
        motor.tampilkanInfo();

        // Method konkret dari abstract class
        motor.nyalakanMesin();

        // Method overloading
        motor.servis("Pengecekan Rem");

        // ==================================================
        // VALIDASI SETTER
        // ==================================================
        System.out.println("\n--- TEST VALIDASI ---");

        mobil.setTahun(1995);

        System.out.println(
                "Tahun mobil setelah validasi: "
                + mobil.getTahun()
        );

        // ==================================================
        // POLIMORFISME DINAMIS
        // Object parent menunjuk object child
        // ==================================================
        System.out.println("\n--- POLIMORFISME ---");

        Kendaraan kendaraan1 = mobil;
        Kendaraan kendaraan2 = motor;

        kendaraan1.tampilkanInfo();

        System.out.println();

        kendaraan2.tampilkanInfo();

        System.out.println("\n==============================================");
        System.out.println("          PROGRAM SELESAI DIJALANKAN");
        System.out.println("==============================================");
    }
}
```
