import java.util.Scanner;

public class Main {

    public static void main(String[] args) {

        Scanner input = new Scanner(System.in);

        Produk produk = new Produk();

        System.out.print("Nama produk : ");
        produk.namaProduk = input.nextLine();

        System.out.print("Harga       : Rp");
        produk.harga = input.nextDouble();

        System.out.print("Jumlah      : ");
        produk.jumlah = input.nextInt();

        produk.tampilkanProduk();
        produk.tampilkanTotal();

        input.close();
    }
}

class Produk {

    String namaProduk;
    double harga;
    int jumlah;

    void tampilkanProduk() {
        System.out.println("\n=== DATA PRODUK ===");
        System.out.println("Nama produk : " + namaProduk);
        System.out.println("Harga       : Rp" + harga);
        System.out.println("Jumlah      : " + jumlah);
    }

    double hitungTotal() {
        return harga * jumlah;
    }

    void tampilkanTotal() {
        System.out.println("Total harga : Rp" + hitungTotal());
    }
}