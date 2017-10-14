import java.io.BufferedReader;
import java.util.ArrayList;
import java.io.InputStreamReader;
public class Python
{
	public static String get(String... arguments)
	{
		try
		{
			arguments[0] = arguments[0] + ".py";
			String[] args = new String[arguments.length + 1];
			for(int i = 1; i < args.length; i++)
				args[i] = arguments[i-1];
			args[0] = "py";
			Process p = new ProcessBuilder(args).start();
			p.waitFor();
			BufferedReader in = new BufferedReader(new InputStreamReader(p.getInputStream()));
			//Debug statements
			/*in = new BufferedReader(new InputStreamReader(p.getErrorStream()));
			System.out.println(in.readLine());
			System.out.println(in.readLine());
			System.out.println(in.readLine());*/
			return in.readLine();
		} catch(Exception e)
		{e.printStackTrace();}
		return "";
	}
	public static String[] getLines(String... arguments)
	{
		try
		{
			arguments[0] = arguments[0] + ".py";
			String[] args = new String[arguments.length + 1];
			for(int i = 1; i < args.length; i++)
				args[i] = arguments[i-1];
			//for(int i = 0;i < args.length; i++) System.out.println(args[i]);
			args[0] = "py";
			Process p = new ProcessBuilder(args).start();
			p.waitFor();
			BufferedReader in = new BufferedReader(new InputStreamReader(p.getInputStream()));
			//Debug statements
			/*in = new BufferedReader(new InputStreamReader(p.getErrorStream()));
			System.out.println(in.readLine());
			System.out.println(in.readLine());
			System.out.println(in.readLine());*/
			ArrayList<String> lines = new ArrayList<String>();
			while(true)
			{
				String s = in.readLine();
				if(s == null)
				{
					String[] res = new String[lines.size()];
					for(int i = 0; i < res.length; i++)
						res[i] = lines.get(i);
					return res;
				}
				lines.add(s);
			}
		} catch(Exception e)
		{e.printStackTrace();}
		return new String[]{};
	}
}