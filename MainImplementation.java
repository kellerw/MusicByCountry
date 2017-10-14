import java.util.HashMap;
import java.util.List;

public class MainImplementation implements MainInterface
{
	private SongFetcher fetcher = new SongFetcher();
	private HashMap<String, Song[]> map = new HashMap<>();
	private String[] countrylist;
	private String[] adjective;
	public MainImplementation()
	{
		loadSongCaches();
		update();
		//TODO: Add timer
	}
	//load song caches from file
	private void loadSongCaches()
	{
		String[] data = IO.readFile("SongLookupData");
		countrylist = new String[data.length];
		adjective = new String[data.length];
		for(int i = 0; i < data.length; i++)
		{
			String[] parts = data[i].split(" - ");
			countrylist[i] = parts[0];
			fetcher.setType(parts[0], parts[1]);
			adjective[i] = parts[2];
		}
		for(String s : countrylist)
		{
			String[] parts = IO.readFile("cache/"+s+"-data");
			Song[] songs = new Song[parts.length];
			for(int i = 0; i < parts.length; i++)
				songs[i] = new Song(parts[i].split(","));
			map.put(s, songs);
		}
	}
	//try reloading all from countries
	private void update()
	{
		for(String country : countrylist)
		{
			String[][] songinfo = fetcher.getTopSongsByCountry(country);
			//cache.getSongs(country);
			Song[] songs = new Song[songinfo.length];
			for(int i = 0; i < songs.length; i++)
			{
				songs[i] = new Song(songinfo[i][0], songinfo[i][1], 
					YouTubeGet.getURL(songinfo[i][0], songinfo[i][1]),
					GoogleImages.getURL(songinfo[i][0], songinfo[i][1]));
			}
			//TODO: Do Wikipedia Filter
			if(songs.length > 0)
			{
				String[] parts = new String[songs.length];
				for(int i = 0; i < parts.length; i++)
					parts[i] = songs[i].toString();
				IO.writeFile("cache/"+country+"-data", parts);
				map.put(country, songs);
			}
		}
	}
	public Song[] getSongs(String country)
	{
		return map.get(country);
	}
}