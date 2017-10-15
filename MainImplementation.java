import java.util.HashMap;
import java.util.ArrayList;
import java.util.List;

public class MainImplementation implements MainInterface
{
	private SongFetcher fetcher = new SongFetcher();
	private HashMap<String, Song[]> map = new HashMap<>();
	private String[] countrylist;
	private HashMap<String, String> adjective;
	public MainImplementation()
	{
		loadSongCaches();
		Thread t = new Thread(this::update);
		t.start();
	}
	//load song caches from file
	private void loadSongCaches()
	{
		String[] data = IO.readFile("cache/SongLookupData.txt");
		countrylist = new String[data.length];
		adjective = new HashMap<String, String>();
		for(int i = 0; i < data.length; i++)
		{
			String[] parts = data[i].split(" - ");
			countrylist[i] = parts[0];
			fetcher.setType(parts[0], parts[1]);
			adjective.put(parts[0], parts[2]);
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
		while(true){
		try{
		for(String country : countrylist)
		{
			String[][] songinfo = fetcher.getTopSongsByCountry(country);
			ArrayList<String[]> filtering = new ArrayList<String[]>();
			for(int i = 0; i < songinfo.length; i++)
			{
				if("True".equals(Python.get("Wikipedia",songinfo[i][0], songinfo[i][1], adjective.get(country))))
					filtering.add(songinfo[i]);
			}
			songinfo = new String[filtering.size()][];
			for(int i = 0; i < songinfo.length; i++)
				songinfo[i] = filtering.get(i);
			Song[] songs = new Song[songinfo.length];
			for(int i = 0; i < songs.length; i++)
			{
				songs[i] = new Song(songinfo[i][0], songinfo[i][1], 
					Python.get("Youtube","--q", songinfo[i][1] + " " + songinfo[i][0]));
			}
			if(songs.length > 0)
			{
				String[] parts = new String[songs.length];
				for(int i = 0; i < parts.length; i++)
				{
					parts[i] = songs[i].toString();
				}
				IO.writeFile("cache/"+country+"-data", parts);
				map.put(country, songs);
			}
		}
		PHP.write(getAllSongs());
		Thread.sleep(86400000L);
		} catch(Exception e){}
		}
	}
	public Song[] getSongs(String country)
	{
		return map.get(country);
	}
	public String getAllSongs()
	{
		String s = "";
		for(int i = 0; i < countrylist.length; i++)
		{
			Song[] songs = getSongs(countrylist[i]);
			if(songs.length > 0)
			{
				s = s + countrylist[i] + "|";
				for(int j = 0; j < songs.length; j++)
					s = s + songs[j].toString() + "|";
			}
		}
		return s;
	}
}