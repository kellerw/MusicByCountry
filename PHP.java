import java.io.File;
public class PHP
{
	public static void write(String argument)
	{
		try
		{
			ProcessBuilder pb = new ProcessBuilder("php","main.php",argument);
			pb.redirectOutput(new File("output/index.html"));
			Process p = pb.start();
			p.waitFor();
		} catch(Exception e)
		{e.printStackTrace();}
	}
}