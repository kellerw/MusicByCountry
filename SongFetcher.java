//Maps country strings to sources
import java.util.HashMap;
public class SongFetcher
{
	public SongFetcher()
	{}
	private HashMap<String, String> map = new HashMap<String, String>();
	public String[][] getTopSongsByCountry(String country)
	{
		try
		{
			String[] lines = Python.getLines(map.get(country), country);
			String[][] songs = new String[lines.length][];
			for(int i = 0; i < lines.length; i++)
				songs[i] = lines[i].split("\\|");
			if(songs.length > 0)
				return songs;
		}
		catch(Exception e)
		{}
		return new String[][]{};
	}
	public void setType(String country, String type)
	{
		map.put(country, type);
	}
}