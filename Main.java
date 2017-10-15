public class Main
{
	public static void main(String[] args)
	{
		if(args.length >= 1 && args[0].equals("i"))
			new MainImplementation();
		else
			new MainImplementationStop();
	}
}