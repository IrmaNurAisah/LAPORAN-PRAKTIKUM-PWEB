public class Kuadrat {
    // Metode untuk menghitung kuadrat dari suatu bilangan
    public static int kuadratBilangan(int bilangan) {
        return bilangan * bilangan;
    }

    public static void main(String[] args) {
        int angka = 7;
        int hasil = kuadratBilangan(angka);
        
        // Menampilkan hasil ke konsol
        System.out.println("Kuadrat dari " + angka + " adalah " + hasil); // Output: Kuadrat dari 7 adalah 49
    }
}