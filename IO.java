import java.io.File;
import java.util.Scanner;
import java.util.ArrayList;
import java.io.BufferedWriter;
import java.io.FileWriter;

public class IO
{
	public static String[] readFile(String file)
	{
		try
		{
			Scanner scan = new Scanner(new File(file));
			ArrayList<String> lines = new ArrayList<>();
			while(scan.hasNextLine())
			{
				String s = scan.nextLine();
				if(!s.equals(""))
					lines.add(scan.nextLine());
			}
			String[] res = new String[lines.size()];
			for(int i = 0; i < res.length; i++)
				res[i] = lines.get(i);
			return res;
		}
		catch(Exception e)
		{print(e);}
		return new String[]{};
	}
	public static void writeFile(String filename, String[] lines)
	{
		try {
			File file = new File(filename);
			BufferedWriter fileWriter = new BufferedWriter(new FileWriter(file));
			for(int i = 0; i < lines.length; i++)
			{
				fileWriter.write(lines[i]);
				fileWriter.newLine();
			}
			fileWriter.flush();
			fileWriter.close();
		}
		catch (Exception e)
		{ print(e);}
	}
	public static void print(String e)
	{
		System.out.println(e);
	}
	public static void print(Exception e)
	{
		e.printStackTrace();
	}
}