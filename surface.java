public class surface {
    public static void main(String[] args) {
		final double PI = 3.14;
		int rayon = Integer.parseInt(args[0]);
		double surface;
		surface=rayon*rayon*PI;
        System.out.println("La surface du cercle pour r= "+rayon+" est " + surface+" m2");
    }
}

